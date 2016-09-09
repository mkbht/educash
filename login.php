<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login - EduCash</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div class="container">
					<div class="logo">
						Edu<span class="green">Cash</span>
					</div>

		<div class="loginbox">

			<form action='login_controller.php' method='post' class="row">
				<h4><b>Login</b> to your account</h4>
				<?php
					if(isset($_SESSION['flash_msg'])) {
						echo '<div class="alert alert-danger">'. $_SESSION['flash_msg']. '</div>';
						unset($_SESSION['flash_msg']);
					}
				?>
				<div class="col-md-12">
					<input class="input form-control" type="text" placeholder="Username or Email" name='username'>
				</div>
				<div class="col-md-12">
					<input class="input form-control" type="password" placeholder="Password" name='password'>
				</div>
				<div class="col-md-12">
					<a href="#">Forgot Password?</a>
					<button class="btn btn-danger pull-right" type="submit" name='submit'>Log In</button>
				</div>
			</form>
			<div class="login-or">OR</div>
			<div class="social-login">
				<a class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>
				<a class="btn btn-twitter"><i class="fa fa-twitter"></i> Twitter</a>
				<a class="btn btn-google"><i class="fa fa-google-plus"></i> Google</a>
			</div>
			<br>
			Don't have an account yet? <a href="signup.php"> <b>Sign Up for Free</b></a>
		</div>
		<center>&copy; 2016 Educash - All Rights Reserved</center>
	</div>
		
</html>