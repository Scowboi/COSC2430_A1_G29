<?php
/* 
Using phpMyAdmin implemented in XAMPP, create a database named "asm3" and create a table as below: 
	CREATE TABLE user
	(
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL,
	password VARCHAR(255), NOT NULL,
	)
*/
	
	$con = mysqli_connect('localhost', 'root', '', 'asm3');
	if(!$con)
	{
		echo "Database Connection Error";
	}

?>