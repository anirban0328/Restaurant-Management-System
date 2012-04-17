<?php
include("sql.php");
if(isset($_POST[spec]))
{
$q="INSERT INTO cooks(emp_id,specialisation) VALUES(".$_POST[id].",'".$_POST[spec]."');";
if(!mysql_query($q,$con))
			{
				die('Error in updating: ' . mysql_error());
			}
}
else if(isset($_POST[table]))
{
$q="INSERT INTO waiters(emp_id,table_id) VALUES('".$_POST[id]."','".$_POST[table]."');";
if(!mysql_query($q,$con))
			{
				die('Error in updating: ' . mysql_error());
			}
}
else if(isset($_POST[id]))
{
$q="INSERT INTO delivery_persons(emp_id) VALUES('".$_POST[id]."');";
if(!mysql_query($q,$con))
			{
				die('Error in updating: ' . mysql_error());
			}
}


?>