<?php
	session_start();
	if(isset($_SESSION[username]))
	{
		session_destroy();
	}
?>
<html>
<head>
	<title> my webpage</title>
	<link href="stylesheets/main.css" media="all" rel="stylesheet" type="text/css" />
</head>
<body>
        
       
	<h1>STARLIGHT RESTAURANT</h1>
    <h2>ONLINE MANAGEMENT SYSTEM</h2>
	<?php include("javascript/validate.php"); ?>
	<div id="login">
	<form id="c" action="mainpage.php" method="post" onsubmit="return validate()" >
    USERNAME: <input type="text" name="username" value="" id="username" />
    <br /><br />
    PASSWORD:<input type="password" name="pass" value=""  id="pass"/>
    <br />
    <pre> <input type="submit" name="login" value="Login"  /> </pre> 
    </form>
	</div>
</body>
</html>
		
	
	
	
	


        
		


</body>
</html>
