<?php
	session_start();
	if(!isset($_SESSION[username]))
	{
		header("Location:index.php");
		exit;
	}
	include("header.php");
	include("javascript/addemployeevalidate.php");
?>
<html>
<head>
<title>NEW EMPLOYEE</title>
<link href="stylesheets/main.css" media="all" rel="stylesheet" type="text/css" />
</head>
<body>
<h1> NEW EMPLOYEE </h1>
<div id="nolink" align="center">
<form action="addemployee.php" method="post" onsubmit="return addemployeevalidate()">
<table>
	<tr>
		<td>NAME : </td> <td><input type="text" name="name" id="name"/></td>
	</tr>
	<tr>
		<td>SEX : </td>
		<td>
			<input type="radio" name="sex" value="M" checked> MALE 
			<input type="radio" name="sex" value="F"> 		FEMALE
		</td>
	</tr>
	<tr>
		<td>JOINING DATE : </td>
		<td>DD <input size="2" type="text" id="dd" name="dd"/> MM <input size="2" type="text" id="mm" name="mm"/> YYYY <input size="4" type="text" id="yy" name="yy">			</td>
	</tr>
	<tr>
		<td>ADDRESS : </td> <td> <input size="35" type="text" id="add" name="add"/> </td>
	</tr>
	<tr>
		<td>PHONE NO : </td> <td> <input type="text" id="ph" name="ph"/> </td>
	</tr>
	<tr>
		<td>POSITION : </td> 
		<td>
			<select name="pos">
			<option value="chiefmanager"> CHIEF MANAGER </option>
			<option value="manager"> MANAGER </option>
			<option value="cook"> COOK </option>
			<option value="delivery person"> DELIVERY PERSON </option>
			<option value="waiter"> WAITER </option>
			</select>
		</td>
	</tr>
	</table>
<input type="submit" value="ADD EMPLOYEE"/>
</form>
</div>
</body>
</html>

