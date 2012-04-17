<?php
	session_start();
	if(!isset($_SESSION[username]))
	{
		header("Location: index.php");
		exit;
	}
	session_destroy();
?> 
<html>
<head>
<title> Logout </head>
<link href="stylesheets/main.css" media="all" rel="stylesheet" type="text/css" />
<body>
<h2> You are logged out successfully! </h2>
<h3> <a href="index.php">LOGIN AGAIN</a> </h3>

</html>