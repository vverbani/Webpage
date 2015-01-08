<!DOCTYPE html>
<!-- We are brought on this website once GS clicks add assistant-->
<!-- User types in firsdtname,lastname,studentNumber, user id, type, headsupervisor -->
<!-- Once user clicks on submit button: it links to the 'addAssistantSql.php-->
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Add New Teaching Assistant</h2>
	<form action = "addAssistantSql.php" method = "post"><br>
		
	First Name: <input type = "text" name= "first"><br>
	Last Name: <input type = "text" name = "last"><br>
	Student Number: <input type = "number" name = "number"><br>
	Western User Id: <input type = "text" name = "userId"><br>
	Type: <input type = "text" name = "type"><br>
	Head Supervisor: <input type = "text" name = "supervisor"><br>

	<br><center><input type="submit" value="New Teaching Assistant"></center>
</body>
</html>