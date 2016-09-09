<?php
	session_start();
	require_once('inc/database.php');

	if(isset($_POST['submit'])) {
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$first_name	= $_POST['first_name'];
		$last_name 	= $_POST['last_name'];
		$email 		= $_POST['email'];
		$gender 	= $_POST['gender'];
		$country 	= $_POST['country'];
		$address	= $_POST['address'];
		$cell_no 	= $_POST['cell_no'];


		$username_exists = mysqli_query($c, "SELECT * FROM users WHERE username='$username'");
		$email_exists = mysqli_query($c, "SELECT * FROM users WHERE email='$email'");

		if(empty($username) OR empty($password) OR empty($first_name) OR empty($last_name) OR empty($email) OR empty($gender) OR empty($country) OR empty($address) OR empty($cell_no)) {
			$_SESSION['flash_msg'] = "All fields are mandatory.";
			header('Location: signup.php');
		}
		elseif(strlen($username) < 6 ) {
			$_SESSION['flash_msg'] = "Username must be at least 6 characters long.";
			header('Location: signup.php');
		}
		elseif(mysqli_num_rows($username_exists) > 0) {
			$_SESSION['flash_msg'] = "Username already exists. Please select another username.";
			header('Location: signup.php');
		}
		elseif(mysqli_num_rows($email_exists) > 0) {
			$_SESSION['flash_msg'] = "Email Address already in use.";
			header('Location: signup.php');
		}
		else {
			$query = mysqli_query($c, "INSERT INTO users (username, password, first_name, last_name, email, gender, country, address, phone_no) VALUES ('$username', '$password', '$first_name', '$last_name', '$email', '$gender', '$country', '$address', '$cell_no')");
			if(!$query) {
				$_SESSION['flash_msg'] = "Failed to signup, database error occurred.";
				header('Location: signup.php');
			}
			else {
				$_SESSION['username'] = $username;
				$_SESSION['logged_in'] = true;
				header('Location: home.php');
			}
		}

	}