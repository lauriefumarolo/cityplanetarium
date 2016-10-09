<!DOCTYPE html>
<html lang="en">
<head>
	<title>City Planetarium | About Us</title>
	<?php include 'head_section.php' ?>
	<?php include 'analytics.php' ?>
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
<script src="js/map_scripts.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAyKDbrNQg8jrmalgOlX27ZK_rWXTdKlZ8&callback=initMap" async defer></script>
</body>
</html>
