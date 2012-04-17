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
<title>FOOD ITEMS</title>
<link href="stylesheets/main.css" media="all" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>FOOD ITEMS </h1>
<div id="nolink" align="center">
<a href="newfood.php">NEW ITEM</a>
<br/>
<a href="oldfood.php">EXISITING ITEM</a>
</div>
</body>
</html>
