<?php
	$i=1;
	include("sql.php");
	$billid=$_POST[billid];
	$totamt=0;
	while($i<=10)
	{
		$item_id="itemid".$i;
		$qty="qty".$i;
		if(!empty($_POST[$item_id]))
		{
			$item=(int)$_POST[$item_id];
			$q1="SELECT food_cost FROM food_items WHERE food_id=".$item.";";
			$res1=mysql_query($q1,$con) OR die('Error in updating: ' . mysql_error());
			$arr1=mysql_fetch_array($res1);
			$amt=$arr1[0] * $_POST[$qty];
			$totamt+=$amt;
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
	$q='UPDATE bills SET total_amount='.$totamt.' WHERE bill_id='.$billid.';';
	$res=mysql_query($q,$con);
	echo "SUCCESSFULLY ADDED";
	
	include("header.php");
?>
<html>
<head>
<title></title>
<link href="stylesheets/main.css" media="all" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
	$total=0;
	include("sql.php");
	$q="SELECT * FROM orders WHERE bill_id=".$billid.";";
	$res=mysql_query($q,$con) or die('error');
	echo '
	<table>
	<tr>
	<th>ORDER ID</th>
	<th>FOOD ID</th>
	<th>QUANTITY</th>
	<th>AMOUNT</th>
	<th>PAID</th>
	</tr>';
	while($arr=mysql_fetch_array($res))
	{
		$total+=$arr[3];
		echo '<tr>
		<td>'.$arr[0].' </td>
		<td>'.$arr[1].' </td>
		<td>'.$arr[2].' </td>
		<td>'.$arr[3].' </td>
		<td>'.$arr[5].' </td>
		</tr>';
	}
	echo '</table>';
	echo "<br /><br />TOTAL AMOUNT: {$total}<br /><br />";
	$q='UPDATE bills SET total_amount='.$total.' WHERE bill_id='.$billid.';';
	$res=mysql_query($q,$con);
	
	mysql_close($con);
		
?>