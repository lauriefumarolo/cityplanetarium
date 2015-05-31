$(document).ready(function() {
	// on the home page, set the navbar to be transparent initially
	$("nav").addClass("navbar-index");

	// make the navbar transparent unless the user has scrolled down to the top of the banner quote
	// if the user scrolls back up from that point, make the navbar transparent again
	$(window).scroll(function() {
		// add animation class, if not already added
		// this will make the transition from transparent nav to black nav smoother
		if (!$("nav").hasClass("navbar-transition")) {
			$("nav").addClass("navbar-transition");
		}

		if ($(this).scrollTop() > 180) {
			$("nav").removeClass("navbar-index");
		} else {
			$("nav").addClass("navbar-index");
		}
	});
});
