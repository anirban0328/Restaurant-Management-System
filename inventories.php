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
<title>INVENTORIES</title>
<link href="stylesheets/main.css" media="all" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>INVENTORIES </h1>
<div id="nolink" align="center">
<a href="newinventory.php">NEW INVENTORY</a>
<br/>
<a href="oldinventory.php">EXISITING INVENTORY</a>
</div>
</body>
</html>
