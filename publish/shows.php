<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<!-- Prevents zoomed-out look on mobile devices -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<title>City Planetarium | Shows</title>

<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/styles.css" rel="stylesheet" type="text/css">

<!--[if lt IE 9]>
<script src="js/html5shiv.min.js"></script>
<![endif]-->
<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/scripts.js" type="text/javascript"></script>
</head>
<body>
<div class="main-wrapper">
	<header>
		<?php include 'header.php' ?>
	</header>
	<div class="container-fluid content-container side-margins">
		<div class="clearfix">
			<h2>Shows</h2>
		</div>
		<div class="row top-bottom-margin">
			<div class="col-sm-4">
				<img class="img-responsive img-shows-exhibits" src="images/nasaHistory.jpg" alt="Footprint on the Moon" />
			</div>
			<div class="col-sm-8">
				<h3>NASA's History</h3>
				<p><abbr title="National Aeronautics and Space Administration">NASA</abbr> is the United States government agency in charge of space exploration and aeronautics and aerospace research.</p>
				<p>Shows run every weekday at 10:00pm and 1:00pm.</p>
			</div>
		</div>
		<div class="clearfix">
			<hr />
		</div>
		<div class="row top-bottom-margin">
			<div class="col-sm-4">
				<img class="img-responsive img-shows-exhibits" src="images/moon.jpg" alt="Moon Landing" />
			</div>
			<div class="col-sm-8">
				<h3>To The Moon And Back</h3>
				<p>What does it take to be an astronaut? How would you train to travel all the way to the moon? Find out in this special show!</p>
				<p>Shows run every weekday at 12:30pm and 2:00pm.</p>
			</div>
		</div>
		<div class="clearfix">
			<hr />
		</div>
		<div class="row top-bottom-margin">
			<div class="col-sm-4">
				<img class="img-responsive img-shows-exhibits" src="images/jupiter.jpg" alt="Jupiter" />
			</div>
			<div class="col-sm-8">
				<h3>Jupiter</h3>
				<p>Come learn about the largest planet in our solar system and its big, red spot.</p>
				<p>Shows run every weekday at 2:30pm.</p>
			</div>
		</div>
		<div class="clearfix">
			<hr />
		</div>
		<div class="row top-bottom-margin">
			<div class="col-sm-4">
				<img class="img-responsive img-shows-exhibits" src="images/cygnus.jpg" alt="Cygnus" />
			</div>
			<div class="col-sm-8">
				<h3>Summer Constellations</h3>
				<p>There are 17 constellations that appear in Earth's night sky during the Summer months. The most famous include: Sagittarius, Cygnus, Lyra, and Aquarius.</p>
				<p>Shows run every weekday at 1:00pm and 4:00pm.</p>
			</div>
		</div>
	</div>
	<footer>
		<?php include 'footer.php' ?>
	</footer>
</div>
</body>
</html>
