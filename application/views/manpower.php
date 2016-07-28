<?php
defined('BASEPATH') OR exit('No direct script access allowed');
echo doctype();
$logged = $this->session->userdata('logged');
?>
<html>
<head>
	<title><?=$title; ?></title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link href="http://localhost/hack/assets/css/default.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/js/rateit.css'); ?>">
	<style type="text/css">
	.heading_bar {
		border-right: 5px solid grey;
		min-height: 140px;
		background: #f8f8f8;
		border-radius: 5px 0px 0px 5px;
		padding: 15px 9px 9px 9px;
	}
	.heading {
		padding: 0px 0px 0px 0px;
		text-align: center;
		font-weight: bold;
		font-size: 16px;
		color: #000;
	}
	.heading:before {
		content: '# '
	}
	.review_no {
		font-weight: italic;
		color: grey;
	}
	.avatar {
		font-size: 80px;
		border-radius: 50%;
	}
	.avatar_desc {
		color: grey;
		font-size: 12px;
		align-items: center;
	}
 	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
  			<div class="container-fluid container">
    			<div class="navbar-header">
      				<a class="navbar-brand" href="<?=base_url('index.php/pub/'); ?>" style="padding-left:100px">Manpower review</a>
    			</div>
    			<ul class="nav navbar-nav" style="padding-left: 100px">
      				<li class="active"><a href="#">गृहपृष्ठ</a></li>
     				<li><a href="#">म्यानपावर कम्पनीहरु</a></li>
      				<li><a href="#">समाचारहरु</a></li> 
      				<li><a href="#">सम्पर्क</a></li>
      				<li>
                		<?php if($logged) { ?>
                		<a href="#" class="glyphicon glyphicon-log-out pull-right" title="बाहिर जानुहोस"></a>
                		<?php } else { ?>
                		<a href="#" class="glyphicon glyphicon-user" style=""> </a>
                		<?php }?>
					</li>
    			</ul>
  			</div>
		</nav>
		<?php foreach($power as $key): ?>
		<div class="container" style="margin-top: 60px;">
			<div class="row">
				<div class="col-md-8">
					<div class="heading_bar">
						<div class="heading"><?=$key['name']; ?></div>
						<div class="description"><?=$key['description']; ?>.</div>
						<br>
						<div class="panel panel-default">
							<div class="panel-body">
								<table class="table table-responsive table-striped">
									<thead>
										<tr>
											<td>फोन :</td>
											<td><?=$key['phone']; ?></td>
										</tr>
										<tr>
											<td>इमेल :</td>
											<td><?=$key['email']; ?></td>
										</tr>
										<tr>
											<td>वेबसाइट :</td>
											<td><a href="<?=$key['website']; ?>"><?=$key['website']; ?></a></td>
										</tr>
										<tr>
											<td>ठेगाना :</td>
											<td><?=$key['address']; ?></td>
										</tr>
									</thead>
								</table>
							</div>
						</div>
					</div><br>
					<div class="panel panel-success" style="margin-right: 5px">
						<div class="panel-heading">
  							<strong>मेरा प्रतिक्रियाहरु <span style="padding-top: 0px;" class="rateit" data-rateit-value="<?=$rate; ?>" data-rateit-ispreset="true" data-rateit-readonly="true"></span>!</strong> <span class="review_no"> <?=$rate; ?></span>
  							<a class="btn btn-danger btn-sm pull-right" id="rate_it" href="#" data-toggle="modal" data-target="#myModal" style="<?php if(!$logged) echo "display: none;"; ?>">रेट र प्रतिक्रिया</a>
						</div>
						<div class="panel-body" id="review_panel" style="<?php if(!$logged) echo "display: none;"; ?>">
							<div class="list-group">
								<div class="list-group-item list-group-item-info">
									<div class="row">
										<div class="col-md-1"> </div>
										<div class="col-md-7">मेनपावरले भने अनुसारको काम पाउनु भएको छ कि छैन?</div>
										<div class="col-md-4"><span class="rateit" id="rate1" data-rateit-value="0" data-rateit-ispreset="true" data-rateit-readonly="false"></span></div>
									</div><br>
									<div class="row">
										<div class="col-md-1"> </div>
										<div class="col-md-7">मेनपावरले भने अनुसारको काम पाउनु भएको छ कि छैन?</div>
										<div class="col-md-4"><span class="rateit" data-rateit-value="0" data-rateit-ispreset="true" id="rate2" data-rateit-readonly="false"></span></div>
									</div><br>
									<div class="row">
										<div class="col-md-1"> </div>
										<div class="col-md-7">मेनपवारले तोके अनुसारको तलब पाउनु भएको छ कि छैन?</div>
										<div class="col-md-4"><span class="rateit" id="rate3" data-rateit-value="0" data-rateit-ispreset="true" data-rateit-readonly="false"></span></div>
									</div><br>

									<div class="alert alert-danger" id="review_info" style="display: none;">
									<form method="post" action="<?=base_url('index.php/pub/insert_review/'.$key["id"]); ?>">
										<div class="form-group">
											<label for="reviews"></label>
											<textarea class="form-control" name="review" placeholder="तपाइको प्रतिक्रिया...." style="min-height: 120px"></textarea>
											<input type="hidden" name="rate" value="0">
										</div>
										<div class="row">
											<div class="col-md-12">
												<button type="submit" class="btn btn-success btn-md pull-right" id="submit_review"> बुझाउनुहोस्!</button>
											</div>
										</div>
									</form>
									</div>
								</div>
							</div>
						</div>
						<div class="panel-body">
							<ul class="list-group">
							<?php foreach($coment as $c): ?>
								<li class="list-group-item">
									<div class="row">
										<div class="col-md-3">
											<center><span class="glyphicon glyphicon-user avatar" style=""></span>
											<div class="avatar_desc"> प्रतिक्रिया दिने<br><span style="color:black;"><?=$c['user']; ?></span></div></center>
										</div>
										<div class="col-md-9">
											<div class="review_description">
												<div class="review_header">
													<div class="row">
														<div class="col-md-10">
															<div style="padding-top: 0px;" class="rateit" data-rateit-value="<?=$c['rating']; ?>" data-rateit-ispreset="true" data-rateit-readonly="true"></div> (<?=$c['rating']; ?>)
															<span style="color:grey;"> केहि समय अगाडी</span>
														</div>
														<div class="col-md-2">
															<span class="glyphicon glyphicon-thumbs-up"></span> &nbsp; 
															<span class="glyphicon glyphicon-thumbs-down"></span>
														</div>
													</div>
												</div>
												<div class="review_body">
													<?=$c['text']; ?>
												</div>
											</div>
										</div>
									</div>
								</li>
							<?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-body">
							<img class="img img-responsive img-thumbnail img-circle" src="<?=base_url('img/owl1.jpg'); ?>">
							<center>
								<div style="padding-top: 7px;" class="rateit" data-rateit-value="<?=$rate; ?>" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
								<div class="review_no"><?=$rate; ?> प्रतिक्रिया <?=$total_rate; ?> बाट</div>
							</center>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-body">
							<table class="review_chart">
								<tr><th>sortOrder</th><th>value</th><th>color</th><th>description</th></tr>
								<tr><td>5</td><td>10</td><td>red</td><td>५ तारा</td></tr>
								<tr><td>2</td><td>40</td><td>blue</td><td>४ तारा</td></tr>
								<tr><td>3</td><td>50</td><td>green</td><td>३ तारा</td></tr>
								<tr><td>1</td><td>70</td><td>black</td><td>२ तारा</td></tr>
								<tr><td>4</td><td>15</td><td>greenyellow</td><td>१ तारा</td></tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php endforeach; ?>




<script src="https://code.jquery.com/jquery-3.0.0.min.js" integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=" crossorigin="anonymous"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets/js/jquery.chart.js'); ?>"></script>
<script src="<?=base_url('assets/js/custom.js'); ?>"></script>
<script src="<?=base_url('assets/js/jquery.rateit.min.js'); ?>"></script>


<script type="text/javascript">
	 $("#rate_it").click(function(e) {
	 	e.preventDefault();
  	$("#review_panel").slideToggle();
  });
	 $(".review_chart").donutChart();
	 $("#rate1").bind('rated', function (event, value) { rate1 = value; });
	 $("#rate2").bind('rated', function (event, value) { rate2 = value; });
	 $("#rate3").bind('rated', function (event, value) { rate3 = value; });
	 $(document).on("click","#submit_review", function() {
	 	
	 });

	 $(document).on("click","#rate1,#rate2,#rate3", function() {
	 	rate = Number(rate1) + Number(rate2) + Number(rate3);
	 	if(rate) {
	 			$("#review_info").slideDown();
	 			$("[name=rate]").attr("value",Math.round(rate/3 * 100) / 100);
	 		} else {
	 			$("#review_info").slideUp();
	 		}
	 });


</script>
</html>