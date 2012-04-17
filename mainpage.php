<?php
	session_start();
	if(!isset($_POST[username])&&!isset($_SESSION[username]))
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
if(isset($_POST[username]))
{
	if($_POST[username]=="admin" && $_POST[pass]=="pass")
	{	
		$_SESSION[username]=$_POST[username];
		$_SESSION[pass]=$_POST[pass];
		
	}
	else
	{
		echo "Wrong username/password<br/>";
		echo '<a href="index.php">Try logging in again</a>';
	}
}
if(isset($_SESSION[username]))
{
	include("header.php");
	echo "<h2>Welcome ADMIN! </h2> <h3> Select one of the options on the left pane </h3>";
}
?>
</body>
</html>