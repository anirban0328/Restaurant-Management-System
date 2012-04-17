<?php
	include("sql.php");
	$q="INSERT INTO food_items(food_name,food_cost,quantity_per_serving,food_type) 
		VALUES('".$_POST[name]."','".$_POST[cost]."','".$_POST[qty]."','".$_POST[type]."');";
	if (!mysql_query($q,$con))
	{
		die('Error in updating: ' . mysql_error());
		echo '<a href="newfood.php">TRY AGAIN</a>';
	}
	else
	{
		echo "SUCCESSFULLY ADDED";
		echo '<a href="newfood.php">ADD ANOTHER ITEM</a>';
	}
	mysql_close($con);
?>