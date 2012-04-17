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
<div align="center">
<form action="check.php" method="post">
ENTER CUSTOMER PHONE NO : <input type="text" name="ph" id="ph"/>
<input type="submit" value="SUBMIT"/>
</form>
</body>
</html>
