<?php
	/*
	*	The professors name,and western user id are put into seperate variables
	*	These variables are then properly inserted in the instructor table
	*	Connection is then killed
	*/
	
	include 'connectdb.php';

	$firstName = $_POST["first"];
	$lastName = $_POST["last"];
	$westernUserId = $_POST["userId"];
	
	$query1 = 'SELECT *	
				FROM instructor';
	$result=mysqli_query($connection,$query1);

	if(!$result)
	{
		die("addProfessorsql database failed");
	}

	$query = "INSERT INTO instructor(firstName,lastname,westernUserId)
				VALUES('$firstName','$lastName','$westernUserId')";

	if(!mysqli_query($connection,$query))
	{
		die("Error: insert failed " . mysqli_error($connection));
	}
	mysqli_close($connection);
	mysqli_free_result($result);
	
	include("gradSecretary.php");

?>