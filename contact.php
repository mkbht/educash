<?php
	$title = "Contact US";
	include 'inc/header.php';
?>
<div class="main">
	<div class="well"><b>Contact Us</b></div>
	<img src="img/map.png" class="img-responsive full">
	<div class="jumbotron">
		<div class="container">	
			<div class="hr"></div>
			<div class="col-md-7">
				<h2>Contact Us</h2>
				Use the contact form below if you have any complaints, suggestions
				or queries.
				<form>
					<div class="col-md-6">
						<b>Name *</b>
						<input type="text" class="form-control">
					</div>
					<div class="col-md-6">
						<b>Email *</b>
						<input type="email" class="form-control">
					</div>
					<div class="col-md-12">
						<b>Website (optional)</b>
						<input type="text" class="form-control">
						<b>Subject *</b>
						<input type="text" class="form-control">
						<b>Message *</b>
						<textarea class="form-control" rows="8"></textarea>
						<br>
						<button class="btn btn-danger pull-right">Send Message</button>
					</div>
				</form>
			</div>
			<div class="col-md-5">
				<h2><i class="fa fa-home"></i> Our Office</h2>
				<b><i class="fa fa-map-marker"></i> Address: </b> Lokanthali-16, Madhyapur Thimi, Bhaktapur<br>
				<b><i class="fa fa-phone"></i> Phone No:</b> 9815925838<br>
				<b><i class="fa fa-envelope-o"></i> Email:</b> contact@educash.com<br>
				<div class="hr"></div>

				<h2><i class="fa fa-clock-o"></i> Business Hours</h2>
				<b>Sunday - Thursday:</b> 6:00 AM - 6:00 PM<br>
				<b>Friday - Saturday:</b> 10:00 AM - 2:00 PM<br>
				<b>Public Holidays: </b> 10:00AM - 1:00 PM
			</div>
		</div>
	</div>
</div>
<?php include 'inc/footer.php'; ?>