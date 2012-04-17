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
<h1>CUSTOMERS </h1>
<div id="nolink" align="center">
<a href="newcustomer.php">NEW CUSTOMER</a>
<br/>
<a href="oldcustomer.php">EXISITING CUSTOMER</a>
</div>
</body>
</html>
