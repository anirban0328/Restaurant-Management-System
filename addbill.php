<?php
	$i=1;
	include("sql.php");
	while($i<=10)
	{
		$item_id="itemid".$i;
		$qty="qty".$i;
		if(isset($_POST[$item_id])
		{
			$q="INSERT INTO bills(bill_id,,cust_address) 
				VALUES('".$_POST[name]."','".$_POST[ph]."','".$_POST[add]."');";
			if (!mysql_query($q,$con))
			{
				die('Error in updating: ' . mysql_error());
				echo '<a href="newcustomer.php">TRY AGAIN</a>';
			}
			else
			{
				echo "SUCCESSFULLY ADDED";
				echo '<a href="newcustomer.php">ADD ANOTHER CUSTOMER</a>';
			}
		}
		
	
	
	}
	mysql_close($con);
		
?>