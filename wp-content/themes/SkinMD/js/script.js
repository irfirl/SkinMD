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
		var myCenter=new google.maps.LatLng(47.679256, -122.290071);
		var map_canvas = document.getElementById('gmap');
		var map_options = {
			center: myCenter,
			zoom: 12,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map(map_canvas, map_options);
		var marker=new google.maps.Marker({
			position:myCenter,
		});
		marker.setMap(map);
	}
	google.maps.event.addDomListener(window, 'load', initialize);
});