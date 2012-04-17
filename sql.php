<?php
	$con = mysql_connect("localhost","root","pass");
	if (!$con)
	{
	die('Mysql Connection Failed: ' . mysql_error());
	}
	$db=mysql_select_db("restaurant", $con);
	if (!$db) {
		die("Database Connection failed: " . mysql_error());
	} 
	
?>