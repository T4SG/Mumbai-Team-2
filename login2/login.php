<?php

/* login.php */
if(!empty($_POST['username']) && !empty($_POST['password']))
{
	include 'db.php';

	extract($_POST);

	//username password

	$password = md5($password);

	$query = "SELECT * from users WHERE username = '$username'";

	$rs=$cxn->query($query);

	$rs->data_seek(0);

	$row = $rs->fetch_assoc();

	if($row['password'] == $password)
	{
		session_start();
		$_SESSION['id'] = $row['id'];
		$_SESSION['username'] = $row['username'];
		header('Location: pending.php');
		
	} 
	else
	{ ?>

		<html>
<head>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/style.css">
<script type='text/javascript' src='js/jquery.min.js'></script>
</head>

<body>

		<h2>Incorrect username or password. <a href='index.php'>Try again</a>


</body>
</html>

<?php 
}

}

?>




