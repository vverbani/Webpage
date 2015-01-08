<?php
	/*
	*	Once the user types in the course number and name:
	*	they are put into 2 seperate variables
	*	A connection is then formed with the database
	*	Once the connection is established; these variables are properly inserted
	*	Once inserted; kill the connection.
	*	Also free the result
	*/	
	include 'connectdb.php';

	$courseNumber = $_POST["courseNumber"];
	$courseName = $_POST["courseName"];

	$query1 = 'SELECT * 
			   FROM course';
	$result=mysqli_query($connection,$query1);

	if(!$result)
	{
		die("courseSql database failed");
	}

	$query = "INSERT INTO course(courseNumber,courseName)
				VALUES ('$courseNumber','$courseName')";

	if(!mysqli_query($connection,$query))
	{
		die("Error: insert failed " . mysqli_error($connection));
	}

	mysqli_close($connection);
	mysqli_free_result($result);
	
	include("gradSecretary.php");

?>