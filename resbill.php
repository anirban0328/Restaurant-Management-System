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
	echo '
	<div align="center">
	<form id="d" action="addresbill.php" method="post" onsubmit="return validate()" >
	<table border="1">
	<tr>
		<th>ITEM ID</th>
		<th>QUANTITY</th>
	</tr>';
	while($i<=10)
	{
		$item_id="itemid".$i;
		$qty="qty".$i;
		echo '<tr>
			<td> <input type="text" name="'.$item_id.'" value="" id="'.$item_id.'" />	
			<td> <input type="text" name="'.$qty.'" value=""  id="'.$qty.'"/>
		</tr>';
		$i++;
	}
	echo '
	</table>
	<input type="submit" value="SUBMIT"/>
	</form>
	</div>';
?>

</body>
</html>