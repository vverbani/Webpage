<!DOCTYPE html>
<!-- The second last part of GS sections-->
<!-- Professor name and westernuser id are taken in-->
<!-- Then These values are processed in addProfessorSql.php-->
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Add New Professor</h2>
	<form action = "addProfessorSql.php" method = "post"><br>
		
	New Professor First Name: <input type = "text" name="first"><br>
	New Professor Last Name:  <input type = "text" name ="last"><br>
	New Professor WesternUserId: <input type = "text" name ="userId"><br>

	<br><center><input type="submit" value="New Professor"></center>
</body>
</html>