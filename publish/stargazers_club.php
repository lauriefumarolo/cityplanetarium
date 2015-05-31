<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<!-- Prevents zoomed-out look on mobile devices -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<title>City Planetarium | Stargazer's Club</title>

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
			<h2>Stargazer's Club</h2>
		</div>
		<div class="row top-bottom-margin">
			<div class="col-sm-6">
				<img class="img-responsive" src="images/stargazers_club.jpg" alt="Night Sky" />
			</div>
			<div class="col-sm-6">
				<p class="stargazers-info top-bottom-margin">The City Planetarium Stargazer's Club is a members-only club that meets once a month to study the constellations in the night sky. An employee of the planetarium is always present to point out the current constellations, stars, and planets. Food and drink is provided!</p>
				<p class="stargazers-info top-bottom-margin">Registration is open to people of all ages! Sign up today!</p>
				<button type="button" class="btn btn-primary stargazers-info top-bottom-margin">Become a Member</button>
			</div>
		</div>
	</div>
	<footer>
		<?php include 'footer.php' ?>
	</footer>
</div>
</body>
</html>
