<!DOCTYPE html>
<html>
<!-- The user is asked to type in :-->
<!-- courseNumber,term,year-->
<!-- Then taken to taForCourseSql.php -->
<head>
	<title>T.A Info-Section</title>
</head>
<body>

	<h1>To See the Ta's for a Course,</h1>
	<h1>Enter the following information:</h1>
	
	<form action = "taForCourseSql.php" method = "post"><br>
	Course Number: <input type="text" name ="course"><br>
	Term: <input type="text" name ="term"><br>
	Year: <input type="text" name ="year"><br>
	<center><input type="submit" value="Check"></center>

</body>
</html>