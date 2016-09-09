<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>SignUp - EduCash</title>
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
			<form action="signup_controller.php" method="post">
				<h4><b>Create an Account</h4>
				<div class="row">
				<?php
					if(isset($_SESSION['flash_msg'])) {
						echo '<div class="alert alert-danger">'. $_SESSION['flash_msg']. '</div>';
						unset($_SESSION['flash_msg']);
					}
				?>
					<div class="col-md-6">
						<input type="text" name="first_name" class="form-control" type="text" placeholder="First Name">
					</div>
					<div class="col-md-6">
						<input type="text" name="last_name" class="form-control" type="text" placeholder="Last Name">
					</div>
					<div class="col-md-6">
						<input type="text" name="username" class="form-control" type="text" placeholder="Username">
					</div>
					<div class="col-md-6">
						<input type="password" name="password" class="form-control" type="password" placeholder="Password">
					</div>
					<div class="col-md-12">
						<input type="email" name="email" class="form-control" name="email" placeholder="Email">
					</div>
					<div class="col-md-12">
						<div class="radio-inline">
						  <label>Gender: </label>
						</div>
						<div class="radio-inline">
						  <label><input type="radio" name="gender">Male</label>
						</div>
						<div class="radio-inline">
						  <label><input type="radio" name="gender">Female</label>
						</div>
					</div>
					<div class="col-md-12">
						<select class="form-control" name="country">
							<option hidden>--Choose your country--</option>
							<option>Nepal</option>
							<option>UK</option>
							<option>USA</option>
							<option>Germany</option>
							<option>Australia</option>
							<option>.....</option>
						</select>
					</div>
					<div class="col-md-12">
						<input type="text" class="form-control" name="address" placeholder="Address">
					</div>
					<div class="col-md-12">
						<input type="text" class="form-control" name="cell_no" placeholder="Phone Number">
					</div>
					<div class="col-md-12">
						<button class="btn btn-danger pull-right" type="submit" name="submit">Sign Up</button>
					</div>
				</div>
			</form>
			<div class="clearfix"></div>
			<div class="login-or">OR</div>
			<div class="social-login">
				<a class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>
				<a class="btn btn-twitter"><i class="fa fa-twitter"></i> Twitter</a>
				<a class="btn btn-google"><i class="fa fa-google-plus"></i> Google</a>
			</div>
			<br>
			Already a Member? <a href="login.php"> <b>Log In</b></a>
		</div>
		<center>&copy; 2016 Educash - All Rights Reserved</center>
	</div>		
</html>