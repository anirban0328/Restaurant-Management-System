<?php
	session_start();
	if(!isset($_SESSION[username]))
	{
		header("Location:index.php");
		exit;
	}
	include("header.php");
	include("javascript/addinventoryvalidate.php");
?>
<html>
<head>
<title>NEW INVENTORY</title>
<link href="stylesheets/main.css" media="all" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>NEW INVENTORY </h1>
<div id="nolink" align="center">
<form action="addinventory.php" method="post" onsubmit="return addinventoryvalidate()">
<div align="center">
<table>
<tr>
<td>NAME : </td> <td><input type="text" name="name" id="name"/></td></tr>
<td>QTY : </td> <td><input type="text" name="qty" id="qty"/></td></tr>
<td>TYPE : </td> <td><select name="type">
		<option value="eatable">EATABLE</option>
	   	<option value="non-eatable">NON-EATABLE</option>
		</select></td></tr>
</table>
<input type="submit" value="ADD INVENTORY"/>
</form>
</div>
</body>
</html>
