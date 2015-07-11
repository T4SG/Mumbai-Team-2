<?php 

// setup messages table
CREATE TABLE users(
   id INT NOT NULL AUTO_INCREMENT,
   username VARCHAR(100) NOT NULL,
   password VARCHAR(100) NOT NULL,
   role VARCHAR(100) NOT NULL,
   PRIMARY KEY (id)
);

?>