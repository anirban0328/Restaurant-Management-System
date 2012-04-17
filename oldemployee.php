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
<title>EXISTING EMPLOYEES</title>
<link href="stylesheets/main.css" media="all" rel="stylesheet" type="text/css" />
</head>
<body>

<h1>EXISTING EMPLOYEES </h1>

<?php
if(isset($_POST[pos]))
{
	echo '
<div align="center">
<form action="oldemployee.php" method="post">
SELECT INVENTORY:
<select name="name">';
		$q="SELECT emp_name FROM employees WHERE emp_pos='".$_POST[pos]."';";
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
<form action="oldemployee.php" method="post" >
SELECT EMPLOYEE POSITION:
<select name="pos">';
		$q="SELECT DISTINCT emp_pos FROM employees";
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
