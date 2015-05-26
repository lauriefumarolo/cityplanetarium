<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<!-- Prevents zoomed-out look on mobile devices -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<title>City Planetarium | Contact Us</title>

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
				<h2>Contact Us</h2>
				<form action="" method="post" class="form-horizontal" role="form" data-toggle="validator">
					<div class="form-group">
						<label for="inputEmail" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" id="inputEmail" class="form-control" placeholder="Email" data-error="This email address is invalid." required>
							<div class="help-block with-errors"></div>
						</div>
					</div>
					<div class="form-group">
						<label for="comments" class="col-sm-2 control-label">Comments</label>
						<div class="col-sm-10">
							<textarea id="comments" class="form-control" rows="5" placeholder="Comments" required></textarea>
							<div class="help-block with-errors"></div>
						</div>
					</div>
					<div class="form-group col-sm-12 control-label">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<footer>
		<?php include 'footer.php' ?>
	</footer>
</div>
</body>
</html>
