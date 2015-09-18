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

			<hr>
			<hr>

			<div class="row" id="info">
				<div class="col-sm-12">
					<h1><center>Camden I. Wagner</center></h1>
				</div>
			</div>

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

			<div class="row" id="info">
				<div class="col-sm-12">
					<h2><center>About Me</center></h2>
					<h4><center>Hi, my name is Camden Wagner and I am an 18 year old freshman (Class of 2019) at Connecticut College.  I am majoring in Computer Science with studies also in the Business and Economics fields.  I have significant coding experience in languages including Java, C, C++, HTML, PHP, CSS, Python, XML and more - several of my projects are detailed below.  Chess is my favorite hobby; I have played in many tournaments (also detailed below), run and participate in many chess clubs, and play online daily.  Other than that, I enjoy playing soccer and running, and I like to play PC games in my downtime.</center></h4>
				</div>
			</div>
			<hr>
			<div class="row" id="workexp">
				<div class="col-sm-12">
					<h2><center>Work Experience</center></h2>
					<h4><center>I am currently (Fall 2015) working two federal work study jobs on Connecticut College's campus.  The IT Service Desk on campus is one, where I diagnose and solve problems that students, faculty, or staff have with their devices whether that be personal computers, cell phones, or campus owned equipment.  I also work in the Network and Systems department as a Network Technician, repairing and managing the network on campus.  I have given one on one chess lessons as well, since the summer of 2015.  Lastly, I barbacked at a bar nearby my hometown while in high school.</center></h4>
				</div>
			</div>

			<hr>
	
			<div class="row" id="info">
				<div class="col-sm-6">
					<h2>Projects</h2>
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
				<div class="col-sm-6">
					<h2>Chess</h2>
					<p>I have played chess as a hobby since I learned the game when I was 5 years old.  I play online as well as compete in national tournaments.  I also enjoy running and participating in chess clubs at my school or in my community.</p>
					<h3>Tournaments - USCF 1449</h3>
					<p>since March 2013</p>
					<div class="list-group">
						<a href="http://www.uschess.org/msa/XtblMain.php?201504268922.6-13599730" class="list-group-item">
							<h4 class="list-group-item-heading">24th Annual Eastern Class Championships (MA)</h4>
							<p class="list-group-item-text">04/24/2015 - 04/26/2015   CLASS D</p>
						</a>
						<a href="http://www.uschess.org/msa/XtblMain.php?201504050382.6-13599730" class="list-group-item">
							<h4 class="list-group-item-heading">Philadelphia Open (PA)</h4>
							<p class="list-group-item-text">04/01/2015 - 04/05/2015   UNDER 1400</p>
						</a>
						<a href="http://www.uschess.org/msa/XtblMain.php?201501199852.5-13599730" class="list-group-item">
							<h4 class="list-group-item-heading">47th Annual Liberty Bell Open (PA)</h4>
							<p class="list-group-item-text">01/16/2015 - 01/19/2015   UNDER 1500	</p>
						</a>
						<a href="http://www.uschess.org/msa/XtblMain.php?201403166162.7-13599730" class="list-group-item">
							<h4 class="list-group-item-heading">Eastern Class Championships (MA)</h4>
							<p class="list-group-item-text">03/14/2014 - 03/16/2014   CLASS E</p>
						</a>
						<a href="http://www.uschess.org/msa/XtblMain.php?201303173392.7-13599730" class="list-group-item">
							<h4 class="list-group-item-heading">Eastern Class Championships (MA)</h4>
							<p class="list-group-item-text">03/15/2013 - 03/17/2013   CLASS E</p>
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

