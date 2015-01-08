
<?php
	/*
	*	We take in the professors western id into a variable
	*	We then select from our database for this professor
	*	We then return the tas first,lastname, type, and type of supervisor
	*	to who is the ta of the certain professor given.
	*
	*/
	include 'connectdb.php';

	$instructWId = $_POST["userId"];
	
	$query1 = "SELECT firstName,lastName,westernUserId,type,'headSupervisor' AS role
			FROM assistant 
			WHERE headSupervisor = '$instructWId' "; 
	
	$result=mysqli_query($connection,$query1);

	if(!$result)
	{
		die("professorsTaSql.php database failed");
	}

	echo "<h1>";
	echo "These are all the TA's for ";
	echo "$instructWId".":";
	echo "</h1>";
	echo "<ol>";

	while($row = mysqli_fetch_assoc($result))
	{
		echo "<li>";
		echo "Name:" . $row["firstName"]. " " . $row["lastName"] . "<br>" .   "Western Id: " . $row["westernUserId"] . "<br>" . " Type: " . $row["type"] 
		. "<br>" . "Role: " . $row["role"] . "<br>";
	}

	mysqli_close($connection);
	mysqli_free_result($result);
	
?>