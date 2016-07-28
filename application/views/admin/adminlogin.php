<!DOCTYPE html>
<html>
<head>
	<title>Admin Login Page</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/admin.css')?>">
</head>
<body class="login">
	<div class="container">
		<div class="col-md-6 col-md-offset-3">
			<div class="thumbnail">
				<div class="logo">MANPOWER REVIEW</div>
				<h4>Admin Panel Login</h4>
				<hr>
				<?=validation_errors('<div class="alert alert-danger">', '</div>'); ?>
				<?=form_open(base_url('admin'));?>
					<input type="text" name="username" class="form-control" placeholder="Username">
					<br>
					<input type="password" name="pass" class="form-control" placeholder="Password">
					<br>
					<input type="submit" name="submit" value="login" class="btn-primary btn">
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>