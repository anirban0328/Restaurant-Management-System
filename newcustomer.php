<?php
	session_start();
	if(!isset($_SESSION[username]))
	{
		header("Location:index.php");
		exit;
	}
	include("header.php");
	include("javascript/addcustomervalidate.php");
?>
<html>
<head>
<title>NEW CUSTOMER</title>
<link href="stylesheets/main.css" media="all" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>NEW CUSTOMER </h1>
<div id="nolink" align="center">
<form action="addcustomer.php" method="post" onsubmit="return addcustomervalidate()">
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
</div>
</body>
</html>