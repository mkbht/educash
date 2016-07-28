<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel - <?=$title?></title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/admin.css')?>">
</head>
<body>
<div class="row">
	<div class="well-black">
			<div class="logo">Manpower Rate and Review</div>
		</div>
	<div class="col-md-2">
		<div class="leftbar">
			<div class="menu">
				<ul>
					<li><a href="<?=base_url('admin/home')?>">Users</a></li>
					<li><a href="<?=base_url('admin/home/manpower')?>">Manpowers</a></li>
					<li><a href="<?=base_url('admin/addmanpower')?>">Add Manpower</a></li>
					<li class="divider"></li>
					<li><a href="<?=base_url('admin/logout')?>">Logout <?=$this->session->userdata('admin')?></a></li>
				</ul>
			</div>
		</div>
	</div>