$(document).ready(function() {
	// hide success message
	$('.alert').hide();

	// when user submits form, show or hide success message
	$('form').validator().on('submit', function (e) {
		if (e.isDefaultPrevented()) {
			$('.alert').hide();
		} else {
			e.preventDefault();
			
			// user submitted valid form
			// show success message
			$('.alert').show();

			// clear form
			$('form')[0].reset();
		}
	});
});
