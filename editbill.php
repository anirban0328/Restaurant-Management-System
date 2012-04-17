<?php
	session_start();
	if(!isset($_SESSION[username]))
	{
		header("Location:index.php");
		exit;
	}
	include("header.php");
?>
<html>
<head>
<title>CUSTOMERS</title>
<link href="stylesheets/main.css" media="all" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
	include("sql.php");
	$q="SELECT DISTINCT bill_id FROM orders WHERE paid='N';";
	$res=mysql_query($q,$con) or die('error');
	echo '<form action="editbill2.php" method="post">
	<select name="billid">';
	while($arr=mysql_fetch_array($res))
	{
		echo '<option value="'.$arr[0].'">'.$arr[0].' </option>';
	}
	echo '</select>
	<input type="submit" value="Submit">
	</form>';
?>