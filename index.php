<!--
Author: Camden I. Wagner
File: index.php
-->

<!DOCTYPE html>
<html>
	<head>
		<!-- Website Title & Description -->
		<title>ivarcode.net</title>
		<meta name="description" content="">
		
		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!-- Bootstrap CSS -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="includes/css/bootstrap-glyphicons.css" rel="stylesheet">
		
		<!-- Custom CSS -->
		<link href="includes/css/styles.css" rel="stylesheet">
		
		<!-- Include Modernizr in the head, before any other Javascript -->
		<script src="includes/js/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
		<div class="background">
		<!-- Layout -->
		<div class="container" id="main">

			<?php include './php/header.php';?>

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
							<h4>SITE UNDER CONSTRUCTION</h4> <!-- CHANGE BACK TO "Computer Science" -->
							<p>Software development is one of my interests and one of my strongest skills.  I code everything from websites to videogames and enjoy working with other people to create new and exciting projects.</p>
						</div>
					</div>
					<div class="item" id="slide2">
						<div class="carousel-caption">
							<h4>SITE UNDER CONSTRUCTION</h4> <!-- CHANGE BACK TO "Competitive Chess" -->
							<p>I have been playing chess since a very young age and have always thoroughly enjoyed it.  I currently manage multiple chess clubs for children and kids my own age, as well as compete in national tournaments whenever I have the time.</p>
						</div>
					</div>
					<div class="item" id="slide3">
						<div class="carousel-caption">
							<h4>SITE UNDER CONSTRUCTION</h4> <!-- CHANGE BACK TO "Outdoors" -->
							<p>I greatly value the time I spend outdoors as well.  I play soccer, I run distance road races, and enjoy camping or hiking mountains.</p>
						</div>
					</div>
				</div><!-- end carousel-inner -->

				<!-- Controls -->
				<a class="left carousel-control" data-slide="prev" href="#slideshow"><span class="icon-prev"></span></a>
				<a class="right carousel-control" data-slide="next" href="#slideshow"><span class="icon-next"></span></a>
			
			</div><!-- end slideshow -->


			<hr>


			<div class="row" id="bigCallout">

			</div><!-- end bigCallout -->

	
			<div class="row" id="featuresHeading">

			</div><!-- end featuresHeading -->

	
			<div class="row" id="features">

			</div><!-- end features -->

	
			<div class="row" id="info">
				<div class="col-sm-6">
					<h2>About Me</h2>
					<div class="tabbable">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab1" data-toggle="tab">Personal Information</a></li>
							<li><a href="#tab2" data-toggle="tab">Contact Information</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab1">
								<h3><span class="glyphicon glyphicon-map-marker"></span> My Location</h3>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5987.514749434334!2d-72.1040349!3d41.3793558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e60dd0f1aaa525%3A0xdcead620e7196159!2sConnecticut+College!5e0!3m2!1sen!2sus!4v1435781790532" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
								<p>I am enrolled at Connecticut College (Class of 2019) in New London, CT starting the Fall of 2015.  I lived in Swarthmore, PA for the majority of my childhood and schooling.</p>
							</div><!-- end tab1 -->
							<div class="tab-pane" id="tab2">
								<h3><span class="glyphicon glyphicon-user"></span> My Profile</h3>
								<p><strong>Camden Wagner || Coder - Chess Player - Entrepreneur</strong></p>
								<img src="http://placehold.it/140" class="thumbnail pull-left">
								<p> <span class="glyphicon glyphicon-envelope"></span>   camden.i.wagner@ivarcode.net </p>
								<p> <span class="glyphicon glyphicon-phone"></span>   c: (610)-999-0946 </p>
								<p> <span class="glyphicon glyphicon-link"></span>   GitHub: <a href="https://github.com/awesomemancam">https://github.com/awesomemancam</a> </p>
							</div><!-- end tab1 -->
						</div><!-- end tab-content -->
					</div><!-- end tabbable -->
				</div><!-- end col-sm-6 -->

				<div class="col-sm-6">
					<h2>My Activities</h2>
					<p>What exactly is it that I do regarding computers and chess? On this site you will find information about those things, but to make things simple, I made a list of some of the most impressive projects or contributions I have made.  Here are links to some of my projects and activity in the chess and coding world.</p>
					<h3>Projects</h3>
					<div class="list-group">
						<a href="./php/net_ivarcode.php" class="list-group-item">
							<h4 class="list-group-item-heading">ivarcode.net</h4>
							<p class="list-group-item-text">Personal website I created to profile myself</p>
						</a>
						<a href="./php/miners_deluxe_mod.php" class="list-group-item">
							<h4 class="list-group-item-heading">Miners Deluxe Mod</h4>
							<p class="list-group-item-text">PC Game Mod for the popular videogame Minecraft</p>
						</a>
						<a href="./php/message_encrypter.php" class="list-group-item">
							<h4 class="list-group-item-heading">Message Encrypter Android App</h4>
							<p class="list-group-item-text">Android App that encrypts and decrypts messages</p>
						</a>
						<a href="./php/cryptography.php" class="list-group-item">
							<h4 class="list-group-item-heading">Cryptography Program</h4>
							<p class="list-group-item-text">Java code written to encrypt and decrypt ciphers</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Music Multiplayer App</h4>
							<p class="list-group-item-text">Music based Web or Android App currently in the early development stages - working with Jeremy Bader</p>
						</a>
					</div><!-- end list-group -->
					<h3>Chess</h3>
					<div class="list-group">
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Competitive USCF Tournaments</h4>
							<p class="list-group-item-text">National Chess Competition in the United States</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Private Tutoring</h4>
							<p class="list-group-item-text">Chess Tutoring to make money for college</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Clubs</h4>
							<p class="list-group-item-text">Several different clubs for various reasons</p>
						</a>
					</div><!-- end list-group -->
					<p><!-- null --></p>
				</div><!-- end col-sm-6 -->
			</div><!-- end info -->


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

