<!--This form is filled by the principal of the school, annually.-->
<html>
<head>
<title>Metrics Collection Form</title>
<script type="text/javascript">
function validateForm() {
    if( document.myForm.no_stu.value == "" || isNaN(document.myForm.no_stu.value) )
         {
            alert( "Please provide number of students!" );
            document.myForm.no_stu.focus() ;
            return false;
         }
    if( document.myForm.boy_per.value == "" || isNaN(document.myForm.boy_per.value) )
         {
            alert( "Please provide Boys in percentage" );
            document.myForm.boy_per.focus() ;
            return false;
         }
         
    if( document.myForm.girl_per.value == "" || isNaN(document.myForm.girl_per.value))
         {
            alert( "Please provide Girls percentage" );
            document.myForm.girl_per.focus() ;
            return false;
         }   
    if( document.myForm.sq_met.value == "" || isNaN(document.myForm.sq_met.value) )
         {
            alert( "Please provide Square metres built!" );
            document.myForm.sq_met.focus() ;
            return false;
         }  
    if( document.myForm.inc_lit.value == "" || isNaN(document.myForm.inc_lit.value))
         {
            alert( "Please provide Increase in general literacy!" );
            document.myForm.inc_lit.focus() ;
            return false;
         }  
    if( document.myForm.inc_complit.value == "" || isNaN(document.myForm.inc_complit.value))
         {
            alert( "Please provide Increase in computer literacy!" );
            document.myForm.inc_complit.focus() ;
            return false;
         }  
    if( document.myForm.no_tea.value == "" || isNaN(document.myForm.no_tea.value))
         {
            alert( "Please provide Student-to-Teacher ratio!" );
            document.myForm.no_tea.focus() ;
            return false;
         } 
    if( document.myForm.attrate.value == "" || isNaN(document.myForm.attrate.value))
         {
            alert( "Please provide Attendance rate!" );
            document.myForm.attrate.focus() ;
            return false;
         }
    if( document.myForm.n_text.value == "" || isNaN(document.myForm.n_text.value))
         {
            alert( "Please provide number of textbooks!" );
            document.myForm.n_text.focus() ;
            return false;
         }
    if( document.myForm.n_comp.value == "" || isNaN(document.myForm.n_comp.value))
         {
            alert( "Please provide number of computers!" );
            document.myForm.n_comp.focus() ;
            return false;
         }     
    if( document.myForm.n_smart.value == "" || isNaN(document.myForm.n_smart.value))
         {
            alert( "Please provide number of smartphones!" );
            document.myForm.n_smart.focus() ;
            return false;
         }
    if( document.myForm.r_rate.value == "" || isNaN(document.myForm.r_rate.value))
         {
            alert( "Please provide Retention rate!" );
            document.myForm.r_rate.focus() ;
            return false;
         }
    if( document.myForm.n_second.value == "" || isNaN(document.myForm.n_second.value))
         {
            alert( "Please provide number of student passing secondary education!" );
            document.myForm.n_second.focus() ;
            return false;
         }
    if( document.myForm.r_dropout.value == "select" )
         {
            alert( "Please provide the dropout reason!" );
            return false;
         }
      var x=document.getElementById("boy_per");
      //var y=parseInt(document.getElementById("girl_per").value);
      //var z=parseInt(document.getElementById("attrate").value);
      //var w=parseInt(document.getElementById("r_rate").value); 
    if(x.checkValidity()==false){
    	//alert("Enter the values between 1 and 100 for percentage based inputs(boys)");
    	document.getElementById("v1").innerHTML=x.validationMessage;

    	return false;
    }
    /*if(y<1||y>100){
    	alert("Enter the values between 1 and 100 for percentage based inputs girls");
    	return false;
    }
    if(z<1||z>100){
    	alert("Enter the values between 1 and 100 for percentage based inputs attendance");
    	return false;
    }
    if(w<1||w>100){
    	alert("Enter the values between 1 and 100 for percentage based inputs Retention rate");
    	return false;
    }  */

         return( true );     
}
</script>
</head>
<body>
<form name="myForm" action="demo_form.asp" onsubmit="return (validateForm());" method="post">
<fieldset>
    <legend>General Metrics</legend>
	<table>
	<tr>
	<td>Number of students enrolled:</td><td><input type="text" name="no_stu" placeholder="e.g. 200" required></input></td>
	</tr>
    <tr>
	<td>Boys(percentage):</td><td><input type="text" name="boy_per" placeholder="e.g. 45" required min="1" max="100"></input></td>
	</tr>
	<tr>
	<td>Girls(percentage):</td><td><input type="text" name="girl_per" placeholder="e.g. 55" required></input></td>
	</tr>
	<tr>
	<td>Square meters built:</td><td><input type="text" name="sq_met" placeholder="e.g. 2000" required></input></td>
	</tr>
	</table>
</fieldset>
<fieldset>
    <legend>Academic, Attendance and Technology Metrics</legend>
	<table>
	<tr>
	<td>Increase in general literacy:</td><td><input type="text" name="inc_lit" placeholder="e.g. 30" required ></input></td>
	</tr>
    <tr>
	<td>Increase in computer literacy:</td><td><input type="text" name="inc_complit" placeholder="e.g. 45" required></input></td>
	</tr>
	<tr>
	<td>Number of teachers</td><td><input type="text" name="no_tea" placeholder="e.g. 2" required></input></td>
	</tr>
	<tr>
	<tr><td>Attendance rate(percentage):</td><td><input type="text" name="attrate" placeholder="e.g. 80" required></input></td>
	</tr>
	<tr>
	<tr><td>Number of textbooks available:</td><td><input type="text" name="n_text" placeholder="e.g. 400" required></input></td>
	</tr>
	<tr>
	<tr><td>Number of computers available:</td><td><input type="text" name="n_comp" placeholder="e.g. 200" required></input></td>
	</tr>
	<tr>
	<tr><td>Number of smartphones available:</td><td><input type="text" name="n_smart" placeholder="e.g. 80" required></input></td>
	</tr>
	</table>
</fieldset>
<fieldset>
    <legend>Long Term Impact Metrics</legend>
	<table>
	<tr>
	<td>Retention rate(percentage):</td><td><input type="text" name="r_rate" placeholder="e.g. 30" required></input></td>
	</tr>
    <tr>
	<td>Number of students persuing secondary education:</td><td><input type="text" name="n_second" placeholder="e.g. 103" required></input></td>
	</tr>
	<tr>
	<tr>
	<td>Most common reason for dropout: </td>
	<td>
		<select name="r_dropout" required>
			<option value="select">Select</option>
			<option value="lack_funds">Lack of family funds</option>
			<option value="lack_interest">Lack of interest in further studies</option>
		</select>
	</td></tr>
	</table>
</fieldset>
	<center><input type="submit" value="Submit Form" ></input></center>
</form>
</body>
</html>
