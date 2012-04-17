<?php
	session_start();
	if(!isset($_SESSION[username]))
	{
		header("Location:index.php");
		exit;
	}
	include("header.php");
?>
<html>
<head>
<title>CUSTOMERS</title>
<link href="stylesheets/main.css" media="all" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
	/*include("sql.php");
	$q="SELECT * FROM orders WHERE bill_id=".$_POST[billid];
	$res=mysql_query($q,$con) or die('error');
	echo '<form action="updatebill.php" method="post">
	<table>
	<tr>
	<th>ORDER ID</th>
	<th>FOOD ID</th>
	<th>QUANTITY</th>
	<th>AMOUNT</th>
	<th>PAID?</th>
	</tr>';
	while($arr=mysql_fetch_array($res))
	{
		echo '<tr>
		<td> <input type="text" value="'.$arr[0].'"  />
		<td> <input type="text" value="'.$arr[1].'"/>
		<td> <input type="text" value="'.$arr[2].'"/>
		<td> <input type="text" value="'.$arr[3].'"/>
		<td> <input type="text" value="'.$arr[5].'"/>
		</tr>';
	}
	echo '</table>
	<input type="submit" value="CHANGE">
	</form>'; */
	
	$total=0;
	include("sql.php");
	$q="SELECT * FROM orders WHERE bill_id=".$_POST[billid].";";
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
	echo "TOTAL AMOUNT:{$total}<br /><br />";
	echo "Select the order id to be deleted";
	$q="SELECT order_id FROM orders WHERE bill_id=".$_POST[billid].";";
	$res=mysql_query($q,$con) or die('error');
	echo '<form action="deleteorder.php" method="post">';
	echo '<input type="hidden" name="billid" value='.$_POST[billid].'>';
	echo '<select name="drop">';
	while($arr=mysql_fetch_array($res))
	{
		echo '<option value="'.$arr[0].'">'.$arr[0].'</option>';
	}
	echo '</select>';
	echo '<input type="submit" value="DELETE">';
	echo '</form>';
	echo "<br /><br />";
	
echo '<form action="addorder.php" method="post">
<input type="hidden" name="bid" value='.$_POST[billid].'>
<input type="submit" value="ADD ORDERS">
</form>';
?>
</body>
</html>