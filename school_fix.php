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
				
				<div align='centre'><!-- form3 --><br>
					
<form style= "margin: 0 auto; width:20%" name="myForm" action="insert_schoolfix.php" onsubmit="return (validateForm());" method="post">
    <h2>School Fixtures</h2>
	
	School id:<br> <input type="text" name="school_id" placeholder="eg: 1" required style="width: 65px; float:left;"></input>
	<br>
	Date of damage:<br> <input type="text" name="YYYY" placeholder="YYYY" required style="width: 65px; float:left;"></input><input type="text" name="MM" placeholder="MM" required style="width: 50px; float:left;"></input><input type="text" name="DD" placeholder="DD" required style="width: 50px;"></input>
	<br>
	Area: <input type="text" name="area" placeholder="e.g. classroom"/ required><br>
	Description:<textarea type="text" name="descrip" placeholder="Details about the damage and fixture required" required rows="5"></textarea><br>
	Estimated cost($):<input type="text" name="est_cost" placeholder="e.g. 2000" required></input><br>

<center><input type="submit" value="Submit Form"></input></center>
</form>
				</div>
				
			<!-- Banner -->
				<section id="banner">
					<header>
						<h2>Happy Hearts Fund</h2>
						<a href="#" class="button">Learn More</a>
					</header>
				</section>

			

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">
							<section class="3u 6u(narrower) 12u$(mobilep)">
								<h3>Links to Stuff</h3>
								<ul class="links">
									<li><a href="#">link1</a></li>
									<li><a href="#">link2</a></li>
									
								</ul>
							</section>
							<section class="3u 6u$(narrower) 12u$(mobilep)">
								<h3>More Links to Stuff</h3>
								<ul class="links">
									<li><a href="#">link3</a></li>
									<li><a href="#">link4</a></li>
									
								</ul>
							</section>
							<section class="6u 12u(narrower)">
								<h3>Get In Touch</h3>
								<form>
									<div class="row 50%">
										<div class="6u 12u(mobilep)">
											<input type="text" name="name" id="name" placeholder="Name" />
										</div>
										<div class="6u 12u(mobilep)">
											<input type="email" name="email" id="email" placeholder="Email" />
										</div>
									</div>
									<div class="row 50%">
										<div class="12u">
											<textarea name="message" id="message" placeholder="Message" rows="5"></textarea>
										</div>
									</div>
									<div class="row 50%">
										<div class="12u">
											<ul class="actions">
												<li><input type="submit" class="button alt" value="Send Message" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
						</div>
					</div>

					<!-- Icons -->
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
							<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
						</ul>

					<!-- Copyright -->
						<div class="copyright">
							<ul class="menu">
								<li>&copy; Happy Hearts Fund. All rights reserved</li>
							</ul>
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