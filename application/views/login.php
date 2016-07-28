<!DOCTYPE html>
<html>
<head>
	<title>User Login Page</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/admin.css')?>">
</head>
<body class="login">
	<div class="container">
		<div class="col-md-6 col-md-offset-3">
			<div class="thumbnail">
				<div class="logo">MANPOWER REVIEW</div>
				<h4>सदस्य लगइन</h4>
				<hr>
				<?=form_open(base_url('login'));?>
					<?=form_error('username', '<div class="alert alert-danger">', '</div>'); ?>
					<input type="text" name="username" class="form-control" placeholder="युजरनेम" value="<?=set_value('username')?>">
					<br>
					<?=form_error('pass','<div class="alert alert-danger">', '</div>'); ?>
					<input type="password" name="pass" class="form-control" placeholder="पासवर्ड">
					<br>
					<input type="submit" name="submit" value="लगइन" class="btn-primary btn">
				</form>
				<br>
				<b>अथवा <a href="<?=base_url('login/signup')?>" class="btn btn-danger">सदस्य बन्नुहोस</a>
			</div>
		</div>
	</div>
	
</body>
</html>