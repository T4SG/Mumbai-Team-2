<?php
$con=mysqli_connect("localhost","team2","team","Student_Mgmt");

function StudenLogInDetailsrUpdate($con)
{

	$query="select STUD_NAME,STUD_ADDR from STUDENT"; //query to update
	$result=mysqli_query($con,$query); //Returns a boolean value whether there are results in the array,checks whether the query is correct or no. & internally passes the object of the last executed query.

	while($row=mysqli_fetch_array($result)) //Returns $row the array
	{
		print_r($row); //OR--> echo $row["EMP_NAME"]; echo "<br>"; echo $row["EMP_ADDR"]; echo "<br>";
	}
	
}
StudentLogInDetailsrUpdate($con);
//Directly run this file not the html one and there should be data inserted in the database in localhost/phpmyadmin
?>
