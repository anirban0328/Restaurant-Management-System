<?php
	session_start();
	if(!isset($_SESSION[username]))
	{
		header("Location:index.php");
		exit;
	}
?>
<html>
<head>
	<link href="stylesheets/main.css" media="all" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
	include("header.php");
	include("javascript/validate.php");
?>
<?php
	$ph=$_POST[ph];
	include("sql.php");
	$q="SELECT * FROM home_delivery_customers WHERE cust_ph='".$ph."'";
	$res=mysql_query($q,$con) or die("error");
	if($arr=mysql_fetch_array($res))
	{
		echo '<div align="center">';
		echo "CUSTOMER NAME : ".$arr[1]." <br/>";
		echo "CUSTOMER ADDRESS : ".$arr[2]." <br/>";
		echo "CUSTOMER PHONE : ".$arr[0]." <br/> ";		
		echo '<a href="homedelbill.php">TAKE ORDER</a>';
	}
	else
	{
		echo "NEW CUSTOMER!";
		echo '<div id="nolink" align="center">
<form action="inscustomer.php" method="post" onsubmit="return addcustomervalidate()">
<div align="center">
<table>
<tr>
	<td>NAME : </td> <td><input type="text" name="name" id="name"/></td>
</tr>
<tr>
	<td>PHONE : </td> <td><input type="text" name="ph" id="ph"/></td>
</tr>
<tr>
	<td>ADDRESS : </td> <td><input type="text" name="add" id="add"/></td></tr>
</tr>
</table>
<input type="submit" value="ADD CUSTOMER"/>
</form>
</div>';
}
?>