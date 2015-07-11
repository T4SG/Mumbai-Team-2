<?php
require_once("db.php");
function check_input($r){
	$r=trim($r);
	$r=strip_tags($r);
	$r=stripslashes($r);
	$r=htmlentities($r);
	$r=mysql_real_escape_string($r);
	return $r;
	}
if (isset($_POST['uname'],$_POST['pwd'])){
	
	$u=check_input($_POST['uname']);
	$p=md5(check_input($_POST['pwd']));
	try{
	$db=get_db();
	$stmt=$db->prepare("SELECT * FROM login_details WHERE id=? && password=?");
	$stmt->execute(array($u,$p));
	$r=$stmt->fetch(PDO::FETCH_ASSOC);
	if($r){
		session_start();
		$access_level=$r['access_level'];
		$_SESSION['id']=$r['id'];
		$_SESSION['access_level']=$access_level;
		if ($access_level==0){
			header("Location:user.php");
			}
		else if($access_level==1){
			header("Location:admin.php");
			}
		}
	else{
		header("Location:index.php?err=1");
		}
	}
	catch(PDOException $e){
		die("Database error: ".$e->getMessage());
	}
}
else{
	header("Location:index.php");
	}
?>
