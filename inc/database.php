<?php
	//database credintals
	$db_host 		= "localhost";
	$db_username 	= "root";
	$db_password	= "";
	$db 		= "educash";

	//connect
	$c = mysqli_connect($db_host, $db_username, $db_password, $db);
	if(!$c)
		die("Error occurred : ". mysqli_connect_error());