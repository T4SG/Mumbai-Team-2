<?php


$roleqry="SELECT roll_id FROM rolemap WHERE user_id = (select user_id from users where username = $login)";
			//$result1=mysql_query($roleqry);
			//if(mysql_num_rows($result1) >= 1)
			$i=0;
			while ($result1=mysql_query($roleqry)) {
    				$_SESSION['roll'+$i]=$result1;
    				$i=$i+1;

				}