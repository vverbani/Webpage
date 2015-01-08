<?php
	/*
	*	We put all typed in values into seperate variables
	*	We once again check our database connection
	*	We then delete these variables from the proper location in assistant table
	* 	The connection is clocked and the query is freed.
	*
	*/
	include 'connectdb.php';

	$firstName = $_POST["first"];
	$lastName = $_POST["last"];
	$westernUserId1 = $_POST["userid"];
	
	$query1 = 'SELECT * 
			   FROM assistant';
	$result=mysqli_query($connection,$query1);

	if(!$result)
	{
		die("assistant database failed");
	}

	$query = "DELETE FROM assistant 
			WHERE firstname = '$firstName' AND westernUserId = '$westernUserId1'";

	if(!mysqli_query($connection,$query))
	{
		die("Error: insert failed: " . mysqli_error($connection));
	}
	mysqli_close($connection);
	mysqli_free_result($result);
	
	include("gradSecretary.php");

?>