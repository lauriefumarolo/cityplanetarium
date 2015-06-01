$(document).ready(function() {
	// if the window is not mobile-size and the user is scrolled above the banner quote, show transparent navbar
	function addRemoveTransparent() {
		if ($(window).width() > 753 && $(this).scrollTop() <= 180) {
			$("nav").addClass("navbar-index");
		} else {
			$("nav").removeClass("navbar-index");
		}
	}

	addRemoveTransparent();

	// make the navbar transparent unless the user has scrolled down to the top of the banner quote
	// if the user scrolls back up from that point, make the navbar transparent again
	$(window).scroll(function() {
		// add animation class, if not already added
		// this will make the transition from transparent nav to black nav smoother
		if (!$("nav").hasClass("navbar-transition")) {
			$("nav").addClass("navbar-transition");
		}

		addRemoveTransparent();
	});

	// for the desktop, when the user resizes the screen to mobile-size
	$(window).resize(function() {
		// add animation class, if not already added
		// this will make the transition from transparent nav to black nav smoother
		if (!$("nav").hasClass("navbar-transition")) {
			$("nav").addClass("navbar-transition");
		}

		addRemoveTransparent();
	});
});
