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
<?php
/* register.php */
if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email']))
{
	include 'db.php';
	foreach($_POST as $value)
	{	
		$value = strip_tags($value);
		$value = $cxn->real_escape_string($value);
	}

	extract($_POST);

	//username password

	$password = md5($password);

	$query = "INSERT into users (username,password,email) VALUES ('$username','$password','$email')";

	if($cxn->query($query) === false)
	{
		echo "<h2>Please try again.</h2>";
	}
	else
	{		
		echo"<h2 align='center'>Successfully Registered $usernamee! <a href='index.php'>Login now</a></h2>";
	}


}

?>
		
</body>
</html>

