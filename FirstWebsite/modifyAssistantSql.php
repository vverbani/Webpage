<?php
	/*
	*	We process the user given information in seperate variables:
	*	western user id, course number , term , year
	*	We first check whether we connected to the database correctly
	*	Once connected: we insert our variables into the proper
	*	columns of our 'ta_course'
	*	Once insert is complete, we close our connection and free our query
	*/	
	include 'connectdb.php';

	$westernUserId = $_POST["userId"];
	$courseNumber = $_POST["number"];
	$year = $_POST["year"];
	$term = $_POST["term"];
		
	$query1 = 'SELECT *	
				FROM ta_Course';
	$result=mysqli_query($connection,$query1);

	if(!$result)
	{
		die("modifyProfessorsql database failed");
	}

	$query = "INSERT INTO ta_Course(westernUserId,courseNumber,year,term)
			VALUES ('$westernUserId','$courseNumber','$year','$term')
			";

	if(!mysqli_query($connection,$query))
	{
		die("Error: insert failed " . mysqli_error($connection));
	}
	mysqli_close($connection);
	mysqli_free_result($result);
	
	include("gradSecretary.php");

?>