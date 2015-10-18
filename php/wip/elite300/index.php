<!--
Author: Camden I. Wagner
File: index.php
-->

<!DOCTYPE html>
<html>
	<head>
		<!-- Website Title & Description -->
		<title>elite300.com</title>
		<meta name="description" content="">

		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Bootstrap CSS -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="includes/css/bootstrap-glyphicons.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="includes/css/styles.css" rel="stylesheet">

		<!-- including FireBase script -->
		<script src="https://cdn.firebase.com/js/client/2.2.9/firebase.js"></script>

		<!-- Include Modernizr in the head, before any other Javascript -->
		<script src="includes/js/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
		<div class="background">
		<!-- Layout -->
		<div class="container" id="main">

			<?php include './php/header.php';?>

			<hr>
			<hr>

			<!-- TODO -->
			<h1><center>Elite 300 Soccer Academy</center></h1>
			<center><h4>July 2nd-6th  2015</h4></center>
			<center><h4>July 6th-10th 2015</h4></center>

			<center><a href="http://google.com"><button type="" name="register" style="background: url(./img/register_button300x75.png); width:300px; height:75px; border:none;"></button></a></center>

			<div class="carousel slide" id="slideshow">

				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#slideshow"></li>
					<li data-slide-to="1" data-target="#slideshow"></li>
					<li data-slide-to="2" data-target="#slideshow"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active" id="slide1">
						<div class="carousel-caption">
							<h3>Train with and compete against serious talent from around the country</h3>
							<p></p>
						</div>
					</div>
					<div class="item" id="slide2">
						<div class="carousel-caption">
							<h3>Be seen by some of America's top soccer coaches</h3>
							<p></p>
						</div>
					</div>
					<div class="item" id="slide3">
						<div class="carousel-caption">
							<h3>Experience the collegiate training and playing atmosphere that our first-rate coaching staff creates</h3>
							<p></p>
						</div>
					</div>
				</div><!-- end carousel-inner -->

				<!-- Controls -->
				<a class="left carousel-control" data-slide="prev" href="#slideshow"><span class="icon-prev"></span></a>
				<a class="right carousel-control" data-slide="next" href="#slideshow"><span class="icon-next"></span></a>

			</div><!-- end slideshow -->

			<hr>

			<center><h2>Elite 300 Soccer Academy</h2></center>
			<center><h4>The Elite 300 Soccer Academy is an multiple day, overnight soccer camp.... Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec accumsan neque eu consectetur cursus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam non velit nibh. Vivamus ut diam at lorem semper feugiat. Donec tristique felis non purus interdum convallis at sit amet sem. Quisque sagittis dolor in suscipit ultrices. Ut elementum orci risus, eu molestie nisi laoreet sit amet. Proin bibendum magna mi, ac consectetur tortor euismod et. Donec venenatis, tortor nec tincidunt ullamcorper, augue ligula aliquam sem, vel finibus velit nisi in purus.</h4></center>

			<div class="row" id="info">
				<div class="col-sm-4">
					<h3><center>Jonny Dolezal</center></h3>
					<center><img src="http://placehold.it/200"></center>
					<p>2009 Elite 300 All-Star
						<br>Penn '14
						<br>2013 Ivy League Champion
						<br>All-Ivy League
						<br>Penn Men's Soccer Captain</p>
				</div>
				<div class="col-sm-4">
					<h3><center>Antoine Hoppenot</center></h3>
					<center><img src="http://placehold.it/200"></center>
					<p>2007 Elite 300 All-Star
						<br>Princeton
						<br>2010 Ivy League Player of the Year
						<br>Philadelphia Union (MLS)</p>
				</div>
				<div class="col-sm-4">
					<h3><center>Tobi Olopade</center></h3>
					<center><img src="http://placehold.it/200"></center>
					<p>2007 Elite 300 All-Star
						<br>Penn '11
						<br>St. Paul's School (NH)
						<br>2008 Ivy League Champion
						<br>Penn Men's Soccer Captain</p>
				</div>
				<div class="col-sm-4">
					<h3><center>Ben Berg</center></h3>
					<center><img src="http://placehold.it/200"></center>
					<p>2006 Elite 300 All-Star
						<br>Penn '11
						<br>2008 Ivy League Champion
						<br>All-Ivy League</p>
				</div>
				<div class="col-sm-4">
					<h3><center>Ike Opara</center></h3>
					<center><img src="http://placehold.it/200"></center>
					<p>2006 Elite 300 All-Star
						<br>Wake Forest
						<br>NSCAA All-American
						<br>US U-20 National Team
						<br>Sporting KC (MLS)</p>
				</div>
				<div class="col-sm-4">
					<h3><center>Ema Boateng</center></h3>
					<center><img src="http://placehold.it/200"></center>
					<p>2008 Elite 300 All-Star
						<br>UC Santa Barbara
						<br>Helsingborgs IF (Swedish Premier League)</p>
				</div>
			</div>


		</div><!-- end container -->

		</div><!--end background -->

		<?php include './php/footer.php';?>

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
