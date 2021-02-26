/* Google Maps für Compresso darstellen */
function initMap( $el ) {

  // Find marker elements within map.
  var $markers = $el.find('.marker');

  // Create gerenic map.
  var mapArgs = {
      zoom        : $el.data('zoom') || 16,
      mapTypeId   : google.maps.MapTypeId.ROADMAP,
      styles      : [
        {
            "featureType": "all",
            "elementType": "all",
            "stylers": [
                {
                    "invert_lightness": true
                },
                {
                    "saturation": "-9"
                },
                {
                    "lightness": "0"
                },
                {
                    "visibility": "simplified"
                }
            ]
        },
        {
            "featureType": "landscape.man_made",
            "elementType": "all",
            "stylers": [
                {
                    "weight": "1.00"
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "all",
            "stylers": [
                {
                    "weight": "0.49"
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "labels",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "weight": "0.01"
                },
                {
                    "lightness": "-7"
                },
                {
                    "saturation": "-35"
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "labels.text",
            "stylers": [
                {
                    "visibility": "on"
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "labels.text.stroke",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "labels.icon",
            "stylers": [
                {
                    "visibility": "on"
                }
            ]
        }
    ]
  };
  var map = new google.maps.Map( $el[0], mapArgs );

  // Add markers.
  map.markers = [];
  $markers.each(function(){
      initMarker( $(this), map );
  });

  // Center map based on markers.
  centerMap( map );

  // Return map instance.
  return map;
}

function initMarker( $marker, map ) {

  // Get position from marker.
  var lat = $marker.data('lat');
  var lng = $marker.data('lng');
  var latLng = {
      lat: parseFloat( lat ),
      lng: parseFloat( lng )
  };

  // Create marker instance.
  var marker = new google.maps.Marker({
      position : latLng,
      map: map
  });

  // Append to reference for later use.
  map.markers.push( marker );

  // If marker contains HTML, add it to an infoWindow.
  if( $marker.html() ){

      // Create info window.
      var infowindow = new google.maps.InfoWindow({
          content: $marker.html()
      });

      // Show info window when marker is clicked.
      google.maps.event.addListener(marker, 'click', function() {
          infowindow.open( map, marker );
      });
  }
}

function centerMap( map ) {

  // Create map boundaries from all map markers.
  var bounds = new google.maps.LatLngBounds();
  map.markers.forEach(function( marker ){
      bounds.extend({
          lat: marker.position.lat(),
          lng: marker.position.lng()
      });
  });

  // Case: Single marker.
  if( map.markers.length == 1 ){
      map.setCenter( bounds.getCenter() );

  // Case: Multiple markers.
  } else{
      map.fitBounds( bounds );
  }
}

$(document).ready(function(){
  $('.compresso_map').each(function(){
      var map = initMap( $(this) );
  });
});