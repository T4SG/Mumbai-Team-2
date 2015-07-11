<?php

session_start();
require_once('config.php');
if(isset($_SESSION['SESS_MEMBER_ID']))	
			{
				?>	
			
			
			
					
			
		
				<?php
			
					$name=$_SESSION['SESS_MEMBER_ID'];
					echo $name;
session_start();
	$db = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

	if(!$db)
	{
		die("not connected".mysql_error());
	}
	$select=mysql_select_db(DB_DATABASE);
	
	if(!$select)
	{
		die("Not selected".mysql_error());
	}
}
?>