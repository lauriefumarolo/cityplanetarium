$(document).ready(function() {
	// helper function that initializes Google map of location
	function initializeMap() {
		// get map point with latitude and longitude
		var mapPoint = new google.maps.LatLng(41.8663805, -87.6068281);

		// create map and show in #map-canvas
		var map = new google.maps.Map(document.getElementById('map-canvas'), {
			center: mapPoint,
			zoom: 17,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		});

		// create marker that shows address
		var marker = new google.maps.Marker({
			position: mapPoint,
			map: map,
			title: "City Planetarium"
		});
	}

	// initialize map
	google.maps.event.addDomListener(window, 'load', initializeMap);
});
