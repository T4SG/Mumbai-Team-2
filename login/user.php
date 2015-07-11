<?php
session_start();
if(isset($_SESSION["access_level"]) && $_SESSION["access_level"]==0){
	echo "Hello ".$_SESSION["id"].", This is User page<br/><a href='logout.php'>Logout</a>";
	}
else{
	header("Location:index.php?err=2");
	}
?>

