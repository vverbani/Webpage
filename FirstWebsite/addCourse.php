<!DOCTYPE html>
<!-- This is another GS section-->
<!-- A course is add through here -->
<!-- The user is asked for the unique course number and course name-->
<!-- Once it is typed in, it goes to 'addCourseSql.php' to be processed-->
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Add New Course</h2>
	<form action = "addCourseSql.php" method = "post"><br>
	New Course Number: <input type = "text" name="courseNumber"><br>
	New Course Name:   <input type = "text" name ="courseName"><br>
	<br><center><input type="submit" value="New Course"></center>
</body>
</html>