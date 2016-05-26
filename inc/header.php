<!DOCTYPE html>
<html>
<head>
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="main">
		<header>
			<div class="container-fluid">
				<div class="col-md-2">
					<!-- <img class="logo" src="img/logo.png"> -->
					<div class="logo">
						Edu<span class="green">Cash</span>
					</div>
				</div>
				<div class="col-md-10">
				<!-- NAVIGATION BAR -->
					<nav>
						<ul class="leftnav pull-left">
							<?php
								$menuItems = array(
									"Home"=>"index.php",
									"About Us"=>"about.php?a=b",
									"Contact Us"=>"contact.php"
								);
								foreach($menuItems as $pageName=>$link)
								{
									$currentUrl = !empty($_SERVER['QUERY_STRING'])? $_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING']: $_SERVER['PHP_SELF'];
									if("/".$link == $currentUrl)
										echo "<li><a class=\"active\" href=\"".$link."\">".$pageName."</a></li>";
									else
										echo "<li><a href=\"".$link."\">".$pageName."</a></li>";
								}
							 ?>
						</ul>
						<ul class="rightnav pull-right">
							 <li>
								<input class="search" type="search" placeholder="&#xf002; Search.....">
							</li>
							<li>
								<a href="login.php">
								<button class="btn-login">LOGIN</button>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>