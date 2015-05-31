<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<!-- Prevents zoomed-out look on mobile devices -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<title>City Planetarium</title>

<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/styles.css" rel="stylesheet" type="text/css">

<!--[if lt IE 9]>
<script src="js/html5shiv.min.js"></script>
<![endif]-->
<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="plugins/parallax/parallax.min.js" type="text/javascript"></script>
<script src="js/index_scripts.js" type="text/javascript"></script>
</head>
<body class="index-body">
<div class="main-wrapper">
	<header>
		<?php include 'header.php' ?>
	</header>
	<div class="container-fluid content-container">
		<div class="parallax-window row" data-parallax="scroll" data-image-src="images/banner.jpg">
			<div class="banner-quote">
				<h1 class="text-center">Mystery creates wonder and wonder is the basis of man's desire to understand.</h1>
				<h1 class="text-center">-Neil Armstrong</h1>
			</div>
		</div>
		<div class="clearfix side-margins">
			<h2>Visit City Planetarium</h2>
		</div>
		<div class="row side-margins-index top-bottom-margin">
			<div class="col-sm-4">
				<img class="img-responsive img-shows-exhibits" src="images/planetarium.jpg" alt="City Planetarium" />
			</div>
			<div class="col-sm-8">
				<h3>Illinois' Largest Planetarium!</h3>
				<p>City Planetarium was built in 1977 for the purpose of presenting educational and entertaining shows about astronomy and the night sky. Our recently renovated Star Theater seats 350 people and contains the most advanced technology for giving our viewers the clearest images.</p>
				<p>No matter what your interest is, our website will provide you with every resource you need to plan your visit.</p>
			</div>
		</div>
		<div class="clearfix side-margins">
			<hr />
			<h2>New Horizons Exhibit</h2>
		</div>
		<div class="row side-margins-index top-bottom-margin">
			<div class="col-sm-4">
				<img class="img-responsive img-shows-exhibits" src="images/pluto.jpg" alt="New Horizons Exhibit" />
			</div>
			<div class="col-sm-8">
				<h3>Pluto</h3>
				<p>New Horizons has launched and is nearing its destination, Pluto. Come learn all about the probe, its mission, and the mysterious dwarf-planet.</p>
				<p>Learn more about <a href="exhibits.php">New Horizons</a>.</p>
			</div>
		</div>
	</div>
	<footer>
		<?php include 'footer.php' ?>
	</footer>
</div>
</body>
</html>
