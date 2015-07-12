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
    
     if( document.myForm.disaster.value == "select" )
         {
            alert( "Please provide the dropout reason!" );
            document.myForm.disaster.focus();
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
								<li class="current"><a href="index.php">Home</a></li>
								<li><a href="login.html">Login</a></li>
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
											<li><a href="form2.html">Regional Academic Data</a></li>
											<li><a href="form3.html">Economic Metrics</a></li>
											<li><a href="demographics.html">Demographics</a></li>
											<li class="current"><a href="disasters.html">Disaster Registration</a></li>


										</ul>
										</li>

										<li><a href="aboutus.html">about us</a></li>
								<!-- <li>
									<a href="#">Dropdown</a>
									<ul>
										
									</ul>
								</li> -->
							</ul>
						</nav>





				</div>
				
				<div ><!-- form2 --></br>
					<form style="margin: 0 auto; width:20%" name="myForm" action="demo_form.asp" onsubmit="return (validateForm());" method="post">
						<h2>Disaster Metrics</h2></br>
						Disaster that took place:</br> 
						<select name="disaster" required>
							<option value="select">Select</option>
							<option value="earthquake">Earthquake</option>
							<option value="tsunami">Tsunami</option>
							<option value="earthquake">Earthquake</option>
							<option value="hurricane">Hurricane</option>
							<option value="cyclone">Cyclone</option>
							<option value="blizzard">Blizzard</option>
						</select></br></br>
						Date of occurence:<br> <input type="text" name="YYYY" placeholder="YYYY" required style="width: 65px; float:left;"></input><input type="text" name="MM" placeholder="MM" required style="width: 50px; float:left;"></input><input type="text" name="DD" placeholder="DD" required style="width: 50px;"></input>
						<br>
						
						<input type="submit" value="Submit Form"></input></br>
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