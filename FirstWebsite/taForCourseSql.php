<?php
	/*
	* This is where we see the ta's corresponding to the coursenumber
	* term and the year that are inputed by the user.
	*
	*/
	include 'connectdb.php';

	$courseNumber = $_POST["course"];
	$year = $_POST["year"];
	$term = $_POST["term"];
	
	$query1 = "SELECT assistant.firstName, assistant.lastName, assistant.westernUserId,ta_Course.studentCount 
				FROM ta_Course INNER JOIN assistant
				WHERE assistant.westernUserId = ta_Course.westernUserId
				AND ta_Course.courseNumber = '$courseNumber'
				AND ta_Course.year = '$year'
				AND ta_Course.term = '$term'";
				
	$result=mysqli_query($connection,$query1);

	if(!$result)
	{
		die("taForCourseSql.php database failed");
	}

	echo "<b><center>" . "Your assistant info and student count :" . "</center></b><br>";
	echo "<table border = \"1\" style=\"width:100%\">";
	echo "<tr>". "<td style= \"background-color:grey\">Firstname</td></th>".
	"<td style= \"background-color:grey\">LastName</td><td style= \"background-color:grey\">WesternUserId</td><td style= \"background-color:grey\">StudentCount</td>". "</tr>";

	while($row = mysqli_fetch_assoc($result))
	{
		echo "<tr>";
		echo "<td><center>" . $row["firstName"] . "</center></td><td><center>" . $row["lastName"] . 
		"</center></td> <td><center>". $row["westernUserId"] . "</center></td> <td><center>". $row["studentCount"] . "</center></td>";
		echo "</tr>";
	}

	echo "</table>";

	mysqli_close($connection);
	mysqli_free_result($result);

?>