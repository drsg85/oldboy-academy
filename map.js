;
function initMap() {
    var coords = {lat: 55.7685612, lng: 37.6798055};
    
    // creating map
    var map = new google.maps.Map(document.getElementById("map"), {
        zoom: 17,
        center: coords,
        disableDefaultUI: true
    });
    
    // creating icon
    var icon = {
        path: "M27.4,3.9C24.6,1.4,20.6,0,16.3,0S8,1.4,5.2,3.9C1.8,7,0,11.6,0,17.3c0,12.4,14.3,26.9,14.9,27.6 c0.4,0.4,0.9,0.6,1.4,0.6c0.5,0,1-0.2,1.4-0.6c0.6-0.6,14.9-15.1,14.9-27.6C32.6,11.6,30.8,7,27.4,3.9z M16.3,26.9 C10.6,26.9,6,22.3,6,16.5S10.6,6.1,16.3,6.1s10.2,4.6,10.2,10.4C26.5,22.2,21.9,26.9,16.3,26.9z",
        fillColor: "#ffffff",
        fillOpacity: 1,
        anchor: new google.maps.Point(24, 40),
        strokeWeight: 0,
        scale: 1
    };

    // creating marker
    var marker = new google.maps.Marker({
        map: map,
        position: coords,
        draggable: false,
        animation: google.maps.Animation.BOUNCE,
        icon: icon
    });

    // map styling
    var styledMapType = new google.maps.StyledMapType(
        [
            {
                "featureType": "administrative.land_parcel",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#ffffff"
                    }
                ]
            },
            {
                "featureType": "administrative.land_parcel",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#ffffff"
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "labels.text",
                "stylers": [
                    {
                        "color": "#e9e9e9"
                    },
                    {
                        "weight": "0.8"
                    }
                ]
            },
            {
                "featureType": "landscape.man_made",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#333333"
                    }
                ]
            },
            {
                "featureType": "landscape.man_made",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#e4e4e4"
                    }
                ]
            },
            {
                "featureType": "landscape.man_made",
                "elementType": "labels",
                "stylers": [
                    {
                        "color": "#333333"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#5a5a5a"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "labels.text",
                "stylers": [
                    {
                        "color": "#d5a353"
                    },
                    {
                        "weight": "0.01"
                    }
                ]
            },
            {
                "featureType": "poi.business",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": 'road.highway',
                "elementType": 'labels.text.fill',
                "stylers": [
                    {
                        "color": "#000"
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "all",
                "stylers": [
                    {
                        "color": "#d5a353"
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "labels.text",
                "stylers": [
                    {
                        "color": "#222222"
                    },
                    {
                        "weight": "0.03"
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "all",
                "stylers": [
                    {
                        "color": "#212121"
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "labels.text",
                "stylers": [
                    {
                        "color": "#ffffff"
                    }, 
                    {
                        "weight": "0.01"
                    }
                ]
            },
            {
                "featureType": "transit.line",
                "elementType": "all",
                "stylers": [
                    {
                        "color": "#d5a353"
                    }
                ]
            },
            {
                "featureType": "transit.station",
                "elementType": "all",
                "stylers": [
                    {
                        "weight": "0.01"
                    }
                ]
            },
            {
                "featureType": "transit.station",
                "elementType": "labels.text",
                "stylers": [
                    {
                        "weight": "0.01"
                    },
                    {
                        "color": "#d5a353"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "all",
                "stylers": [
                    {
                        "color": "#333333"
                    }
                ]
            }
        ]
    );

    // setting map style
    map.mapTypes.set("styled_map", styledMapType);
    map.setMapTypeId("styled_map");
    
    
    // shifting cursor so it is positioned on footer border
    google.maps.event.addListenerOnce(map, "projection_changed", function() {
        var scale = Math.pow(2, map.getZoom());
        
        var worldCoordinateCenter = map.getProjection().fromLatLngToPoint(map.getCenter());
        var pixelOffset = new google.maps.Point((80 / scale) || 0, (100 / scale) || 0);
        
        var worldCoordinateNewCenter = new google.maps.Point(
            worldCoordinateCenter.x + pixelOffset.x,
            worldCoordinateCenter.y - pixelOffset.y
        );
        
        var newCenter = map.getProjection().fromPointToLatLng(worldCoordinateNewCenter);
        
        map.setCenter(newCenter);
    });
    
}


// custom animated marker sample
// https://codepen.io/dylanvann/pen/yNWdxJ
// console.log(map);
// https://stackoverflow.com/questions/10656743/how-to-offset-the-center-point-in-google-maps-api-v3
// https://stackoverflow.com/questions/31232318/google-maps-function-fromlatlngtocontainerpixellatlng-not-working