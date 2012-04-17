<?php
	session_start();
	if(!isset($_SESSION[username]))
	{
		header("Location:index.php");
		exit;
	}
	include("header.php");
	include("sql.php");
?>
<html>
<head>
<title>EXISTING CUSTOMERS</title>
<link href="stylesheets/main.css" media="all" rel="stylesheet" type="text/css" />
</head>
<body>

<h1>EXISTING CUSTOMERS </h1>
** UNDER CONSTRUCTION **
<?php
if(isset($_POST[type]))
{
	echo '
<div align="center">
<form action="old.php" method="post">
SELECT INVENTORY:
<select name="name">';
		$q="SELECT item_name FROM inventories WHERE item_type='".$_POST[type]."';";
		$res=mysql_query($q,$con) OR die('Error in selecting: ' . mysql_error());
		while($arr=mysql_fetch_array($res))
		{
			echo '<option value="'.$arr[0].'">'.$arr[0].'</option>';
		}
echo '
</select>
<input type="submit" value="GET INFORMATION"/>
</form>
</div>';
}
else if(isset($_POST[name]))
{
	echo '<div align="center">';
	$q="SELECT * FROM inventories WHERE item_name='".$_POST[name]."';";
	$res=mysql_query($q,$con) OR die('Error in selecting: ' . mysql_error());
	while($arr=mysql_fetch_array($res))
	{
		echo "
		<table>
		<tr>
		<td>INVENTORY ID : </td>
		<td> $arr[0] </td>
		</tr>
		<tr>
		<td>INVENTORY NAME : </td>
		<td> $arr[1] </td>
		</tr>
		<tr>
		<td>QUANTITY: </td>
		<td> $arr[2] </td>
		</tr>
		<tr>
		<td>INVENTORY TYPE : </td>
		<td> $arr[3] </td>
		</tr>
		</table>";
		
	}
}
else
{
echo '
<div align="center">
<form action="oldcustomers.php" method="post" >
SELECT CUSTOMER NAME:
<select name="type">';
		$q="SELECT DISTINCT cust_name FROM customers";
		$res=mysql_query($q,$con) OR die("Error in selecting: " . mysql_error());
		while($arr=mysql_fetch_array($res))
		{
			echo '<option value="'.$arr[0].'">'.$arr[0].'</option>';
		}
echo '
</select>
<input type="submit" value="GET INFORMATION"/>
</form>
</div>';
}
?>
<?php mysql_close($con);?>
</body>
</html>