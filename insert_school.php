<?php
$con=mysqli_connect("localhost","root","code4good","happy_hearts");
function DetailsInsert($con)
{
 	
 		//$query="INSERT into customers ('check_in', 'check-out', 'room_type', 'adults_per_room', 'children_0_5', 'children_6_12') VALUES ('$checkin.','$checkout','$roomtype','$adults','$child0','$child6');"; 
	$query="INSERT INTO `happy_hearts`.`school` ( `school_name`, `region`, `country`, `state`,`city`,`date_rebuilt`, `sem_begin`, `sem_end`, `type`, `director_id`) VALUES ('".$_POST["school_name"]."','".$_POST["region"]."','".$_POST["country"]."','".$_POST["state"]."','".$_POST["city"]."','".$_POST["rebuild_date"]."','".$_POST["start_month"]."','".$_POST["end_month"]."','".$_POST["type"]."','".$_POST["princ_id"]."');"; //id is auto increment
	
	echo $query;
	/*if(mysqli_query($con,$query)) //Runs the query and returns boolean variable.
	{
		$id=mysqli_insert_id($con);//Gives the auto generated id required in employee_master table
		echo $id;
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