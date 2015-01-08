<?php
	/*
	*	The course number and name are saved under seperate variables	
	*	These variables are established into the query connection
	*	Once connected, they are deleted
	*	The connection is killed and the querys are freed
	*/
	
	include 'connectdb.php';

	$courseNumber = $_POST["number"];
	$courseName = $_POST["name"];

	$query1 = 'SELECT *
			FROM course';
	$result=mysqli_query($connection,$query1);

	if(!$result)
	{
		die("courseDelete database failed");
	}

	$query = "DELETE FROM course
				WHERE courseNumber = '$courseNumber'" ;

	if(!mysqli_query($connection,$query))
	{
		die("Error: deletion failed " . mysqli_error($connection));
	}
	
	mysqli_close($connection);
	mysqli_free_result($result);
	
	include("gradSecretary.php");

?>