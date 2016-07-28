<html>
		<head>
			<title><?=$title; ?></title>
			<style type="text/css">
			.lastwarper {
				padding-top: 20px;
				align-content: center;
				background:#f8f8f8;
				min-height: 50px;
			}
			.hoverimage:hover {
				
				cursor: pointer;
				box-shadow: 3px 3px 20px #333;
			}
			.col-md-3, .col-md-6 {
    			position: relative;
			}
			.text-pop{
    			display: none;
    			position: absolute;
			}
			</style>
			<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap.min.css')?>">
			<!-- Important Owl stylesheet -->
			<link rel="stylesheet" href="<?=base_url('assets/css/owl.carousel.css');?>">
			<!-- Default Theme -->
			<link rel="stylesheet" href="<?=base_url('assets/css/owl.theme.css')?>">
			<link href="<?=base_url('assets/css/default.css')?>">
			<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/rateit.css'); ?>">
	  	</head>
		<body>
		<nav class="navbar navbar-default navbar-fixed-top">
  			<div class="container-fluid">
    			<div class="navbar-header">
      				<a class="navbar-brand" href="<?=base_url('pub'); ?>" style="padding-left:100px">Manpower review</a>
    			</div>
    			<ul class="nav navbar-nav" style="padding-left: 100px">
      				<li class="active"><a href="#">गृहपृष्ठ</a></li>
     				<li><a href="#">म्यानपावर कम्पनीहरु</a></li>
      				<li><a href="#">समाचारहरु</a></li> 
      				<li><a href="#">सम्पर्क</a></li> 
    			</ul>
    			<ul class="nav navbar-nav navbar-right">
                	<li>
                		<?php if($logged) { ?>
                		<a href="#" class="glyphicon glyphicon-log-out pull-right" title="बाहिर जानुहोस"></a>
                		<?php } else { ?>
                		<span class="glyphicon glyphicon-user avatar" style="">
                		<?php }?>
					</li>
            	</ul>
  			</div>
		</nav>





<div class="container" style="margin-top: 60px;">
	<div class="row">
		<div class="col-md-6 col-sm-6">
			<div id="compthumb" class="owl-carousel">
  				<div class="hoverimage"> <img style="border-radius:5px;" src="<?=base_url('img/avatar.jpg'); ?>" height="370"> </div>
  				<div class="hoverimage"> <img style="border-radius:5px;" src="<?=base_url('img/owl1.jpg'); ?>" height="370"> </div>
  			</div>
		</div>
		<div class="col-md-6 col-sm-6">
			<div class="row">
				<div class="col-md-6">
					<img class="img img-responsive img-thumbnail hoverimage" src="<?=base_url('img/pyramid.jpg'); ?>">
				</div>
				<div class="col-md-6">
					<img class="img img-responsive img-thumbnail hoverimage" src="<?=base_url('img/rezayat.jpg'); ?>">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6"><br>
					<img class="img img-responsive img-thumbnail hoverimage" src="<?=base_url('img/victorynepal.jpg'); ?>">
				</div>
				<div class="col-md-6"><br>
					<img class="img img-responsive img-thumbnail hoverimage" src="<?=base_url('img/continental.jpg'); ?>">
				</div>
			</div>
		</div>
	</div><br>
	<div class="panel panel-default">
  		<div class="panel-heading">Some more Manpower companies, you may like...</div>
  		<div class="panel-body">
  			<div class="row">
  			<?php foreach($data as $key): ?>
  				<div class="col-md-3"><a href="<?=base_url('pub/manpower/'.$key['id']); ?>"><img class="img img-responsive img-thumbnail hoverimage" src="<?=base_url($key['thumb']); ?>"><div class="text-pop"><?=$key['name']; ?></div></a></div>
  			<?php endforeach; ?>
  			</div>
  		</div>
	</div>
</div>

<div class="lastwarper">
	<div class="container">
		<center>Copyright &copy; <?=Date('Y'); ?> All right reserved.</center>
	</div>
</div>





	</body>
		<script src="<?=base_url('assets/js/jquery.min.js')?>"></script>
		<script src="<?=base_url('assets/js/owl.carousel.min.js'); ?>"></script>
		<script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
		<script src="<?=base_url('assets/js/jquery.rateit.min.js'); ?>"></script>
		<script src="<?=base_url('assets/js/custom.js'); ?>"></script>
	</html>