<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<!-- Prevents zoomed-out look on mobile devices -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<title>City Planetarium | Contact Us</title>

<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/styles.css" rel="stylesheet" type="text/css">

<!--[if lt IE 9]>
<script src="js/html5shiv.min.js"></script>
<![endif]-->
<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="plugins/validator/validator.min.js" type="text/javascript"></script>
<script src="js/contact_us_scripts.js" type="text/javascript"></script>
</head>
<body>
<div class="main-wrapper">
	<header>
		<?php include 'header.php' ?>
	</header>
	<div class="container-fluid content-container side-margins">
		<h2>Contact Us</h2>
		<div class="alert alert-success">
			<strong>Success!</strong> Thank you for your comments! We will get back to you as soon as possible.
		</div>
		<form role="form" data-toggle="validator">
			<div class="form-group">
				<label for="inputEmail">Email</label>
				<input type="email" id="inputEmail" class="form-control" placeholder="Email" data-error="This email address is invalid." required>
				<div class="help-block with-errors"></div>
			</div>
			<div class="form-group">
				<label for="comments">Comments</label>
				<textarea id="comments" class="form-control" rows="5" placeholder="Comments" required></textarea>
				<div class="help-block with-errors"></div>
			</div>
			<button type="submit" class="btn btn-primary pull-right">Submit</button>
		</form>
		<hr />
		<h2>Come Visit Us</h2>
		<div class="embed-responsive embed-responsive-16by9">
			<!-- Google map of planetarium location -->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2971.230801056126!2d-87.6068281!3d41.866380500000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2c9d42b46935%3A0x4fe61de107e3c4ab!2s1300+S+Lake+Shore+Dr%2C+Chicago%2C+IL+60605!5e0!3m2!1sen!2sus!4v1432679251654" frameborder="0"></iframe>
		</div>
	</div>
	<footer>
		<?php include 'footer.php' ?>
	</footer>
</div>
</body>
</html>
