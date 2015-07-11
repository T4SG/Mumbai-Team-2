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
    if( document.myForm.school_name.value == "")
         {
            alert( "Please provide the school name!" );
            document.myForm.school_name.focus() ;
            return false;
         }
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
    if( document.myForm.rebuild_date.value == "" )
         {
            alert( "Please provide rebuild date" );
            document.myForm.rebuild_date.focus() ;
            return false;
         }
         if( document.myForm.start_month.value == "" || document.myForm.start_month.value == "Month")
         {
            alert( "Please provide start month." );
            document.myForm.start_month.focus() ;
            return false;
         }
      if( document.myForm.end_month.value == "" || document.myForm.end_month.value == "Month")
         {

            alert( "Please provide end month." );
            document.myForm.end_month.focus() ;
            return false;
         }   
     if( document.myForm.type.value == "Type" )
         {
            alert( "Please provide the type!" );
			document.myForm.type.focus() ;
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
	<title>Registration Form</title>
	<body>
		<div id="page-wrapper">
				<div id="header">
						<h1><a href="index.html" id="logo"><em>Happy Hearts Fund</em></a></h1>
						<nav id="nav">
							<ul>
								<li class="current"><a href="form2.html">Home</a></li>
								<li>
									<a href="#">Dropdown</a>
									<ul>
										<li><a href="login.html">login</a></li>
										<li><a href="dashboards.html">dashboard</a></li>
										<li><a href="form1.html">form1</a></li>
										<li><a href="form2.html">form2</a></li>
										<li><a href="form3.html">form3</a></li>
										<li><a href="aboutus.html">about us</a></li>
									</ul>
								</li>
							</ul>
						</nav>



				</div>
				
				<div ><!-- form2 -->
					<form style="margin: 0 auto; width:20%" name="myForm" action="demo_form.asp" onsubmit="return (validateForm());" method="post">
						School Name:</br>
						<input type="text" name="school_name" placeholder="e.g. St.Paul's School"></input></br>
						Region:</br>
						<select name="region">
							<option value="Asia Pacific">Asia Pacific</option>
						</select></br></br>
						<br/>Country:
							<select id="country" name="country">
							</select>
							<br />State:
							<select name="state" id="state"></select>
							<br/>
							<script language="javascript">
								populateCountries("country", "state");
							</script>
							City:<br/>
							<input type="text" name="city"></input>
						Date Rebuilt:</br>
						<input type="date" name="rebuild_date">
						</input></br>
						Semester start month:</br>
						<select name="start_month">
							<option value="Month">Month</option>
							<option value="January">January</option>
							<option value="February">February</option>
							<option value="March">March</option>
							<option value="April">April</option>
							<option value="May">May</option>
							<option value="June">June</option>
							<option value="July">July</option>
							<option value="August">August</option>
							<option value="September">September</option>
							<option value="October">October</option>
							<option value="November">November</option>
							<option value="December">December</option>
						</select></br>
						Semester end month:</br>
						<select name="end_month">
							<option value="Month">Month</option>
							<option value="January">January</option>
							<option value="February">February</option>
							<option value="March">March</option>
							<option value="April">April</option>
							<option value="May">May</option>
							<option value="June">June</option>
							<option value="July">July</option>
							<option value="August">August</option>
							<option value="September">September</option>
							<option value="October">October</option>
							<option value="November">November</option>
							<option value="December">December</option>
						</select></br>
						Type of school:</br>
						<select name="type">
							<option value="Type">Type</option>
							<option value="government">Government</option>
							<option value="private">Private</option>
						</select></br>
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