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

			
			<center><img src="./img/logo.png"></center>
			<p></p>
			
			<!--<center><h1><i>Elite 300 Soccer Academy</i></h1></center>-->

			<center><a href="https://thriva.activenetwork.com/Reg4/Form.aspx?IDTD=3707797&RF=11711005"><button type="" name="register" style="background: url(./img/register_button300x75.png); width:300px; height:75px; border:none;"></button></a></center>
			<center><h4>Session 1: July 02 - 06, 2016</h4></center>
			<center><h4>Session 2: July 06 - 10, 2016</h4></center>

			<center><h3>The Elite 300 Soccer Academy is the premier training camp in the country for high school boys.  The renowned staff includes some of the nation&rsquo;s top college coaches, from some of the top college and university soccer program in the country.</h3></center>
			<center><h3>If you aspire to play at the college level, this is the best program for you.</h3></center>

			<hr>

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

			<!--
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
		-->

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
