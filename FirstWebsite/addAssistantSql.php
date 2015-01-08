<?php
	/*
	*	We put all typed in values into seperate variables
	*	We once again check our database connection
	*	We then insert these variables into the proper location in assistant table
	* 	The connection is clocked and the query is freed.
	*
	*/
	include 'connectdb.php';

	$firstName = $_POST["first"];
	$lastName = $_POST["last"];
	$westernUserId1 = $_POST["userId"];
	$type = $_POST["type"];
	$headSupervisor = $_POST["supervisor"];

	$query1 = 'SELECT * 
			   FROM assistant';
	$result=mysqli_query($connection,$query1);

	if(!$result)
	{
		die("assistant database failed");
	}

	$query = "INSERT INTO assistant(firstName,lastName,westernUserId,type,headSupervisor)
			VALUES ('$firstName','$lastName','$westernUserId1','$type','$headSupervisor')";

	if(!mysqli_query($connection,$query))
	{
		die("Error: insert failed: " . mysqli_error($connection));
	}
	mysqli_close($connection);
	mysqli_free_result($result);
	
	include("gradSecretary.php");

?>