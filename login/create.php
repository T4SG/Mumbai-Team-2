<?php
$db_name="login"; // Database name
$host="localhost";
$username="root";
$password="hari";
$query="CREATE TABLE login_details(
		id VARCHAR(15) NOT NULL,
		password VARCHAR(32) NOT NULL,
		access_level INT(10) NOT NULL,
		PRIMARY KEY(id)
	)";
try{
	$db = new PDO("mysql:host=$host", $username, $password);
	$db->exec("CREATE DATABASE $db_name");
	$db->query("USE $db_name");
	$db->query($query);
}
catch(PDOException $e){
	die("Database error: ".$e->getMessage());
}
?>
