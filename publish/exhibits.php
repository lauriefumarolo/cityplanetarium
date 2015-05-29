<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<!-- Prevents zoomed-out look on mobile devices -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<title>City Planetarium | Exhibits</title>

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
	<div class="container-fluid content-container">
		<div class="clearfix">
			<h2>Exhibits</h2>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<img class="img-responsive" src="images/pluto.jpg" alt="New Horizons" />
			</div>
			<div class="col-sm-8">
				<h4>New Horizons</h4>
				<p>New Horizons has launched and is nearing its destination, Pluto.</p>
				<p>Come learn all about the probe, its mission, and the mysterious dwarf-planet.</p>
			</div>
		</div>
		<div class="clearfix">
			<hr />
		</div>
		<div class="row">
			<div class="col-sm-4">
				<img class="img-responsive" src="images/spaceStation.jpg" alt="International Space Station" />
			</div>
			<div class="col-sm-8">
				<h4>International Space Station</h4>
				<p>The <abbr title="International Space Station">ISS</abbr> is the largest artificial body in orbit. It is a roving space lab where astronauts conduct experiments in everything from astronomy to worms.</p>
				<p>Learn more about these experiments and the scientists who run them.</p>
			</div>
		</div>
		<div class="clearfix">
			<hr />
		</div>
		<div class="row">
			<div class="col-sm-4">
				<img class="img-responsive" src="images/sallyRide.jpg" alt="Sally Ride" width="200px" />
			</div>
			<div class="col-sm-8">
				<h4>Sally Ride</h4>
				<p>Sally Ride was the first woman in space, but did you know that she is also the youngest American astronaut to date?</p>
				<p>Learn more about this amazing woman during the month of June.</p>
			</div>
		</div>
		<div class="clearfix">
			<hr />
		</div>
		<div class="row">
			<div class="col-sm-4">
				<img class="img-responsive" src="images/halleysComet.jpg" alt="Halley's Comet" width="300px" />
			</div>
			<div class="col-sm-8">
				<h4>Halley's Comet</h4>
				<p>Halley's Comet is only visible from Earth every 75-76 years. The last time it orbited Earth was in 1986. It is composed of water, carbon dioxide, ammonia, and dust.</p>
				<p>Come learn about this piece of space ice.</p>
			</div>
		</div>
	</div>
	<footer>
		<?php include 'footer.php' ?>
	</footer>
</div>
</body>
</html>
