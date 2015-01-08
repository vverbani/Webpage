<?php
	/*
	*	Professors name/user id is put in seperate variables
	*	We use these variables to then delete the professor from our database
	*	
	*/
	
	include 'connectdb.php';

	$firstName = $_POST["first"];
	$lastName = $_POST["last"];
	$westernUserId = $_POST["userId"];
	
	$query1 = 'select * from instructor';
	$result=mysqli_query($connection,$query1);

	if(!$result)
	{
		die("deleteProfSql database failed");
	}

	$query = 
		"DELETE FROM instructor 
		WHERE firstName = '$firstName' AND lastName = '$lastName' AND westernUserId = '$westernUserId'
		";
	
	if(!mysqli_query($connection,$query))
	{
		die("Error: deletion failed " . mysqli_error($connection));
	}
	mysqli_close($connection);
	
	include("gradSecretary.php");

?>