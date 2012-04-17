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
<title>EMPLOYEES</title>
<link href="stylesheets/main.css" media="all" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>EMPLOYEES </h1>
<div id="nolink" align="center">
<a href="newemployee.php">NEW EMPLOYEE</a>
<br/>
<a href="oldemployee.php">EXISITING EMPLOYEE</a>
</div>
</body>
</html>
