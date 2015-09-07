<!--
Author: Camden I. Wagner
File: chess.php
-->

<!DOCTYPE html>
<html>
	<head>
		<!-- Website Title & Description -->
		<title>Chess</title>
		<meta name="description" content="">
		
		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!-- Bootstrap CSS -->
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="../includes/css/bootstrap-glyphicons.css" rel="stylesheet">
		
		<!-- Custom CSS -->
		<link href="../includes/css/styles.css" rel="stylesheet">
		
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
				<div class="col-sm-6">
					<h2>Chess Tutoring</h2>
					<p>Contact me at camden.i.wagner@ivarcode.net if you are interested in chess lessons!</p>
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

