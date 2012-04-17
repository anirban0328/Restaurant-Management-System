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
	include("javascript/validate1.php");
?>
<?php
	$i=1;
	include("sql.php");
	$q="INSERT INTO bills(order_type) 
				VALUES('HOMEDEL')";
	if (!mysql_query($q,$con))
		{
			die('Error in updating: ' . mysql_error());
			echo '<a href="resbill.php">TRY AGAIN</a>';
		}
	$q="SELECT max(bill_id) FROM bills";
	$res=mysql_query($q,$con) OR die("error");
	$arr=mysql_fetch_array($res);
	$billid=$arr[0];
	while($i<=10)
	{
		$item_id="itemid".$i;
		$qty="qty".$i;
		if(!empty($_POST[$item_id]))
		{
			$item=(int)$_POST[$item_id];
			$q1="SELECT food_cost FROM food_items WHERE food_id=".$item.";";
			$res1=mysql_query($q1,$con) OR die('Error in updating: adfad' . mysql_error());
			$arr1=mysql_fetch_array($res1);
			$amt=$arr1[0] * $_POST[$qty];
			$q="INSERT INTO orders(food_id,quantity,amount,bill_id,paid) 
				VALUES('".$_POST[$item_id]."','".$_POST[$qty]."','".$amt."',".$billid.",'N');";
			if(!mysql_query($q,$con))
			{
				die('Error in updating: ' . mysql_error());
				echo '<a href="resbill.php">TRY AGAIN</a>';
			}
		}
		$i++;
	}
	$q='SELECT * FROM delivery_persons WHERE status="FREE";';
	$res=mysql_query($q,$con);
	$arr=mysql_fetch_array($res);
	
	echo "DELIVERY PERSON ASSIGNED : ID IS {$arr[0]}";
	echo '<a href="billselect.php">ADD ANOTHER BILL</a>';
	
	mysql_close($con);
		
?>