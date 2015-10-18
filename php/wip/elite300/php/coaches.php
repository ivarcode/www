<!--
Author: Camden I. Wagner
File: coaches.php
-->

<!DOCTYPE html>
<html>
	<head>
		<!-- Website Title & Description -->
		<title>Coaches</title>
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

			<div class="row" id="coach_list">
				<div class="col-sm-12" id="coaches">
					<h3>Rudy Fuller</h3>
					<img src="http://placehold.it/100" class="pull-left" id="coach-bio">
					<p>The James C. Gentle Head Coach of Men’s Soccer, Rudy Fuller enters his 18th season at the helm of the University of Pennsylvania men’s soccer program in 2015. In his tenure at Penn, Fuller has elevated the Quakers’ notoriety in the Ivy League and nationally. From renovating Rhodes Field to recruiting some of the </p>
				</div>
				<div class="col-sm-12" id="coaches">
					<h3>Keith Tabatznik</h3>
					<img src="http://placehold.it/100" class="pull-left" id="coach-bio">
					<p>In 1994, Keith was named the South Atlantic Region and BIG EAST Coach of the Year after leading the Hoyas to an incredible 18-4 record and the school's first-ever berth in the NCAA Championship as well as its first BIG EAST Regular Season Title. Thirteen former Hoyas have become professional players.</p><p>In addition to taking </p>
				</div>
				<div class="col-sm-12" id="coaches">
					<h3>Eric Wagner</h3>
					<img src="./img/ewagner.jpg" class="pull-left" id="coach-bio">
					<p>Eric Wagner took over the Garnet soccer program in 2002, transforming the team in short order. In 13 seasons, Wagner's teams have posted a 159-73-32 record, and have had 16 postseason tournament appearances.</p><p>In 2013, Swarthmore captured its third ECAC championship and posted an undefeated home ledger of 9-0-3 at Clothier Field.</p><p>Named Centennial Conference Coach of the Year in 2012, </p>
				</div>
			</div>

			<div class="carousel slide" id="slideshow">
			</div><!-- end slideshow -->

			<div class="row" id="info">
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
