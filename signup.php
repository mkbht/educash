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
			<form action="home.php">
				<h4><b>Create an Account</h4>
				<div class="row">
					<div class="col-md-6">
						<input class="form-control" type="text" placeholder="First Name">
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" placeholder="Last Name">
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" placeholder="Username or Email">
					</div>
					<div class="col-md-6">
						<input class="form-control" type="password" placeholder="Password">
					</div>
					<div class="col-md-12">
						<div class="radio-inline">
						  <label>Gender: </label>
						</div>
						<div class="radio-inline">
						  <label><input type="radio" name="optradio">Male</label>
						</div>
						<div class="radio-inline">
						  <label><input type="radio" name="optradio">Female</label>
						</div>
					</div>
					<div class="col-md-12">
						<select class="form-control">
							<option hidden>--Choose your country--</option>
							<option value="NP">Nepal</option>
							<option value="UK">UK</option>
							<option value="US">USA</option>
							<option value="GE">Germany</option>
							<option value="AU">Australia</option>
							<option value="..">.....</option>
						</select>
					</div>
					<div class="col-md-12">
						<button class="btn btn-danger pull-right" type="submit">Sign Up</button>
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