<!DOCTYPE html>
<html lang="en">
<head>
	<title>City Planetarium | Contact Us</title>
	<?php include 'head_section.php' ?>
	<script src="js/validator.min.js" type="text/javascript"></script>
	<script src="js/contact_us_scripts.js" type="text/javascript"></script>
	<?php include 'analytics.php' ?>
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
				<label for="inputEmail" class="control-label">Email</label>
				<input type="email" id="inputEmail" class="form-control" placeholder="Email" data-error="This email address is invalid." required>
				<div class="help-block with-errors"></div>
			</div>
			<div class="form-group">
				<label for="comments" class="control-label">Comments</label>
				<textarea id="comments" class="form-control" rows="5" placeholder="Comments" required></textarea>
				<div class="help-block with-errors"></div>
			</div>
			<button type="submit" class="btn btn-primary pull-right">Submit</button>
		</form>
		<hr />
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
