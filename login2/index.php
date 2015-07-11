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
<form action='login.php' method='post' name='loginform'>
    <div class="form-group">
        <input type="text" name = 'username' class="form-control input-lg" placeholder="Email">
    </div>
    <div class="form-group">
        <input type="password" name ='password' class="form-control input-lg" placeholder="Password">
    </div>
    <div class="form-group">
    	<input class="btn btn-primary btn-lg btn-block" type='submit' value='Login' name='login'>       
    </div>
</form>
</html>