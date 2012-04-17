<?php
	session_start();
	if(!isset($_SESSION[username]))
	{
		header("Location:index.php");
		exit;
	}
?>
<html>
<head>
<link href="stylesheets/main.css" media="all" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
	include("header.php");
	include("javascript/validate.php");
?>
	<h1>BILLS</h1>
	<div align="center">
	<a href="billselect.php">CREATE NEW BILL</a><br/>
	<a href="oldbill.php">VIEW OLD BILL</a><br/>
	<a href="editbill.php">EDIT OLD BILL</a>
	</div>
</body>
</html>