<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<!-- Prevents zoomed-out look on mobile devices -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<title>City Planetarium</title>

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
<link href="css/styles.css" rel="stylesheet" type="text/css">

<!--[if lt IE 9]>
<script src="js/html5shiv.min.js"></script>
<![endif]-->
<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="plugins/parallax/parallax.min.js" type="text/javascript"></script>
<script src="js/scripts.js" type="text/javascript"></script>
</head>
<body>
<div class="main-wrapper">
	<header>
		<?php include 'header.php' ?>
	</header>
	<div class="container-fluid content-container">
		<div class="parallax-window row" data-parallax="scroll" data-image-src="images/banner.jpg">
			<div class="banner-quote">
				<h1>Mystery creates wonder and wonder is the basis of man's desire to understand.</h1>
				<h1>-Neil Armstrong</h1>
			</div>
		</div>

		<div class="row content-row">
			<div class="col-sm-3">
				<?php include 'sidebar.php' ?>
			</div>
			<div class="col-sm-8 content-col">
				<div class="clearfix">
					<h2>Visit City Planetarium</h2>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<img class="img-responsive" src="images/planetarium.jpg" alt="City Planetarium" />
					</div>
					<div class="col-sm-8">
						<h4>Illinois' Largest Planetarium!</h4>
						<p>City Planetarium was built in 1977 for the purpose of presenting educational and entertaining shows about astronomy and the night sky. Our recently renovated Star Theater seats 350 people and contains the most advanced technology for giving our viewers the clearest images.</p>
						<p>No matter what your interest is, our website will provide you with every resource you need to plan your visit.</p>
					</div>
				</div>
				<div class="clearfix">
					<hr />
					<h2>New Horizons Exhibit</h2>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<img class="img-responsive" src="images/pluto.jpg" alt="New Horizons Exhibit" />
					</div>
					<div class="col-sm-8">
						<h4>Pluto</h4>
						<p>New Horizons has launched and is nearing its destination, Pluto. Come learn all about the probe, its mission, and the mysterious dwarf-planet.</p>
						<p>Learn more about <a href="exhibits.php">New Horizons</a>.</p>
					</div>
				</div>
				<div class="clearfix">
					<hr />
					<h2>Admission &amp; Passes</h2>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<p class="bg-primary text-center text-uppercase">All Access Pass</p>
						<p>Enjoy VIP access to all of our exhibits and unlimited shows.</p>
						<p>Visitors will also be given priority seating.</p>
						<p class="price">$75 Adult/$55 Child</p>
						<button type="button" class="btn btn-primary">Buy</button>
					</div>
					<div class="col-sm-4">
						<p class="bg-primary text-center text-uppercase">Limited Pass</p>
						<p>Get unlimited access to all of our exhibits and admission to one show.</p>
						<p>The Limited Pass also includes one month's dues to the Stargazer's Club.</p>
						<p class="price">$50 Adult/$30 Child</p>
						<button type="button" class="btn btn-primary">Buy</button>
					</div>
					<div class="col-sm-4">
						<p class="bg-primary text-center text-uppercase">Basic Pass</p>
						<p>Get unlimited access to all of our exhibits.</p>
						<p>The Basic Pass also includes admission to one show.</p>
						<p class="price">$25 Adult/$15 Child</p>
						<button type="button" class="btn btn-primary">Buy</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<?php include 'footer.php' ?>
	</footer>
</div>
</body>
</html>
