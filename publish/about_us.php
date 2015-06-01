<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<!-- Prevents zoomed-out look on mobile devices -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<!-- Favicon -->
<?php include 'favicon_links.php' ?>

<title>City Planetarium | About Us</title>

<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/styles.css" rel="stylesheet" type="text/css">

<!--[if lt IE 9]>
<script src="js/html5shiv.min.js"></script>
<![endif]-->
<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js" type="text/javascript"></script>
<script src="js/map_scripts.js" type="text/javascript"></script>
</head>
<body>
<div class="main-wrapper">
	<header>
		<?php include 'header.php' ?>
	</header>
	<div class="container-fluid content-container side-margins">
		<h2>About Us</h2>
		<img class="img-responsive" src="images/planetarium.jpg" alt="City Planetarium" />
		<h3 class="h3-margin-top">Illinois' Largest Planetarium!</h3>
		<p>City Planetarium was built in 1977 for the purpose of presenting educational and entertaining shows about astronomy and the night sky. Our recently renovated Star Theater seats 350 people and contains the most advanced technology for giving our viewers the clearest images.</p>
		<p>No matter what your interest is, our website will provide you with every resource you need to plan your visit.</p>
		<hr class="margin-hr" />
		<h2>Come Visit Us</h2>
		<div id="map-canvas"></div>
	</div>
	<footer>
		<?php include 'footer.php' ?>
	</footer>
</div>
</body>
</html>
