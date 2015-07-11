<html>
<head>
<title>Codefreax</title>
<style>
.textfield{
	opacity:0.7;
}
.container{
	margin:0px auto;
	width:450px;
	height:250px;
	text-align:center;
	background-color:#F7F7F7;
	border:1px solid #BFBFBF;
	box-shadow:0px 0px 3px #BFBFBF;
}

</style>
</head>
<body>
<h1 style="text-align:center;">Codefreax Multi user login form</h1>
<div class="container"> 
<form action="check.php" method="post">
<h2>Login</h2>
<table style="margin:0px auto">
<tr>
<td>Username: </td><td width="50px"><input class="textfield" type="text" name="uname"/></td>
</tr>
<tr>
<td>Password: </td><td width="50px"><input class="textfield" type="password" name="pwd"/></td>
</tr>
<tr><td></td><td width="50px"><span style="color:#E21111;font-size:12px;">
<?php // To display Error messages
if(isset($_GET['err'])){
if ($_GET['err']==1){
echo "Invalid Credentials.Try username:codefreax, password:password";}
else if($_GET['err']==5){
echo "Successfully Logged out..";}
else if ($_GET['err']==2){
echo "Your trying to access unauthorized page.Please login first";
}
}
?>
</span></td></tr>
</table>
<input type="submit" value="submit"/>
</form>
</div>
</body>
</html>
