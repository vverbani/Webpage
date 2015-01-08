<!DOCTYPE html>
<!-- We are brought on this website once GS clicks add assistant-->
<!-- User types in firsdtname,lastname,studentNumber, user id, type, headsupervisor -->
<!-- Once user clicks on submit button: it links to the 'deleteAssistantSql.php-->
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Delete New Teaching Assistant</h2>
	<form action = "deleteAssistantSql.php" method = "post"><br>
		
	First Name: <input type = "text" name= "first"><br>
	Last Name: <input type = "text" name = "last"><br>
	Western User Id: <input type = "text" name = "userId"><br>
	
	<br><center><input type="submit" value="Delete" </center>
</body>
</html>