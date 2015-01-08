<!DOCTYPE html>
<!-- Last section clicked from GS -->
<!-- Like the add professor part; user types in prof name / user id-->
<!-- Once user clicks submit, they are taken to the deleteProfessorSql.php to process-->
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Delete Professor</h2>
	<form action = "deleteProfessorSql.php" method = "post"><br>
	New Professor First Name: <input type = "text" name="first"><br>
	New Professor Last Name:   <input type = "text" name ="last"><br>
	New Professor WesternUserId:   <input type = "text" name ="userId"><br>

	<br><center><input type="submit" value="New Professor"></center>
</body>
</html>