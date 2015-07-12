
<!DOCTYPE HTML>
<html>
	<head>
		<title>Happy Hearts Fund</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/main.css" />
		<link rel="stylesheet" href="css/carousel.css" />
		<script type="text/javascript" src="js/jquery.js"></script>
    	<script type="text/javascript" src="js/jquery.min.js"></script>
    	<script type="text/javascript" src="js/bootstrap.min.js"></script>     
    	<script type="text/javascript" src="js/bootstrap.js"></script>     
    	<script type="text/javascript">
function validateForm() {
    if( document.myForm.YYYY.value == "" || isNaN(document.myForm.YYYY.value) )
         {
            alert( "Provide the proper year" );
            document.myForm.YYYY.focus() ;
            return false;
         }
    if( document.myForm.MM.value == "" || isNaN(document.myForm.MM.value) )
         {
            alert( "Please provide the proper month" );
            document.myForm.MM.focus() ;
            return false;
         }
         
    if( document.myForm.DD.value == "" || isNaN(document.myForm.DD.value))
         {
            alert( "Please provide the proper date" );
            document.myForm.DD.focus() ;
            return false;
         }  
         if( document.myForm.area.value == "" )
         {
            alert( "Please provide the area" );
            document.myForm.area.focus() ;
            return false;
         }
        if( document.myForm.descrip.value == "" )
         {
            alert( "Please provide the Description" );
            document.myForm.descrip.focus() ;
            return false;
         }
        if( document.myForm.est_cost.value == "" || isNaN(document.myForm.est_cost.value))
         {
            alert( "Please provide the estimate" );
            document.myForm.est_cost.focus() ;
            return false;
         }  
    

      return true;
	}	
	</script>	

	</head>
	<body>
		<div id="page-wrapper">
				<div id="header">
						<h1><img src="images/hhf.png"/><a href="index.php" id="logo"><em>Happy Hearts Fund</em></a></h1>
						<nav id="nav">
							<ul>
								<li ><a href="index.php">Home</a></li>
								<li ><a href="login.php">Login</a></li>
										<li><a href="dashboards.php">Dashboard</a></li>
										
										<li>
										<a href="#">Principal Data</a>
										<ul>
											<li><a href="form1.php">Academic Form</a></li>
											<li><a href="school_fix.php">Maintainance Form</a></li>
											<li><a href="schoolinfo.php">Yearly Information</a></li>
											<li><a href="add_school.php">Register School</a></li>


										</ul>
										</li>
										<li>
										<a href="#">Partner Data</a>
										<ul>
											<li><a href="form2.php">Regional Academic Data</a></li>
											<li><a href="form3.php">Economic Metrics</a></li>
											<li><a href="demographics.php">Demographics</a></li>
											<li><a href="disaster.php">Disaster Registration</a></li>


										</ul>
										</li>
										<li>
										<a href="#">HHF Data</a>
										<ul>
											<li><a href="user_form.php">User Registration</a></li>
											<li><a href="edit_principal.php">Principal Registration</a></li>
											
										</ul>
										</li>
										<li><a href="aboutus.php">about us</a></li>
								<!-- <li>
									<a href="#">Dropdown</a>
									<ul>
										
									</ul>
								</li> -->
							</ul>
						</nav>




				</div>
				
				<div align='centre'><br>
					

<?php
	session_start();
	
	?>

	<div id="mainContent">
		<div class="content">
			<article class="topContent">
					
				<content>
					<form id="form" action="login-exe.php" method="post" style= "margin: 0 auto; width:20%">
					
				<h2>Sign In</h2>
			
						<p><label for="Username">Username : &nbsp</label><input type="text" name="Username"/></p><br>
						<p><label for="Password">Password : &nbsp</label><input type="password" name="Password" /></p><br>
						<input type="submit" value="Sign In" class="button" />
					

					<!--<div id="row"><label for="Username">Username : &nbsp;</label><input type="text" name="Username" /></div>
					<div id="row"><label for="Password">Password : &nbsp;</label><input type="password" name="Password" /></div>
					<div id="row">
						<input type="submit" value="Sign In" class="button" /></div> -->
		</form>



				</content>
			</article>
			

			
			
		</div>
	</div>
		</div>

		<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/jquery.dropotron.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/main.js"></script>

	</body>
</html>