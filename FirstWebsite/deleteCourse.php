<!DOCTYPE html>
<!-- Another GS section-->
<!-- This is for deleting the course-->
<!-- User is asked to insert course number and course name-->
<!-- These information are processed in deleteCourseSql once user clicks submit-->
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Delete Course</h2>
	<form action = "deleteCourseSQl.php" method = "post"><br>
	Course Number to Delete: <input type = "text" name="number"><br>
	Course Name to Delete:   <input type = "text" name ="name"><br>
	
	<br><center><input type="submit" value="DeleteCourse"</center>
</body>
</html>
