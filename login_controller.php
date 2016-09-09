<?php
	session_start();
	require_once('inc/database.php');

	if(isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$query = mysqli_query($c, "SELECT * FROM users WHERE username='$username' AND password='$password'");

		if(empty($username) OR empty($password)) {
			$_SESSION['flash_msg'] = "All fields are mandatory.";
			header('Location: login.php');
		}
		elseif(mysqli_num_rows($query) == 1) {
			$_SESSION['username'] = $username;
			$_SESSION['logged_in'] = true;
			header('Location: home.php');
		}
		else {
			$_SESSION['flash_msg'] = "Username and Password do not match.";
			header('Location: login.php');
		}
	}

	else {
			header('Location: login.php');
	}
