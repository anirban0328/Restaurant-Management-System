<?php
	$join_date = $_POST[dd]."-".$_POST[mm]."-".$_POST[yy];
	include("sql.php");
	$q="INSERT INTO employees(emp_name,emp_sex,joining_date,emp_add,emp_ph,emp_pos) 
		VALUES('".$_POST[name]."','".$_POST[sex]."','".$join_date."','".$_POST[add]."','".$_POST[ph]."','".$_POST[pos]."');";
	if (!mysql_query($q,$con))
	{
		die('Error in updating: ' . mysql_error());
		echo '<a href="newemployee.php">TRY AGAIN</a>';
	}
	else
	{
	$q="SELECT max(emp_id) FROM employees";
	$res=mysql_query($q,$con) OR die("error");
	$arr=mysql_fetch_array($res);
	$empid=$arr[0];
	
	if($_POST[pos]=="cook")
	{
	echo '<div align="center">
	<form action="empprocess.php" method="post" onsubmit="return validate()"> 
	COOK SPECIALISATION<input type="text" name="spec" id="spec">
	<input type="hidden" name="id"  value="'.$empid.'">
	<input type="submit" value="SUBMIT">
	</form>
	</div>';
	
	}
	else if($_POST[pos]=="waiter")
	{
	echo '<div align="center">
	<form action="empprocess.php" method="post" onsubmit="return validate()"> 
	TABLE NO<input type="text" name="table" id="table">
	<input type="hidden" name="id" value="'.$empid.'">
	<input type="submit" value="SUBMIT">
	</form>
	</div>';
	
	}
	else if($_POST[pos]=="delivery person")
	{
	echo '<div align="center">
	<form action="empprocess.php" method="post" onsubmit="return validate()"> 
	<input type="hidden" name="id" value="'.$empid.'">
	<input type="submit" value="SUBMIT">
	</form>
	</div>';
	
	}
	else 
	{
		echo "SUCCESSFULLY ADDED";
		echo '<a href="newemployee.php">ADD ANOTHER EMPLOYEE</a>';
	}
	}
	mysql_close($con);
?>