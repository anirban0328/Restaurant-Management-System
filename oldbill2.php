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
	$total=0;
	include("sql.php");
	$q="SELECT * FROM orders WHERE bill_id=".$_POST[billid].";";
	$res=mysql_query($q,$con) or die('error');
	echo '
	<table>
	<tr>
	<th>ORDER ID</th>
	<th>FOOD ID</th>
	<th>QUANTITY</th>
	<th>AMOUNT</th>
	<th>PAID</th>
	</tr>';
	while($arr=mysql_fetch_array($res))
	{
		$total+=$arr[3];
		echo '<tr>
		<td>'.$arr[0].' </td>
		<td>'.$arr[1].' </td>
		<td>'.$arr[2].' </td>
		<td>'.$arr[3].' </td>
		<td>'.$arr[5].' </td>
		</tr>';
	}
	
	echo '</table>';
	echo "TOTAL AMOUNT:{$total}";
	$q='UPDATE bills SET total_amount='.$total.' WHERE bill_id='.$_POST[billid].';';
	$res=mysql_query($q,$con);

?>