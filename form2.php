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
    if( document.myForm.reg_ret_rate.value == "" || isNaN(document.myForm.reg_ret_rate.value) || document.myForm.reg_ret_rate.value>100 )
         {
            alert( "Please provide retention rate in %" );
            document.myForm.reg_ret_rate.focus() ;
            return false;
         }
    if( document.myForm.n_sec.value == "" || isNaN(document.myForm.n_sec.value) )
         {
            alert( "Please provide students pursuing secondary education" );
            document.myForm.n_sec.focus() ;
            return false;
         }
         
    if( document.myForm.inc_lit.value == "" || isNaN(document.myForm.inc_lit.value))
         {
            alert( "Please provide increase in general literacy" );
            document.myForm.inc_lit.focus() ;
            return false;
         }  
         if( document.myForm.inc_complit.value == "" || isNaN(document.myForm.inc_complit.value) )
         {
            alert( "Please provide increase in computer literacy!" );
            document.myForm.inc_complit.focus() ;
            return false;
         }
    if( document.myForm.no_stu.value == "" || isNaN(document.myForm.no_stu.value) )
         {
            alert( "Please provide student number" );
            document.myForm.no_stu.focus() ;
            return false;
         }
         if( document.myForm.no_tea.value == "" || isNaN(document.myForm.no_tea.value) )
         {
            alert( "Please provide no_tea number" );
            document.myForm.no_tea.focus() ;
            return false;
         }
      if( document.myForm.attrate.value == "" || isNaN(document.myForm.attrate.value) || document.myForm.attrate.value>100)
         {

            alert( "Please provide attendence rate in %" );
            document.myForm.attrate.focus() ;
            return false;
         }   
     if( document.myForm.r_dropout.value == "select" )
         {
            alert( "Please provide the dropout reason!" );
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
				
				<div ><!-- form2 --></br>
					<form style="margin: 0 auto; width:20%" name="myForm" action="demo_form.asp" onsubmit="return (validateForm());" method="post">
						<h2>Long Term Impact Metrics</h2></br>
						Retention rate for region(percentage):</br>
						<input type="text" name="reg_ret_rate" placeholder="e.g. 78" required></input></br>
						Number of students persuing secondary education:</br>
						<input type="text" name="n_sec" placeholder="e.g. 4500" required></input></br>
						Most common reason for dropout:</br> 
						<select name="r_dropout" required>
							<option value="select">Select</option>
							<option value="lack_funds">Lack of family funds</option>
							<option value="lack_interest">Lack of interest in further studies</option>
						</select></br></br>
						Increase in general literacy:</br>
						<input type="text" name="inc_lit" placeholder="e.g. 30" required>
						</input></br>
						Increase in computer literacy:</br>
						<input type="text" name="inc_complit" placeholder="e.g. 45" required>
						</input></br>
						Number of Students:</br>
						<input type="text" name="no_stu" placeholder="e.g. 40" required>
						</input></br>
						Number of Teachers:</br>
						<input type="text" name="no_tea" placeholder="e.g. 40" required>
						</input></br>
						Attendance rate(percentage):</br>
						<input type="text" name="attrate" placeholder="e.g. 80" required>
						</input></br>
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