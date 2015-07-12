<!DOCTYPE HTML>
<html>
	<head>
		<title>Happy Hearts Fund</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/main.css" />
		<link rel="stylesheet" href="css/carousel.css" />
		<script type="text/javascript">
    		function showDiv() 
    		{
   				document.getElementById('bargraph').style.display = "block";
   				document.getElementById('piegraph').style.display = "none";
   				document.getElementById('linegraph').style.display = "none";
   				
			    var canvas = document.getElementById('canvas'),
	            context = canvas.getContext('2d');
				// resize the canvas to fill browser window dynamically
			    window.addEventListener('resize', resizeCanvas, false);
			    function resizeCanvas() 
			    {
			        canvas.width = window.innerWidth;
		            canvas.height = window.innerHeight;
				            /**
				             * Your drawings need to be inside this function otherwise they will be reset when 
				             * you resize the browser window and the canvas goes will be cleared.
				             */
				            drawStuff(); 
				}
			    resizeCanvas();
				function drawStuff() 
				{
				    	var barChartData = 
				    	{
							labels : ["January","February","March","April","May","June","July"],
							datasets : [
									{
										fillColor : "rgba(220,220,220,0.5)",
										strokeColor : "rgba(220,220,220,0.8)",
										highlightFill: "rgba(220,220,220,0.75)",
										highlightStroke: "rgba(220,220,220,1)",
										data : [80,90,100,110,120,130,140]
									},
									{
										fillColor : "rgba(151,187,205,0.5)",
										strokeColor : "rgba(151,187,205,0.8)",
										highlightFill : "rgba(151,187,205,0.75)",
										highlightStroke : "rgba(151,187,205,1)",
										data : [10,20,30,40,50,60,70]
									}
							]
						}
					var ctx = document.getElementById("canvas").getContext("2d");
						window.myBar = new Chart(ctx).Bar(barChartData, {
							responsive : true
						});
				            // do your drawing stuff here
				}
			}


			
			function showDivpie() {
   				document.getElementById('bargraph').style.display = "none";
   				document.getElementById('piegraph').style.display = "block";
   				document.getElementById('linegraph').style.display = "none";
   				var canvas = document.getElementById('canvas2'),
	            context = canvas.getContext('2d');
				// resize the canvas to fill browser window dynamically
			    window.addEventListener('resize', resizeCanvas, false);
			    function resizeCanvas() 
			    {
			        canvas.width = window.innerWidth;
		            canvas.height = window.innerHeight;
				            /**
				             * Your drawings need to be inside this function otherwise they will be reset when 
				             * you resize the browser window and the canvas goes will be cleared.
				             */
				            drawStuff(); 
				}
			    resizeCanvas();
				function drawStuff() 
				{
								
					var pieData = [
							{
								value: school_id,
								color:"#F7464A",
								highlight: "#FF5A5E",
								label: "school_id"
							},
							{
								value: 50,
								color: "#46BFBD",
								highlight: "#5AD3D1",
								label: "Green"
							},
							{
								value: 100,
								color: "#FDB45C",
								highlight: "#FFC870",
								label: "Yellow"
							},
							{
								value: 40,
								color: "#949FB1",
								highlight: "#A8B3C5",
								label: "Grey"
							},
							{
								value: 120,
								color: "#4D5360",
								highlight: "#616774",
								label: "Dark Grey"
							}

						];

					var ctx = document.getElementById("canvas2").getContext("2d");
					window.myPie = new Chart(ctx).Pie(pieData);
				            // do your drawing stuff here
				}
			}
			
			function showDivLine() {
   				document.getElementById('bargraph').style.display = "none";
   				document.getElementById('piegraph').style.display = "none";
   				document.getElementById('linegraph').style.display = "block";

   				var canvas = document.getElementById('canvas3'),
	            context = canvas.getContext('2d');
				// resize the canvas to fill browser window dynamically
			    window.addEventListener('resize', resizeCanvas, false);
			    function resizeCanvas() 
			    {
			        canvas.width = window.innerWidth;
		            canvas.height = window.innerHeight;
				            /**
				             * Your drawings need to be inside this function otherwise they will be reset when 
				             * you resize the browser window and the canvas goes will be cleared.
				             */
				            drawStuff(); 
				}
			    resizeCanvas();
				function drawStuff() 
				{
					
					var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
					var lineChartData = {
						labels : ["January","February","March","April","May","June","July"],
						datasets : [
							{
								label: "My First dataset",
								fillColor : "rgba(220,220,220,0.2)",
								strokeColor : "rgba(220,220,220,1)",
								pointColor : "rgba(220,220,220,1)",
								pointStrokeColor : "#fff",
								pointHighlightFill : "#fff",
								pointHighlightStroke : "rgba(220,220,220,1)",
								data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
							},
							{
								label: "My Second dataset",
								fillColor : "rgba(151,187,205,0.2)",
								strokeColor : "rgba(151,187,205,1)",
								pointColor : "rgba(151,187,205,1)",
								pointStrokeColor : "#fff",
								pointHighlightFill : "#fff",
								pointHighlightStroke : "rgba(151,187,205,1)",
								data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
							}
						]

					}

					var ctx = document.getElementById("canvas3").getContext("2d");
					window.myLine = new Chart(ctx).Line(lineChartData, {
					responsive: true
				});
			
					
				}


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
										<li class="current"><a href="dashboards.php">Dashboard</a></li>
										
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
											<li><a href="disasters.html">Disaster Registration</a></li>


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
				
				<div><!-- dashboard -->
					
					<div id="bargraph"  style="display:none; " > 
						<!-- <iframe id="myFrame" src="bar.html" style="border:none;" height="650px" scrolling="yes" width="100%" ></iframe> -->
						<canvas id="canvas" height="400PX" width="600PX"></canvas>
					</div>
					<div id="piegraph"  style="display:none; " > 
						<canvas id="canvas2" height="400PX" width="600PX"></canvas>


					</div>
					<div id="linegraph"  style="display:none;" > 
						<canvas id="canvas3" height="400PX" width="600PX"></canvas>


					</div>
				</div>

				
			<!-- Banner -->
				<section id="banner">
					<header>
						<h2>Happy Hearts Fund</h2>
						<a href="#" class="button">Learn More</a>
					</header>
				</section>


			<!-- Highlights -->
				<section class="wrapper style1">
					<div class="container">
						<div class="row 200%">
							<section class="4u 12u(narrower)">
								<div class="box highlight">
									<i class="icon major fa-paper-plane" onclick="showDiv()"></i>
									<h3>This Is Important</h3>
									<p>Bar graph</p>
								</div>
							</section>
							<section class="4u 12u(narrower)">
								<div class="box highlight">
									<i class="icon major fa-pencil" onclick="showDivpie()"></i>
									<h3>Also Important</h3>
									<p>put text</p>
								</div>
							</section>
							<section class="4u 12u(narrower)">
								<div class="box highlight" onclick="showDivLine()">
									<i class="icon major fa-wrench"></i>
									<h3>Probably Important</h3>
									<p>push</p>
								</div>
							</section>
						</div>
					</div>
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
			<script type="text/javascript" src="js/bootstrap.min.js"></script>     
	    	<script type="text/javascript" src="js/bootstrap.js"></script> 
	    	<script src="js/skel.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/Chart.js"></script>
			<!--<script src="js/grapher.js"></script>-->    
	    	<script src="js/main.js"></script>
	    	<script src="js/graph_fetch_pie_data.js"></script>

			
	</body>
</html>