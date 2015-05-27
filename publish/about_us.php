<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<!-- Prevents zoomed-out look on mobile devices -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<title>City Planetarium | About Us</title>

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
		<div class="row content-row">
			<div class="col-sm-3">
				<?php include 'sidebar.php' ?>
			</div>
			<div class="col-sm-8 content-col">
				<div class="clearfix">
					<h2>About Us</h2>
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
					<h2>Come Visit Us</h2>
					<div class="col-sm-12 embed-responsive embed-responsive-16by9">
						<!-- Google map of planetarium location -->
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2971.230801056126!2d-87.6068281!3d41.866380500000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2c9d42b46935%3A0x4fe61de107e3c4ab!2s1300+S+Lake+Shore+Dr%2C+Chicago%2C+IL+60605!5e0!3m2!1sen!2sus!4v1432679251654" frameborder="0"></iframe>
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
