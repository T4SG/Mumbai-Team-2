<?php
   // define database related variables
   $database = 'phpwt';
   $host = 'localhost';
   $user = 'root';
   $pass = 'dakshil';

   // try to conncet to database
   $dbh = new PDO("mysql:dbname={$database};host={$host};port={3306}", $user, $pass);

   if(!$dbh){

      echo "unable to connect to database";
   }
   
?>