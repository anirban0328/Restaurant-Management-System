<?php
	include("sql.php");
	$q="INSERT INTO home_delivery_customers(cust_name,cust_ph,cust_address) 
		VALUES('".$_POST[name]."','".$_POST[ph]."','".$_POST[add]."');";
	if (!mysql_query($q,$con))
	{
		die('Error in updating: ' . mysql_error());
		echo '<a href="newcustomer.php">TRY AGAIN</a>';
	}
	else
	{
		echo '<a href="homedelbill.php">ENTER BILL DETAILS</a>';
	}
	mysql_close($con);
?>