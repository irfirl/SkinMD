jQuery(function($) {
	$(document).ready( function() {
	
			// load google map
			var script = document.createElement('script');
			script.type = 'text/javascript';
			script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
				'callback=initialize';
			document.body.appendChild(script);
			
			// navbar dropdown
			$('.nav ul').addClass('dropdown-menu');
			var menuitem = $('.nav li');
			if(menuitem.hasClass("page_item_has_children")) {
				menuitem.children('a').addClass("dropdown-toggle");
				menuitem.addClass('dropdown');
			}
	});
	
	function initialize() {
		var mapOptions = {
			  zoom: 12,
			  center: new google.maps.LatLng(47.6150000, -122.3568213)
		};

		var map = new google.maps.Map(document.getElementById('map-canvas'),  mapOptions);
	}
});