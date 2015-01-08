<?php 
	/*
	*	This is where we connect to the database of the mysql
	*	our host is localhost, our user is root, password is cs3319, and the database that is being used is vverbaniadb
	*	This is the same database from assignment2
	*	If a connection fails to the mysql database; we print out an error statement
	*/
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "cs3319";
	$dbname = "vverbaniadb";
	
	$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	if(mysqli_connect_errno())
	{
		die("database connection failed: " . mysqli_connect_error() .
		"(" . mysqli_connect_errno() . ")");
	}

?>


