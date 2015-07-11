<?php
   // define database related variables
   $database = 'db name';
   $host = 'location of db';
   $user = 'db user id';
   $pass = 'db login password';

   // try to conncet to database
   $dbh = new PDO("mysql:dbname={$database};host={$host};port={3306}", $user, $pass);

   if(!$dbh){

      echo "unable to connect to database";
   }
   
?>