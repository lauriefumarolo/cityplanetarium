$(document).ready(function() {
	// only run on desktop
	if ($(window).width() > 753) {
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
	}

	// for the desktop, when the user resizes the screen to mobile-size
	$(window).resize(function() {
		if ($(window).width() <= 752) {
			$("nav").removeClass("navbar-index");
		} else {
			$("nav").addClass("navbar-index");
		}
	});
});
