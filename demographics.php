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
    	<script>
		function validateForm() {
        if( document.myForm.region.value == "" )
         {
            alert( "Please provide region!" );
            document.myForm.region.focus() ;
            return false;
         }
         
    if( document.myForm.country.value == -1)
         {
            alert( "Please provide country!" );
            document.myForm.country.focus() ;
            return false;
         }  
         if( document.myForm.state.value == "" )
         {
            alert( "Please provide state!" );
            document.myForm.state.focus() ;
            return false;
         }
		 if( document.myForm.city.value == "" )
         {
            alert( "Please provide city!" );
            document.myForm.city.focus() ;
            return false;
         }
    if( document.myForm.n_mem.value == ""|| isNaN(document.myForm.n_mem.value))
         {
            alert( "Please provide the number of members!" );
			document.myForm.n_mem.focus() ;
            return false;
         }
if( document.myForm.n_child.value == ""|| isNaN(document.myForm.n_child.value) || Number(document.myForm.n_child.value) > Number(document.myForm.n_mem.value) )
         {
            alert( "Please provide the number of children!" );
			document.myForm.n_child.focus() ;
            return false;
         } 
if( document.myForm.n_girl.value == ""|| isNaN(document.myForm.n_girl.value) || Number(document.myForm.n_girl.value) > Number(document.myForm.n_child.value) )
         {
            alert( "Please provide the number of girls!" );
			document.myForm.n_girl.focus() ;
            return false;
         } 
if( document.myForm.n_boy.value == ""|| isNaN(document.myForm.n_boy.value) || Number(document.myForm.n_boy.value) > Number(document.myForm.n_child.value))
         {
            alert( "Please provide the number of boys!" );
			document.myForm.n_boy.focus() ;
            return false;
         } 		
if( Number(document.myForm.n_girl.value)+Number(document.myForm.n_boy.value) != Number(document.myForm.n_child.value))
{
	alert( "Please check your values of number of children, boys and girls!" );
			document.myForm.n_child.focus() ;
            return false;
}

if( document.myForm.n_injuries.value == ""|| isNaN(document.myForm.n_injuries.value) )
         {
            alert( "Please provide the number of injuries!" );
			document.myForm.n_injuries.focus() ;
            return false;
         } 
if( document.myForm.n_deaths.value == ""|| isNaN(document.myForm.n_deaths.value) )
         {
            alert( "Please provide the number of deaths!" );
			document.myForm.n_deaths.focus() ;
            return false;
         } 		 
	
return true;
}
// Regions
var country_arr = new Array("Australia","Bangladesh","China","India","Japan","Pakistan","Sri Lanka");
// States
var s_a = new Array();
s_a[0] = "";
s_a[1] = "Australian Capital Territory|New South Wales|Northern Territory|Queensland|South Australia|Tasmania|Victoria|Western Australia";
s_a[2] = "Barguna|Barisal|Bhola|Jhalokati|Patuakhali|Pirojpur|Bandarban|Brahmanbaria|Chandpur|Chittagong|Comilla|Cox's Bazar|Feni|Khagrachari|Lakshmipur|Noakhali|Rangamati|Dhaka|Faridpur|Gazipur|Gopalganj|Jamalpur|Kishoreganj|Madaripur|Manikganj|Munshiganj|Mymensingh|Narayanganj|Narsingdi|Netrokona|Rajbari|Shariatpur|Sherpur|Tangail|Bagerhat|Chuadanga|Jessore|Jhenaidah|Khulna|Kushtia|Magura|Meherpur|Narail|Satkhira|Bogra|Dinajpur|Gaibandha|Jaipurhat|Kurigram|Lalmonirhat|Naogaon|Natore|Nawabganj|Nilphamari|Pabna|Panchagarh|Rajshahi|Rangpur|Sirajganj|Thakurgaon|Habiganj|Maulvi bazar|Sunamganj|Sylhet";
s_a[3] = "Anhui|Beijing|Chongqing|Fujian|Gansu|Guangdong|Guangxi|Guizhou|Hainan|Hebei|Heilongjiang|Henan|Hubei|Hunan|Jiangsu|Jiangxi|Jilin|Liaoning|Nei Mongol|Ningxia|Qinghai|Shaanxi|Shandong|Shanghai|Shanxi|Sichuan|Tianjin|Xinjiang|Xizang (Tibet)|Yunnan|Zhejiang";
s_a[4] = "Andaman and Nicobar Islands|Andhra Pradesh|Arunachal Pradesh|Assam|Bihar|Chandigarh|Chhattisgarh|Dadra and Nagar Haveli|Daman and Diu|Delhi|Goa|Gujarat|Haryana|Himachal Pradesh|Jammu and Kashmir|Jharkhand|Karnataka|Kerala|Lakshadweep|Madhya Pradesh|Maharashtra|Manipur|Meghalaya|Mizoram|Nagaland|Orissa|Pondicherry|Punjab|Rajasthan|Sikkim|Tamil Nadu|Tripura|Uttar Pradesh|Uttaranchal|West Bengal";
s_a[5] = "Aichi|Akita|Aomori|Chiba|Ehime|Fukui|Fukuoka|Fukushima|Gifu|Gumma|Hiroshima|Hokkaido|Hyogo|Ibaraki|Ishikawa|Iwate|Kagawa|Kagoshima|Kanagawa|Kochi|Kumamoto|Kyoto|Mie|Miyagi|Miyazaki|Nagano|Nagasaki|Nara|Niigata|Oita|Okayama|Okinawa|Osaka|Saga|Saitama|Shiga|Shimane|Shizuoka|Tochigi|Tokushima|Tokyo|Tottori|Toyama|Wakayama|Yamagata|Yamaguchi|Yamanashi";
s_a[6] = "Balochistan|Federally Administered Tribal Areas|Islamabad Capital Territory|North-West Frontier Province|Punjab|Sindh";
s_a[7] = "Central|Eastern|North Central|North Eastern|North Western|Northern|Sabaragamuwa|Southern|Uva|Western";
function populateStates(countryElementId, stateElementId) {

    var selectedCountryIndex = document.getElementById(countryElementId).selectedIndex;

    var stateElement = document.getElementById(stateElementId);

    stateElement.length = 0; // Fixed by Julian Woods
    stateElement.options[0] = new Option('Select State', '');
    stateElement.selectedIndex = 0;

    var state_arr = s_a[selectedCountryIndex].split("|");

    for (var i = 0; i < state_arr.length; i++) {
        stateElement.options[stateElement.length] = new Option(state_arr[i], state_arr[i]);
    }
}
function populateCountries(countryElementId, stateElementId) {
    // given the id of the <select> tag as function argument, it inserts <option> tags
    var countryElement = document.getElementById(countryElementId);
    countryElement.length = 0;
    countryElement.options[0] = new Option('Select Country', '-1');
    countryElement.selectedIndex = 0;
    for (var i = 0; i < country_arr.length; i++) {
        countryElement.options[countryElement.length] = new Option(country_arr[i], country_arr[i]);
    }

    // Assigned all countries. Now assign event listener for the states.

    if (stateElementId) {
        countryElement.onchange = function () {
            populateStates(countryElementId, stateElementId);
        };
    }
}
</script>
</head>
<title>Demographics Form</title>
	<body>
		<div id="page-wrapper">
				<div id="header"><h1><img src="images/hhf.png"/><a href="index.php" id="logo"><em>Happy Hearts Fund</em></a></h1>
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
				
				<div ><!-- form2 -->
					<form style="margin: 0 auto; width:20%" name="myForm" action="" onsubmit="return (validateForm());" method="post">
						Region:</br>
						<select name="region">
							<option value="Asia">Asia</option>
						</select></br></br>
						<br/>Select Country:
						<select id="country" name="country"></select>
						<br />State:
						<select name="state" id="state"></select>
						<br/>
						<script language="javascript">
							populateCountries("country", "state");
						</script>
							City:<br/>
							<input type="text" name="city"></input>
						Number of members:</br>
						<input type="text" name="n_mem" placeholder="e.g. 78"></input>
						<br/>Number of children:<br/>
						<input type="text" name="n_child" placeholder="e.g. 78"></input>
						<br/>Number of teachers:<br/>
						<input type="text" name="n_teachers" placeholder="e.g. 78"></input>
						<br/>Number of girls:<br/>
						<input type="text" name="n_girl" placeholder="e.g. 78"></input>
						<br/>Number of boys:<br/>
						<input type="text" name="n_boy" placeholder="e.g. 78"></input>
						<br/>Disaster ID:<br/>
						<select name="disaster_id">
						<option>From database</option>
						</select>
						<br/>Number of injuries:<br/>
						<input type="text" name="n_injuries" placeholder="e.g. 78"></input>
						<br/>Number of deaths:<br/>
						<input type="text" name="n_deaths" placeholder="e.g. 78"></input>
						<center><input type="submit" value="Submit"></input>
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