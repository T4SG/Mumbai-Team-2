	
<?php
$con=mysqli_connect("localhost","goldenleaf","larry_goldenleaf","hhf");
function DetailsInsert($con)
{
 	
 		//$query="INSERT into customers ('check_in', 'check-out', 'room_type', 'adults_per_room', 'children_0_5', 'children_6_12') VALUES ('$checkin.','$checkout','$roomtype','$adults','$child0','$child6');"; 
	$query="INSERT INTO `hhf`.`demographics` ( `region`, `country`, `state`, `city`,`members`,`children`,`teachers`, `girls`, `boys`, `disasterid`,`injuries`,`deaths`) VALUES ('".$_POST["region"]."','".$_POST["country"]."','".$_POST["state"]."','".$_POST["city"]."','".$_POST["n_mem"]."','".$_POST["n_child"]."','".$_POST["n_teachers"]."','".$_POST["n_girl"]."','".$_POST["n_boy"]."','".$_POST["disaster_id"]."','".$_POST["n_injuries"]."','".$_POST["n_deaths"]."');"; //id is auto increment
	
	echo $query;
	if(mysqli_query($con,$query)) //Runs the query and returns boolean variable.
	{
		$id=mysqli_insert_id($con);//Gives the auto generated id required in employee_master table
	}
	else 
	{
		return false;
	}
		/*$query1="insert into employee_master(emp_id,emp_username,emp_password) values(".$id.",'".$_POST["user"]."','".$_POST["pass"]."');";	//id is auto increment,we take auto incremented id from the first table to put in employee id in employee_master table and this query stores the username and password from the query  


	echo $query1; //see screenshot


	if(!mysqli_query($con,$query1)) //Runs the query and returns boolean variable.
	{
		return false;
	}
	else 
	{
		return true;
	}	//checks the second query just as the first
	*/	
	
}
$result=DetailsInsert($con);

if($result)
{
	echo "Not done";
}
else
{
	
	echo "Done";
}	
?>