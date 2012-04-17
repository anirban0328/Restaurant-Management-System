<?php
	include("sql.php");
	$q="INSERT INTO inventories(item_name,quantity,item_type) 
		VALUES('".$_POST[name]."','".$_POST[qty]."','".$_POST[type]."');";
	if (!mysql_query($q,$con))
	{
		die('Error in updating: ' . mysql_error());
		echo '<a href="newinventory.php">TRY AGAIN</a>';
	}
	else
	{
		echo "SUCCESSFULLY ADDED";
		echo '<a href="newinventory.php">ADD ANOTHER ITEM</a>';
	}
	mysql_close($con);
?>