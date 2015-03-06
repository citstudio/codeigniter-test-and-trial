function initialize() {
	var map;
	var bounds = new google.maps.LatLngBounds();
	var mapOptions = {
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		mapTypeControl: false,
		streetViewControl: false,
		panControl: false,
		zoomControlOptions: {
			position: google.maps.ControlPosition.LEFT_BOTTOM
		}
	};
                    
			// Display a map on the page
	map = new google.maps.Map(document.getElementById("map"), mapOptions);
	map.setTilt(15);
    
	var markers = viewlocations;
	      
    // Info Window Content
			var infoWindowContent = locationsContent;
        
    // Display multiple markers on a map
			var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    // Loop through our array of markers & place each one on the map  
			for( i = 0; i < markers.length; i++ ) {
				var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
				bounds.extend(position);
				marker = new google.maps.Marker({
					position: position,
					map: map,
					title: markers[i][0],
					icon: markers[i][3]
				});
        
        // Allow each marker to have an info window    
			google.maps.event.addListener(marker, 'click', (function(marker, i) {
				return function() {
					infoWindow.setContent(infoWindowContent[i][0]);
					infoWindow.open(map, marker);
				}
			})(marker, i));

        // Automatically center the map fitting all markers on the screen
			map.fitBounds(bounds);
		}

    // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
		var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
			this.setZoom(13);
			this.setCenter(new google.maps.LatLng(-6.9090815, 107.617204));
			google.maps.event.removeListener(boundsListener);
		});
    
	}
