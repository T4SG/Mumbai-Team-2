<?php

session_start();

if(isset($_SESSION['SESS_MEMBER_ID']))	
			{
				?>	
			
			
			
					
			
		
				<?php
			
					$name=$_SESSION['SESS_MEMBER_ID'];
					echo $name;
session_start();
	$db=mysql_connect('localhost','root','shrey');

	if(!$db)
	{
		die("not connected".mysql_error());
	}
	$select=mysql_select_db('quiz');
	
	if(!$select)
	{
		die("Not selected".mysql_error());
	}
$totalno=$_SESSION['no'];
$table=$_SESSION['table'];
echo $table;
for($i=0;$i<$totalno;$i++)
{
	$question=$_POST[$i];
	$option1=$_POST['option1'.$i];
	$option2=$_POST['option2'.$i];
	$option3=$_POST['option3'.$i];
	$option4=$_POST['option4'.$i];
	$ans=$_POST['ans'.$i];
	$query="insert into ".$table." values($i,'$question','$option1','$option2','$option3','$option4',$ans)";
	$result=mysql_query($query);
}
}
?>