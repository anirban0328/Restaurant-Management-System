<?php
	session_start();
	if(!isset($_SESSION[username]))
	{
		header("Location:index.php");
		exit;
	}
	include("header.php");
	include("javascript/addfoodvalidate.php");
?>
<html>
<head>
<title>NEW FOOD ITEM</title>
<link href="stylesheets/main.css" media="all" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>NEW FOOD ITEM </h1>
<div id="nolink" align="center">
<form action="addfood.php" method="post" onsubmit="return addfoodvalidate()">
<div align="center">
<table>
<tr>
<td>NAME : </td> <td><input type="text" name="name" id="name"/></td></tr>
<td>COST : </td> <td><input type="text" name="cost" id="cost"/></td></tr>
<td>QTY PER SERVING : </td> <td><input type="text" name="qty" id="qty"/></td></tr>
<td>TYPE : </td> <td><select name="type">
		<option value="starter">STARTER</option>
	   	<option value="main course">MAIN COURSE</option>
		<option value="dessert">DESSERT</option>
		<option value="beverage">BEVERAGE</option>
		</select></td></tr>
</table>
<input type="submit" value="ADD FOOD ITEM"/>
</form>
</div>
</body>
</html>
