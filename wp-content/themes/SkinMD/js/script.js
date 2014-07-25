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
			
			$('.popover-dismiss').popover({
				trigger: 'hover'
			})
	});
	
	function initialize() {
		var myCenter=new google.maps.LatLng(47.679256, -122.290071);
		var map_canvas = document.getElementById('gmap');
		var map_options = {
			center: myCenter,
			zoom: 13,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			styles: [{"featureType":"administrative","stylers":[{"visibility":"off"}]},{"featureType":"poi","stylers":[{"visibility":"simplified"}]},{"featureType":"road","stylers":[{"visibility":"simplified"}]},{"featureType":"water","stylers":[{"visibility":"simplified"}]},{"featureType":"transit","stylers":[{"visibility":"simplified"}]},{"featureType":"landscape","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"visibility":"off"}]},{"featureType":"road.local","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"road.arterial","stylers":[{"visibility":"off"}]},{"featureType":"water","stylers":[{"color":"#5f94ff"},{"lightness":26},{"gamma":5.86}]},{},{"featureType":"road.highway","stylers":[{"weight":0.6},{"saturation":-85},{"lightness":61}]},{"featureType":"road"},{},{"featureType":"landscape","stylers":[{"hue":"#0066ff"},{"saturation":74},{"lightness":100}]}]
			
			//styles: [{"featureType":"water","stylers":[{"color":"#6ebeab"}]},{"featureType":"road","stylers":[{"color":"#b5a15b"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f9f9f9"}]},{"featureType":"landscape","elementType":"labels.text.fill","stylers":[{"color":"#808080"}]},{"featureType":"administrative.locality","elementType":"labels.text.fill","stylers":[{"color":"#808080"}]},{"featureType":"landscape.natural.terrain","stylers":[{"color":"#d0d0d0"}]},{}]
		
		};
		var map = new google.maps.Map(map_canvas, map_options);
		var marker=new google.maps.Marker({
			position:myCenter,
		});
		marker.setMap(map);
	}
	google.maps.event.addDomListener(window, 'load', initialize);

	function initialize_contact_page() {
		var myCenter=new google.maps.LatLng(47.679256, -122.290071);
		var map_canvas = document.getElementById('gmap_contact_page');
		var map_options = {
			center: myCenter,
			zoom: 12,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			styles: [{"featureType":"administrative","stylers":[{"visibility":"off"}]},{"featureType":"poi","stylers":[{"visibility":"simplified"}]},{"featureType":"road","stylers":[{"visibility":"simplified"}]},{"featureType":"water","stylers":[{"visibility":"simplified"}]},{"featureType":"transit","stylers":[{"visibility":"simplified"}]},{"featureType":"landscape","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"visibility":"off"}]},{"featureType":"road.local","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"road.arterial","stylers":[{"visibility":"off"}]},{"featureType":"water","stylers":[{"color":"#5f94ff"},{"lightness":26},{"gamma":5.86}]},{},{"featureType":"road.highway","stylers":[{"weight":0.6},{"saturation":-85},{"lightness":61}]},{"featureType":"road"},{},{"featureType":"landscape","stylers":[{"hue":"#0066ff"},{"saturation":74},{"lightness":100}]}]
			//styles: [{"featureType":"water","stylers":[{"color":"#6ebeab"}]},{"featureType":"road","stylers":[{"color":"#b5a15b"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f9f9f9"}]},{"featureType":"landscape","elementType":"labels.text.fill","stylers":[{"color":"#808080"}]},{"featureType":"administrative.locality","elementType":"labels.text.fill","stylers":[{"color":"#808080"}]},{"featureType":"landscape.natural.terrain","stylers":[{"color":"#d0d0d0"}]},{}]
		
		};
		var map = new google.maps.Map(map_canvas, map_options);
		var marker=new google.maps.Marker({
			position:myCenter,
		});
		marker.setMap(map);
	}
	google.maps.event.addDomListener(window, 'load', initialize_contact_page);


});