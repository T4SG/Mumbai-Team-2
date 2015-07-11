<?php

/* logout.php */
session_start();
session_destroy();

?>

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

	<h1 align="center">Successfully logged out! <a href='index.php'>Login again </a></h1>	

</body>
</html>