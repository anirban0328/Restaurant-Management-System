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
<title>EXISTING FOOD ITEMS</title>
<link href="stylesheets/main.css" media="all" rel="stylesheet" type="text/css" />
</head>
<body>

<h1>EXISTING FOOD ITEMS </h1>

<?php
if(isset($_POST[type]))
{
	echo '
<div align="center">
<form action="oldfood.php" method="post" >
SELECT FOOD ITEM:
<select name="name">';
		$q="SELECT food_name FROM food_items WHERE food_type='".$_POST[type]."';";
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
	$q="SELECT * FROM food_items WHERE food_name='".$_POST[name]."';";
	$res=mysql_query($q,$con) OR die('Error in selecting: ' . mysql_error());
	while($arr=mysql_fetch_array($res))
	{
		echo "
		<table>
		<tr>
		<td>FOOD ID : </td>
		<td> $arr[0] </td>
		</tr>
		<tr>
		<td>FOOD NAME : </td>
		<td> $arr[1] </td>
		</tr>
		<tr>
		<td>FOOD COST : </td>
		<td> $arr[2] </td>
		</tr>
		<tr>
		<td>QTY PER SERVING: </td>
		<td> $arr[3] </td>
		</tr>
		<tr>
		<td>FOOD TYPE : </td>
		<td> $arr[4] </td>
		</tr>
		</table>";
		
	}
}
else
{
echo '
<div align="center">
<form action="oldfood.php" method="post" onsubmit="return oldfoodvalidate()">
SELECT FOOD TYPE:
<select name="type">';
		$q="SELECT DISTINCT food_type FROM food_items";
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
