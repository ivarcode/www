<!--
Author: Camden I. Wagner
File: contact.php
-->

<!DOCTYPE html>
<html>
	<head>
		<!-- Website Title & Description -->
		<title>Contact</title>
		<meta name="description" content="">
		
		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!-- Bootstrap CSS -->
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="../includes/css/bootstrap-glyphicons.css" rel="stylesheet">
		
		<!-- Custom CSS -->
		<link href="../includes/css/styles.css" rel="stylesheet">
		
		<!-- including FireBase script -->
		<script src="https://cdn.firebase.com/js/client/2.2.9/firebase.js"></script>

		<!-- Include Modernizr in the head, before any other Javascript -->
		<script src="../includes/js/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
		<div class="background">
		<!-- Layout -->
		<div class="container" id="main">
			
			<?php include './header.php';?>

			<hr>

			<div class="carousel slide" id="slideshow">
			</div><!-- end slideshow -->

			<div class="row" id="info">
				<div class="col-sm-12">
					<h2><center>CONTACT ME</center></h2>
					<p><center>Use the space below to contact me - or email me at <b>camden.i.wagner@ivarcode.net</b></center></p>
					<hr>
					<h3><center>Contact Information</center></h3>
					<center><input type="text" class="form-control" placeholder="Name" id="contact_name"></center>
					<center><input type="text" class="form-control" placeholder="Email Address" id="contact_email"></center>
					<center><input type="text" class="form-control" placeholder="Phone Number (optional)" id="contact_phone"></center>
					<h3><center>Your Inquiry</center></h3>
					<center><textarea rows="5" id="contact_inquiry"></textarea></center>
					<center><button type="submit" class="btn btn-default" id="inquiry_submit"><h4>Send</h4></button></center>
					<hr>
					<!--<img src="img/hs.png" class="thumbnail pull-left">
					<h1>Camden Ivar Wagner</h1>
					<p></p>-->
				</div><!-- end col-sm-12 -->
				<div class="col-sm-6">
					
				</div><!-- end col-sm-6 -->

				<div class="col-sm-6">
					
				</div><!-- end col-sm-6 -->
			</div><!-- end info -->


		</div><!-- end container -->

		</div><!--end background -->

		<?php include './footer.php';?>

		<!-- All Javascript at the bottom of the page for faster page loading -->
		<!-- First try for the online version of jQuery-->
		<script src="http://code.jquery.com/jquery.js"></script>
		<!-- If no online access, fallback to our hardcoded version of jQuery -->
		<script>window.jQuery || document.write('<script src="includes/js/jquery-1.8.2.min.js"><\/script>')</script>
		<!-- Bootstrap JS -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<!-- Custom JS -->
		<script src="includes/js/script.js"></script>

	</body>
</html>


