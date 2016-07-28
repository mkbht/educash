<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/admin.css')?>">
</head>
<body class="login">
	<div class="container">
		<div class="col-md-6 col-md-offset-3">
				<div class="logo">MANPOWER REVIEW</div>
			<div class="thumbnail">
				<h3>खाता खोल्नुहोस </h3>
				<hr>
				<?=form_open(base_url('login/signup'));?>
					<label>नाम  </label>
					<?=form_error('fname', '<div class="alert alert-danger">', '</div>');?>
					<input type="text" name="fname" class="form-control" value="<?=set_value('fname')?>">
					<br>
					<label> थर </label>
					<?=form_error('lname', '<div class="alert alert-danger">', '</div>');?>
					<input type="text" name="lname" class="form-control" value="<?=set_value('lname')?>">
					<br>
					<label>युजरनेम </label>
					<?=form_error('username', '<div class="alert alert-danger">', '</div>');?>
					<input type="text" name="username" class="form-control" value="<?=set_value('username')?>">
					<br>
					<label>पासवर्ड</label>
					<?=form_error('pass', '<div class="alert alert-danger">', '</div>');?>
					<input type="password" name="pass" class="form-control">
					<br>
					<label>ठेगाना </label>
					<?=form_error('address', '<div class="alert alert-danger">', '</div>');?>
					<input type="text" name="address" class="form-control" value="<?=set_value('address')?>">
					<br>
					<label>डकुमेन्ट </label>
					<input type="file" name="document" class="form-control">
					<br>
					<input type="submit" name="submit" value="खाता खोल्नुहोस " class="btn-primary btn">
				</form>
				<br>
				<b>के तपाई पुरानो सदस्य हो ? <a href="<?=base_url('login')?>" class="btn btn-danger">लगइन गर्नुहोस </a>
			</div>
		</div>
	</div>
	
</body>
</html>