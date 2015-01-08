<?php
	/*
	*	This is where we check if user, grad secretary is logged in or not
	*
	*/
	$USERS["gradsecretary"] = "janice";

	function check_logged()
	{
		global $_SESSION,USERS;
			if(!array_key_exists($_SESSION["LOGGED"], $USERS))
			{
				header("Location: login.php");
			};
	};
?>