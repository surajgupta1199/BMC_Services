<!-- <!DOCTYPE html>
<html>
    <head>
    <title>Place Autocomplete With Latitude & Longitude </title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
#pac-input {
    background-color: #fff;
    padding: 0 11px 0 13px;
    width: 400px;
    font-family: Roboto;
    font-size: 15px;
    font-weight: 300;
    text-overflow: ellipsis;
}
#pac-input:focus {
    border-color: #4d90fe;
    margin-left: -1px;
    padding-left: 14px;
    width: 401px;
}
}
</style>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdtgWFU9eL69O8PFeCvteKvfOepX6W2Y8&libraries=places"></script>
    <script>


  function initialize() {
        var address = (document.getElementById('pac-input'));
        var autocomplete = new google.maps.places.Autocomplete(address);
        autocomplete.setTypes(['geocode']);
        google.maps.event.addListener(autocomplete, 'place_changed', function() {
            var place = autocomplete.getPlace();
            if (!place.geometry) {
                return;
            }

        var address = '';
        if (place.address_components) {
            address = [
                (place.address_components[0] && place.address_components[0].short_name || ''),
                (place.address_components[1] && place.address_components[1].short_name || ''),
                (place.address_components[2] && place.address_components[2].short_name || '')
                ].join(' ');
        }
      
        document.getElementById('lat').innerHTML = place.geometry.location.lat();
        document.getElementById('long').innerHTML = place.geometry.location.lng();
        });
  }

   google.maps.event.addDomListener(window, 'load', initialize);

    </script>
    </head>
    <body>
<input id="pac-input" class="controls" type="text"
        placeholder="Enter a location">
<div id="lat"></div>
<div id="long"></div>
</body>
</html> -->

 <!-- AIzaSyDdtgWFU9eL69O8PFeCvteKvfOepX6W2Y8 -->
<!--  <!DOCTYPE html>
<html>
    <head>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdtgWFU9eL69O8PFeCvteKvfOepX6W2Y8&libraries=places"></script>
        <script type="text/javascript">
        function initialize() {
        var address = (document.getElementById('my-address'));
        var autocomplete = new google.maps.places.Autocomplete(address);
        autocomplete.setTypes(['geocode']);
        google.maps.event.addListener(autocomplete, 'place_changed', function() {
            var place = autocomplete.getPlace();
            if (!place.geometry) {
                return;
            }

        var address = '';
        if (place.address_components) {
            address = [
                (place.address_components[0] && place.address_components[0].short_name || ''),
                (place.address_components[1] && place.address_components[1].short_name || ''),
                (place.address_components[2] && place.address_components[2].short_name || '')
                ].join(' ');
        }
      });
}
function codeAddress() {
    geocoder = new google.maps.Geocoder();
    var address = document.getElementById("my-address").value;
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {

      alert("Latitude: "+results[0].geometry.location.lat());
      alert("Longitude: "+results[0].geometry.location.lng());
      } 

      else {
        alert("Geocode was not successful for the following reason: " + status);
      }
    });
  }
google.maps.event.addDomListener(window, 'load', initialize);

        </script>
    </head>
    <body>
        <input type="text" id="my-address">
        <button id="getCords" onClick="codeAddress();">getLat&Long</button>
    </body>
</html> -->
<!-- <html>
  <head>
    <title>Simple Markers</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdtgWFU9eL69O8PFeCvteKvfOepX6W2Y8&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
  </head>
  <body>
    <div id="map"></div>

  </body>
</html>
<script>
  function initMap() {
  const myLatLng = { lat: -25.363, lng: 131.044 };
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: myLatLng,
  });
  new google.maps.Marker({
    position: myLatLng,
    map,
    title: "Hello World!",
  });
}
</script> -->
<!-- <!DOCTYPE html>
<html>
    <head>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdtgWFU9eL69O8PFeCvteKvfOepX6W2Y8&libraries=places"></script>
        <script type="text/javascript">
        function initialize() {
        var address = (document.getElementById('my-address'));
        var autocomplete = new google.maps.places.Autocomplete(address);
        autocomplete.setTypes(['geocode']);
        google.maps.event.addListener(autocomplete, 'place_changed', function() {
            var place = autocomplete.getPlace();
            if (!place.geometry) {
                return;
            }

        var address = '';
        if (place.address_components) {
            address = [
                (place.address_components[0] && place.address_components[0].short_name || ''),
                (place.address_components[1] && place.address_components[1].short_name || ''),
                (place.address_components[2] && place.address_components[2].short_name || '')
                ].join(' ');
        }
      });
}
function codeAddress() {
    geocoder = new google.maps.Geocoder();
    var address = document.getElementById("my-address").value;
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {

      alert("Latitude: "+results[0].geometry.location.lat());
      alert("Longitude: "+results[0].geometry.location.lng());
      } 

      else {
        alert("Geocode was not successful for the following reason: " + status);
      }
    });
  }
google.maps.event.addDomListener(window, 'load', initialize);

        </script>
    </head>
    <body>
        <input type="text" id="my-address">
        <button id="getCords" onClick="codeAddress();">getLat&Long</button>
    </body>
</html> -->
<!-- <html>
  <head>
    <title>Event Click LatLng</title>
    <div id="latlong">
    <p>Latitude: <input size="20" type="text" id="latbox" name="lat" ></p>
    <p>Longitude: <input size="20" type="text" id="lngbox" name="lng" ></p>
  </div>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdtgWFU9eL69O8PFeCvteKvfOepX6W2Y8&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <style type="text/css">
      #map  div {
      
      }
    </style>
   
  </head>
  <body>
    <div id="map" style="height: 60%; width: 60%"></div>
  </body>
</html>
<script>
  function initMap() {
  const myLatlng = { lat: 22, lng: 79 };
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: myLatlng,
  });
  
  let infoWindow = new google.maps.InfoWindow({
    content: "Click the map to get Lat/Lng!",
    position: myLatlng,
  });
  infoWindow.open(map);

  map.addListener("click", (mapsMouseEvent) => {
   
    infoWindow.close();
    
    infoWindow = new google.maps.InfoWindow({
      position: mapsMouseEvent.latLng,
    });
    infoWindow.setContent(
      JSON.stringify(mapsMouseEvent.latLng.toJSON(), null, 2)
    );
    infoWindow.open(map);
    });
      formlat = document.getElementById("latbox").value = event.latLng.lat();
      formlng = document.getElementById("lngbox").value = event.latLng.lng();
  }
</script> -->
<!-- <html>
  <head>
    <title>Places Search Box</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdtgWFU9eL69O8PFeCvteKvfOepX6W2Y8&callback=initAutocomplete&libraries=places&v=weekly"
      defer
    ></script>
    </style>
   
  </head>
  <body>
    <input
      id="pac-input"
      class="controls"
      type="text"
      placeholder="Search Box"
    />
    <div id="map" style="height: 70%; width: 40%"></div>
  </body>
</html>
<script>
  //var geocoder = new google.maps.Geocoder();
  //function geocodePosition(pos) {
   // geocoder.geocode({
     // latLng: pos
    //}, function(responses) {
    //  if (responses && responses.length > 0) {
    //    updateMarkerAddress(responses[0].formatted_address);
    //  } else {
    //    updateMarkerAddress('Cannot determine address at this location.');
    //  }
    //});
  //}
  function initAutocomplete() {
    const map = new google.maps.Map(document.getElementById("map"), {
      center: { lat: -33.8688, lng: 151.2195 },
      zoom: 13,
      mapTypeId: "roadmap",
    });
    
    const input = document.getElementById("pac-input");
    const searchBox = new google.maps.places.SearchBox(input);
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
   
    map.addListener("bounds_changed", () => {
      searchBox.setBounds(map.getBounds());
    });
    let markers = [];
   
    searchBox.addListener("places_changed", () => {
      const places = searchBox.getPlaces();

      if (places.length == 0) {
        return;
      }
    
      markers.forEach((marker) => {
        marker.setMap(null);
      });
      markers = [];
     
      const bounds = new google.maps.LatLngBounds();
      places.forEach((place) => {
        if (!place.geometry) {
          console.log("Returned place contains no geometry");
          return;
        }
        const icon = {
          url: place.icon,
          size: new google.maps.Size(71, 71),
          origin: new google.maps.Point(0, 0),
          anchor: new google.maps.Point(17, 34),
          scaledSize: new google.maps.Size(25, 25),
        };
       
        markers.push(
          new google.maps.Marker({
            map,
            icon,
            title: place.name,
            position: place.geometry.location,
          })
        );

        if (place.geometry.viewport) {
          
          bounds.union(place.geometry.viewport);
        } else {
          bounds.extend(place.geometry.location);
        }
      });
      map.fitBounds(bounds);
    });
  }
</script> -->













<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<!--  <html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<div id="latlong">
    <p>Latitude: <input size="20" type="text" id="latbox" name="lat" ></p>
    <p>Longitude: <input size="20" type="text" id="lngbox" name="lng" ></p>
    <p><input id="search"class="control"type="text"placeholder="Search Box"/>
</div>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDdtgWFU9eL69O8PFeCvteKvfOepX6W2Y8&callback=initAutocomplete&libraries=places&v=weekly"></script>
<script type="text/javascript">
var geocoder = new google.maps.Geocoder();
function initAutocomplete() {

  }

function geocodePosition(pos) {
  geocoder.geocode({
    latLng: pos
  }, function(responses) {
    if (responses && responses.length > 0) {
      updateMarkerAddress(responses[0].formatted_address);
    } else {
      updateMarkerAddress('Cannot determine address at this location.');
    }
  });
}

function updateMarkerStatus(str) {
  document.getElementById('markerStatus').innerHTML = str;
}

function updateMarkerPosition(latLng) {
  document.getElementById('lngbox').value = latLng.lng();
  document.getElementById('latbox').value = latLng.lat();
 /* $('#lngbox').val(latLng.lng());*/
  $('#latbox').val(latLng.lat());
  document.getElementById('info').innerHTML = [
    latLng.lat(),
    latLng.lng()
  ]

}

function updateMarkerAddress(str) {
  document.getElementById('address').innerHTML = str;
}

/*const input = document.getElementById("pac-input");
const searchBox = new google.maps.places.SearchBox(input);*/

function initialize() {
  var latLng = new google.maps.LatLng(19.18358619052614, 72.86035132026674);
  var map = new google.maps.Map(document.getElementById('mapCanvas'), {

    zoom: 8,
    center: latLng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });
  var input = document.getElementById("search");
  var searchBox = new google.maps.places.SearchBox(input);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
  var marker = new google.maps.Marker({
    position: latLng,
    title: 'Point A',
    map: map,
    draggable: true
  });
  map.addListener("bounds_changed", () => {
      searchBox.setBounds(map.getBounds());
    });
    let markers = [];

    searchBox.addListener("places_changed", () => {
      const places = searchBox.getPlaces();
      

      if (places.length == 0) {
        return;
      }
    
      markers.forEach((marker) => {
        marker.setMap(null);
      });
      markers = [];
     
      const bounds = new google.maps.LatLngBounds();
      places.forEach((place) => {
        if (!place.geometry) {
          console.log("Returned place contains no geometry");
          return;
        }
        const icon = {
          url: place.icon,
          size: new google.maps.Size(71, 71),
          origin: new google.maps.Point(0, 0),
          anchor: new google.maps.Point(17, 34),
          scaledSize: new google.maps.Size(25, 25),
        };
       
        markers.push(
          new google.maps.Marker({
            map,
            icon,
            title: place.name,
            position: place.geometry.location,
            draggable: true,
          })
        );

        if (place.geometry.viewport) {
          
          bounds.union(place.geometry.viewport);
        } else {
          bounds.extend(place.geometry.location);
        }
      });
      map.fitBounds(bounds);
    });
  updateMarkerPosition(latLng);
  geocodePosition(latLng);

  // Add dragging event listeners.
  google.maps.event.addListener(marker, 'dragstart', function() {
    updateMarkerAddress('Dragging...');
  });

  google.maps.event.addListener(marker, 'drag', function() {
    updateMarkerStatus('Dragging...');
    updateMarkerPosition(marker.getPosition());
  });

  google.maps.event.addListener(marker, 'dragend', function() {
    updateMarkerStatus('Drag ended');
    geocodePosition(marker.getPosition());
  });
}


google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>
<body>
  <style>
  #mapCanvas {
    width: 500px;
    height: 400px;
    float: left;
  }
  #infoPanel {
    float: left;
    margin-left: 10px;
  }
  #infoPanel div {
    margin-bottom: 5px;
  }
  </style>

  <div id="mapCanvas"></div>
  <div id="infoPanel">
    <b>Marker status:</b>
    <div id="markerStatus"><i>Click and drag the marker.</i></div>
    <b>Current position:</b>
    <div id="info" >
    </div>
    <b>Closest matching address:</b>
    <div id="address"></div>
  </div>
</body>
</html> -->







<!-- <script>
    (function (exports) {
        "use strict";

        // This example adds a search box to a map, using the Google Place Autocomplete
        // feature. People can enter geographical searches. The search box will return a
        // pick list containing a mix of places and predicted search terms.
        // This example requires the Places library. Include the libraries=places
        // parameter when you first load the API. For example:
        // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
        function initAutocomplete() {
            var map = new google.maps.Map(document.getElementById("map"), {
                center: {
                    lat: -33.8688,
                    lng: 151.2195,
                },
                zoom: 13,
                mapTypeId: "roadmap",
            }); // Create the search box and link it to the UI element.

            var input = document.getElementById("pac-input");
            var searchBox = new google.maps.places.SearchBox(input);
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input); // Bias the SearchBox results towards current map's viewport.

            map.addListener("bounds_changed", function () {
                searchBox.setBounds(map.getBounds());
            });
            var markers = []; // Listen for the event fired when the user selects a prediction and retrieve
            // more details for that place.

            searchBox.addListener("places_changed", function () {
                var places = searchBox.getPlaces();

                if (places.length == 0) {
                    return;
                } // Clear out the old markers.

                markers.forEach(function (marker) {
                    marker.setMap(null);
                });
                markers = []; // For each place, get the icon, name and location.

                var bounds = new google.maps.LatLngBounds();
                places.forEach(function (place) {
                    if (!place.geometry) {
                        console.log("Returned place contains no geometry");
                        return;
                    }

                    var icon = {
                        url: place.icon,
                        size: new google.maps.Size(71, 71),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(25, 25),
                    }; // Create a marker for each place.

                    markers.push(
                        new google.maps.Marker({
                            map: map,
                            icon: icon,
                            title: place.name,
                            position: place.geometry.location,
                        })
                    );

                    if (place.geometry.viewport) {
                        // Only geocodes have viewport.
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                });
                map.fitBounds(bounds);
            });
        }

        exports.initAutocomplete = initAutocomplete;
    })((this.window = this.window || {}));
</script> -->


<!-- <html>
  <head>
    <title>Reverse Geocoding</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdtgWFU9eL69O8PFeCvteKvfOepX6W2Y8&libraries=places&sensor=false&callback=initMap" async defer></script>
  </head>
  <body>
    <div id="floating-panel">
      <input id="lat" type="text" value="19.189" />
      <input id="lng" type="text" value="72.835" />
      <input id="submit" type="button" value="Reverse Geocode" />
    </div>
    <div id="map"></div>
  </body>
</html>

<style>
#map {
  height: 100%;
}

html,
body {
  height: 100%;
  margin: 0;
  padding: 0;
}

#floating-panel {
  position: absolute;
  top: 10px;
  left: 25%;
  z-index: 5;
  background-color: #fff;
  padding: 5px;
  border: 1px solid #999;
  text-align: center;
  font-family: "Roboto", "sans-serif";
  line-height: 30px;
  padding-left: 10px;
}

#floating-panel {
  position: absolute;
  top: 5px;
  left: 50%;
  margin-left: -180px;
  width: 350px;
  z-index: 5;
  background-color: #fff;
  padding: 5px;
  border: 1px solid #999;
}

#latlng {
  width: 225px;
}
</style>
<script>
function initMap() {
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 8,
    center: { lat: 40.731, lng: -73.997 },
  });
  const geocoder = new google.maps.Geocoder();
  const infowindow = new google.maps.InfoWindow();
  document.getElementById("submit").addEventListener("click", () => {
    geocodeLatLng(geocoder, map, infowindow);
    });
  }
  function geocodeLatLng(geocoder, map, infowindow) {
    const latd = document.getElementById("lat").value;
    const lngd = document.getElementById("lng").value;
    /*const input = document.getElementById("latlng").value;*/
   /* const latlngStr = input.split(",", 2);*/
    const latlng = {
      lat: parseFloat(latd),
      lng: parseFloat(lngd),
    };
    geocoder.geocode({ location: latlng }, (results, status) => {
      if (status === "OK") {
        if (results[0]) {
          map.setZoom(11);
          const marker = new google.maps.Marker({
            position: latlng,
            map: map,
          });
          infowindow.setContent(results[0].formatted_address);
          infowindow.open(map, marker);
        } else {
          window.alert("No results found");
        }
      } else {
        window.alert("Geocoder failed due to: " + status);
      }
    });
  }
</script> -->


<!-- <?php

// this code block contains some test stuff
$lat_d = 40.709;
$long_d = -74.007;

// mimic a result array from MySQL
$result = array(array('latitude'=>$lat_d,'longitude'=>$long_d));

?>
<!doctype html>
<html>
    <head>
       <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdtgWFU9eL69O8PFeCvteKvfOepX6W2Y8&libraries=places&sensor=false">
       </script>
        <script type="text/javascript">
        var map;
        function initialize() {
            // Set static latitude, longitude value
            var latlng = new google.maps.LatLng(<?php echo $lat_d; ?>, <?php echo $long_d; ?>);
            // Set map options
            var myOptions = {
                zoom: 16,
                center: latlng,
                panControl: true,
                zoomControl: true,
                scaleControl: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            // Create map object with options
            map = new google.maps.Map(document.getElementById("map"), myOptions);
        <?php
            // uncomment the 2 lines below to get real data from the db
            // $result = mysql_query("SELECT * FROM parkings");
            // while ($row = mysql_fetch_array($result))
            foreach($data as $row) // <- remove this line
                echo "addMarker(new google.maps.LatLng(".$row['location_latitude'].", ".$row['location_longitude']."), map);";
        ?>
        }
        function addMarker(latLng, map) {
            var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                draggable: true, // enables drag & drop
                animation: google.maps.Animation.DROP
            });

            return marker;
        }
        </script>
    </head>
    <body onload="initialize()">
        <div style="float:left; position:relative; width:550px; border:0px #000 solid;">
            <div id="map" style="width:550px;height:400px;border:solid black 1px;"></div>
        </div>
    </body>
</html> -->























<html lang="en">
<head>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BMC Service</title>
    <meta name="description" content="Admin Services">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>/apple-icon.png">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>/favicon.ico">

    <link rel="stylesheet" href="<?php echo base_url(); ?>/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/vendors/jqvmap/dist/jqvmap.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">


    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <script src="<?php echo base_url(); ?>/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/jquery-validation/dist/jquery.validate.min.js"></script>

    <script src="<?php echo base_url(); ?>/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url(); ?>/vendors/sweetalert2-9.14.0/package/dist/sweetalert2.all.min.js"></script>
    <script src="<?php echo base_url(); ?>/vendors/sweetalert/sweetalert.min.js"></script>


    <script src="<?php echo base_url(); ?>/assets/js/main.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
  

   
</head>
<body>
  <!-- <p class="text_align" text-align="center">
    <style>
      .text_align{
        text-align: center;
        border-radius: "50px";
      }
    </style>
  <img src="<?php echo base_url('images/admin.jpg');?>" alt="Trulli" width="400" height="333" center="center"  border-radius= "50px">
  </p>

  <div class="container">
  <h>Description</h>
  <p>As the name suggests, Travelers is a free travel and tours website template for agencies interested in expanding their businesses. Never lack web presence again thanks to this spectacular and easy to use free tool that will put you on top. Travelers is full of amazing features and great characteristics that will keep you going strong on the web</p>
  <p>Core features of Travelers are full-screen slider with parallax effect and call-to-action button, unique testimonials slider, video support and a full-blown booking form. Additionally, Travelers also treats you to neat destination, discount, about and blog pages. Indeed, you can also start a travel blog with Travelers and put your travel agency ahead of the competition effortlessly. If you would like to stand out from the masses and emphasize your professionalism and mind-bending travel destinations, do it in style with Travelers.</p>
  </div>
  <div class="card">
    <div class="card-header"><strong>View Service Registration</strong><small> Form</small></div>
    <div class="card-body card-block row">
        <form id="edit_service_station_form">
            <input type="text" name="id" value="<?php echo $sarvice_data['id'] ?>" hidden />
            <div class="form-group col-6">
                <label for="company" class="form-control-label">Service Head</label>
                <input type="text" id="company" name="service_head" value="<?php echo $sarvice_data['service_head'] ?>" placeholder="Enter Service Head" class="form-control" readonly="readonly" />
            </div>

            <div class="form-group col-6">
                <label for="pincode" class="form-control-label">Pincode</label>
                <input type="number" id="pincode" name="pincode" value="<?php echo $sarvice_data['pincode'] ?>" placeholder="Pincode" class="form-control" readonly="readonly" />
            </div>

            <div class="form-group col-6">
                <label for="place" class="form-control-label">Place</label>
                <input type="text" id="place" name="place" value="<?php echo $sarvice_data['place'] ?>" placeholder="Enter Place" class="form-control" readonly="readonly" />
            </div>

            <div class="form-group col-6">
                <label for="nearby_location" class="form-control-label">Near by Location</label>
                <input type="text" id="nearby_location" name="nearby_location" value="<?php echo $sarvice_data['nearby_location'] ?>" placeholder="Enter Near by Location" class="form-control" readonly="readonly" />
            </div>

            <div class="form-group col-6">
                <label for="city" class="form-control-label">City</label>
                <input type="text" id="city" name="city" value="<?php echo $sarvice_data['city'] ?>" placeholder="Enter city" class="form-control" readonly="readonly" />
            </div>

            <div class="form-group col-6">
                <label for="state" class="form-control-label">State</label>
                <input type="text" id="state" name="state" value="<?php echo $sarvice_data['state'] ?>" placeholder="Enter State name" class="form-control" readonly="readonly" />
            </div>
             
            <div class="form-group col-3">
                <label for="store_ref_address" class="form-control-label">Address</label>
                 <textarea class="materialize-textarea" name="store_ref_address" id="store_ref_address" readonly="readonly"/>"<?php echo $sarvice_data['store_ref_address'] ?>"</textarea>
            </div>
            </div>
        </form>
    </div>
  </div>  -->
<!-- 
  <div id="rating_div">
        <div class="star-rating">
          <span class="fa divya fa-star-o" data-rating="1" style="font-size:20px;"></span>
          <span class="fa fa-star-o" data-rating="2" style="font-size:20px;"></span>
          <span class="fa fa-star-o" data-rating="3" style="font-size:20px;"></span>
          <span class="fa fa-star-o" data-rating="4" style="font-size:20px;"></span>
          <span class="fa fa-star-o" data-rating="5" style="font-size:20px;"></span>
          <input type="hidden" name="whatever3" class="rating-value" value="1">
        </div>
  </div>
</div>
</div><br>
<input type="hidden" name="demo_id" id="demo_id" value="1">
<div class="col-md-4">
<input type="text" class="form-control" name="email" id="email" placeholder="Email Id"><br>
<textarea class="form-control" rows="5" placeholder="Write your review here..." name="remark" id="remark" required></textarea><br>
<p><button  class="btn btn-default btn-sm btn-info" id="srr_rating">Submit</button></p>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/index.js"></script>
  
</body>
</html> -->


<!-- str.link("<?php echo base_url('Add_service_station/show_data/'(".$['id'].")) ?>"); -->











<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Export selected column in datatable</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css'><link rel="stylesheet" href="./style.css">
    <script src="<?php echo base_url()?>/assets/lib/chart.js/Chart.bundle.min.js"></script>


    <script src="<?php echo base_url()?>/assets/js/chart.chartjs.js"></script>
    <script src="<?php echo base_url('assets/')?>js/datepicker.js"></script>

    <!-- <script src="<?php echo base_url()?>/assets/lib/jquery-ui/ui/widgets/datepicker.js"></script> -->
    <script src="<?php echo base_url()?>/assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url()?>/assets/lib/ionicons/ionicons.js"></script>
    <script src="<?php echo base_url()?>/assets/lib/jquery.maskedinput/jquery.maskedinput.js"></script>
    <script src="<?php echo base_url()?>/assets/lib/spectrum-colorpicker/spectrum.js"></script>
    <script src="<?php echo base_url()?>/assets/lib/select2/js/select2.min.js"></script>
    <script src="<?php echo base_url()?>/assets/lib/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="<?php echo base_url()?>/assets/lib/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js"></script>
    <script src="<?php echo base_url()?>/assets/lib/jquery-simple-datetimepicker/jquery.simple-dtpicker.js"></script>
    <script src="<?php echo base_url()?>/assets/lib/pickerjs/picker.min.js"></script>
    <script src="<?php echo base_url()?>/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>/assets/js/azia.js"></script>


   <!--  datatbale -->
   
<script src='https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js'></script>
<script src='https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js'></script>

</head>


    <!-- <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4" style="background-color:lavender;">.col-sm-4</div>
            <div class="col-sm-4" style="background-color:lavenderblush;">.col-sm-4</div>
            <div class="col-sm-4" style="background-color:lavender;">.col-sm-4</div>
        </div>
    </div> -->

<div class="container-fluid background_fluid">      

        <!-- az-content-left -->
       <div class="az-content-body pd-lg-l-40 d-flex flex-column">  


    <h2 class="az-content-title">Bidding Master</h2>    
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"style='width: 120px;margin-left: 1700px;margin-top: -40px;'>Bidding</button><br/>
    
          <table id="table" class="display table">
        <thead>
            <tr>
                <th>No</th>
                <th>Bidding Amount</th>
                <th>Winning Amount</th>
                <th>Bidding Date</th>
                <th>Bidding Time</th>
                <th>Drawn</th>
                <th>Status</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Bidding Amount</th>
                <th>Winning Amount</th>
                <th>Bidding Date</th>
                <th>Bidding Time</th>
                <th>Drawn</th>
                <th>Status</th>
            </tr>
        </tfoot>
    </table>
     

       
          

         

    <div class="ht-40"></div>

    <div class="modal fade" id="myModal" role="dialog">
     <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Bidding Master</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="box box-default">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <input id="current_date" value= '<?php echo $current_date; ?>' class="form-control" hidden />
                        <input id="current_time" value= '<?php echo $current_time; ?>' class="form-control" hidden />
                        <form autocomplete="off" id="bidding_apply" method="post" enctype="multipart/form-data">
                            <!-- user id -->
                          <input name="user_id" id="user_id" value= '<?php echo $user_id; ?>' class="form-control" hidden />
                            <div class="form-group">
                                <label class="form-control-label">Bidding Coin</label>
                                <select class="form-control" name="bidding_amt" id="bidding_amt">
                                  <option value=""selected disabled>Select Class</option>
                                  <?php 
                                  foreach($bidding as $row){?>
                      <option value="<?php echo $row['coins']; ?>"><?php echo $row['coins']; ?></option>
                    <?php }?>
                </select>
                            </div>
                            
                            <!-- text input -->
                            <div class="form-group">
                                <label>Winning Coin</label>
                                <input type="number" name="winning_amt" id="winning_amt" class="form-control" / readonly>
                            </div>
                            <div class="form-group">
                                <label>Date</label>
                                <input type="text" class="form-control fc-datepicker" name="bidding_date" id="bidding_date" placeholder="DD/MM/YYYY" required>
                            </div></br>
                            <div class="form-group">
                                <label>Time</label>
                                <select class="form-control" name="bidding_time" id="bidding_time">
                                  <option value=""selected disabled>Select Class</option>
                                  <?php 
                                  foreach($time as $row){
                                   $currentDateTime = $row['display_time'];
                                   $newDateTime = date('h:i A', strtotime($currentDateTime));?>
                                   <option value="<?php echo  $row['display_time']; ?>"><?php echo $newDateTime ?></option>
                                  <?php }?>
                                </select>
                            </div></br>
                            <!-- <div class="input-group">
                              <div class="input-group-prepend">
                          <div class="input-group-text">
                            Date:
                          </div>
                        </div>
                            <input type="date" class="form-control fc-datepicker" name="bidding_date" id="bidding_date" placeholder="DD/MM/YYYY" required>
                            </div></br> -->
                            <!-- <div class="input-group">
                              <div class="input-group-prepend">
                                      <div class="input-group-text">
                                        Time:
                                              <select class="form-control" name="bidding_time" id="bidding_time">
                                                <option value=""selected disabled>Select Class</option>
                                                <?php 
                                                foreach($time as $row){
                                                  $currentDateTime = $row['display_time'];
                                  $newDateTime = date('h:i A', strtotime($currentDateTime));?>
                                    <option value="<?php echo  $row['display_time']; ?>"><?php echo $newDateTime ?></option>
                                  <?php }?>
                              </select>
                              </div>
                            </div>
                            </div></br> -->
                            <div class="form-group">
                                <label>Drawn Number</label>
                                <input type="number" name="dran_number" id="dran_number" class="form-control" required />
                            </div>
                            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
   </div>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="mr">
    <head>
        <script async="" src="<?php echo base_url('assets1/analytics.js'); ?>"></script>
       <!--  <img src="<?php echo base_url('assets1/exit.jpg');?>" alt="Trulli" width="400" height="333" center="center"  border-radius= "50px"> -->
        <script type="text/javascript">
            /*HTML Business for Java, 6.0*/
            ur_system = {
                doc: window.document,
                mimepath: "/com.sap.portal.design.urdesigndata/themes/portal/sap_standard/common/",
                stylepath: "/com.sap.portal.design.urdesigndata/themes/portal/sap_standard/",
                is508: false,
                domainrelaxing: "MINIMAL",
            };
            var popup_emptydoc = "/htmlb/jslib/emptyhover.html";
        </script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Shop Item - Start Bootstrap Template</title>

        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


        
        <link href="css/shop-item.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url('assets1/nn7_003.css');?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets1/style.css');?>" />
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=IE8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="<?php echo base_url()?>/vendors/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>/vendors/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>/vendors/themify-icons/css/themify-icons.css">
        <link rel="stylesheet" href="<?php echo base_url()?>/vendors/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>/vendors/selectFX/css/cs-skin-elastic.css">

        <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/style.css">
        <meta
            name="description"
            content="The portal is developed to facilitate ease of access for various online services such as Citizen Services, Hawker licence, Lodging a civic complaint to citizens of Mumbai. The portal also provides information about the Tourist location in Mumbai, History of Municipal Corporation of greater Mumbai to the citizens. The portal aims at educating the citizens by providing them with information  on government services, business processes. Key point of contacts and about the benefits and schemes offered, eligibility requirements for availing these benefits and schemes and so on"
        />
        <meta
            name="keywords"
            content="MCGM, Official Website of Municipal Corporation Mumbai, BMC,Brihanmumbai, Civic Complaints, Etenders, Right to Information, Citizen Services, Online Property Tax, KEM Hospital, Disaster Management, Hawker License, Online Marriage Registration, Places to visit in mumbai,Water connection, MCGM Employee Login,Shops and Establishment, Registration in MCGM , Registration of Shops and Estt in BMC"
        />
        <meta name="robots" content="index, follow" />
        <title>Home | Official Website of Municipal Corporation of Greater Mumbai</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets1/common.css');?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets1/standard-theme.css'); ?>" />
        <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url('assets1/highcontrast-theme.css');?>" title="contrast" disabled="" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets1/blueimp-gallery-indicator.css');?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets1/blueimp-gallery.css');?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets1/sm-core-css.css');?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets1/jquery-ui.css');?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets1/print.css'); ?>" media="print" />
        <!--[if lt IE 9]>
            <script src="/com.mcgm.stylesheet/scripts/html5shiv.min.js" type="text/javascript"></script>
            <script src="/com.mcgm.stylesheet/scripts/c3mq.js" type="text/javascript"></script>
        <![endif]-->
        <script src="<?php echo base_url('assets1/jquery_004.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets1/styleswitcher.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets1/jquery_002.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets1/jquery_003.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets1/accessibility-controls.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets1/jquery.js" type="text/javascript');?>"></script>
        <script src="<?php echo base_url('assets1/jquery-ui.js" type="text/javascript');?>"></script>
        <script src="<?php echo base_url('assets1/custom-alert.js" type="text/javascript');?>"></script>
        <style>
            .beta {
                color: #fec81d;
                padding: 5px;
                display: block;
                margin-bottom: 5px;
                margin-left: 0px !important;
            }
            .sm-blue a {
                padding: 7px 14px;
                font-weight: normal;
            }
            .read-more:focus {
                outline: 1px dotted #352f2f;
            }
        </style>

        <div class="background"></div>
        <!--[if lt IE 9]><div class="wrapper ie_8"><![endif]-->
        <!--[if !IE]>-->
        <div class="wrapper">
            <!--<![endif]-->
            <header id="masthead">
                <div id="accessibility-controls">
                    <span id="jump-controls">
                        <span role="button" id="skip-nav" class="sptr-bar"><a href="#nav" aria-label="Skip to Navigation" tabindex="1">दिशादर्शकाकडे जा</a></span>
                        <span role="button" id="skip-content" class="sptr-bar"><a href="#main-content" aria-label="Skip to Content" tabindex="2">मुख्य विषयाकडे जा</a></span>
                    </span>
                    <span id="text-controls">
                        <span role="button" id="text-decrease" class="sptr-bar decrease" aria-label="Reduce Text Size" tabindex="3">A<sup>-</sup></span>
                        <span role="button" id="text-standard" class="sptr-bar standard" aria-label="Normal Text Size" tabindex="4">A</span>
                        <span role="button" id="text-increase" class="increase" aria-label="Increase Text Size" tabindex="5">A<sup>+</sup></span>
                    </span>
                    <span id="display-controls">
                        <span role="button" id="display-contrast" class="sptr-bar" aria-label="Change to Contrast theme" data-disabled="false" tabindex="6" onclick="setActiveStyleSheet('contrast'); return false;">A</span>
                        <span role="button" id="display-standard" class="sptr-bar" aria-label="Change to Standard theme" data-disabled="false" tabindex="7" onclick="setActiveStyleSheet('default'); return false;">A</span>
                    </span>
                    <span id="lang-controls">
                        <span role="button" id="lang-english" class="active" data-lang="mr" aria-hidden="false" aria-pressed="true" aria-label="Change language to English"><a href="javascript:switchLang('English')">English</a></span>
                    </span>
                </div>
                <div class="clearfix"></div>
                <div class="masthead-container" role="banner">
                    <div class="logo-cont">
                        <a href="https://portal.mcgm.gov.in/irj/portal/anonymous" class="inlineb"><img src="<?php echo base_url('assets1/mcgm_oldlogo.png');?>" alt="Logo of Municipal Corporation of Greater Mumbai" id="logo" width="80px" /></a>
                    </div>
                    <div class="name-cont">
                        <span id="name_mr">बृहन्मुंबई महानगरपालिका</span>
                        <span id="name_en">Municipal Corporation of Greater Mumbai</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div id="mymain" class="head-right">
                    <div class="links">
                        <!--span><a href="/irj/go/km/docs/documents/DirectoryListMC_new.pdf" target="_blank">मदत</a></span>
        <span>&nbsp;|&nbsp;</span-->
                    </div>

                    <div class="weather-app">
                        <div style="float: right;">
                            <span style="display: block; float: left; margin-top: 3px;"></span>
                            <span style="float: left;" class="hidden"><img alt="" src="<?php echo base_url('assets1/weather.jpg');?>" height="18" /></span>
                        </div>
                    </div>
                </div>
                <div id="emblem">
                    <a href="http://india.gov.in/" title="भारतीय राष्ट्रीय पोर्टल - (बाहेरचा दुवा - दुवा नवीन विंडो मध्ये उघडेल)" class="xtern" onclick="getUrl($(this))" data-popup-ordinal="1" id="open_32684830">
                        <img src="<?php echo base_url('assets1/nationalportal.png');?>" width="56" />
                    </a>
                </div>
                <div class="clearfix"></div>
                <a id="nav"></a>
                <nav role="navigation" aria-label="Main Menu">
                    <div id="navigation">
                        <ul id="navigation-top" class="sm sm-blue" data-smartmenus-id="16077523342009307">
                            <li>
                                <h2><a href="#" target="_top">BMC Service</a></h2>
                            </li>

                            <li>
                                <h2><a href="#" target="_top">Home</a></h2>
                            </li>

                            <li>
                                <h2><a href="#" target="_top">About</a></h2>
                            </li>

                            <li>
                                <h2><a href="#" target="_top">Services</a></h2>
                            </li>

                            <li>
                                <h2><a href="#" target="_top" onclick='myfunction()' id='contact_form'>Contact us</a></h2>
                            </li>
                        </ul>
                    </div>
                </nav>
                <marquee class="beta" style="margin-bottom: 0px; padding: 10px; font: bold;"> <a>BMC SERVICES News and Updates</a></marquee>
                <script type="text/javascript">
                    if (!self.containers) {
                        containers = [];
                    }
                    var flashmsg = { numOfIViews: 1 };
                    containers["flashmsg"] = flashmsg;
                </script>

                <div id="search_wrapper">
                    <div id="search_container">
                        <div id="search_box" role="search">
                            <style>
                                .prtlToolAreaTaskCompAlign {
                                    padding: 5px;
                                }
                            </style>

                            <table class="prtlToolAreaWhl" ct="Group" style="width: 100%;" cellspacing="0" cellpadding="0" border="0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div id="GroupElements" class="prtlToolAreaTaskCompAlign">
                                                <table style="margin: 0px auto;" cellspacing="0" cellpadding="0" border="0">
                                                    <tbody>
                                                        <tr>
                                                            <td style="display: none;" nowrap="nowrap">
                                                                <table class="prtlToolAreaTaskTable" cellspacing="0" cellpadding="0" border="0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="prtlToolAreaTaskTextLftPadd" nowrap="nowrap"></td>
                                                                            <td nowrap="nowrap"></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                            <td valign="middle">
                                                                <table class="prtlToolAreaTaskTable" cellspacing="0" cellpadding="0" border="0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td nowrap="nowrap">
                                                                                <input
                                                                                    aria-label="Search the MCGM Portal"
                                                                                    type="text"
                                                                                    class="prtlHdrToolAreaSearch"
                                                                                    title="Enter a keyword or query"
                                                                                    size="20"
                                                                                    id="quickSearchField"
                                                                                    name="QueryString"
                                                                                    onkeydown="ToolAreaSearch_onReturnKey(event,'')"
                                                                                />
                                                                            </td>

                                                                            <td style="padding-left: 3px;">
                                                                                <input
                                                                                    aria-label="Click to Search"
                                                                                    type="button"
                                                                                    id="btn_search"
                                                                                    value="शोध"
                                                                                    size="56"
                                                                                    onclick="openSearch(''); return false;"
                                                                                    onkeydown="ToolAreaSearch_onSpaceKey(event,'')"
                                                                                    ct="Button"
                                                                                />
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <script type="text/javascript">
                                if (!self.containers) {
                                    containers = [];
                                }
                                var top2 = { numOfIViews: 1 };
                                containers["top2"] = top2;
                            </script>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </header>
            <main>
                <div class="wrap">
                    <a id="main-content"></a>
                    <nav role="navigation" aria-label="breadcrumb sub">
                        <div id="breadcrumb">
                            <a href="https://portal.mcgm.gov.in/irj/portal/anonymous?NavigationTarget=navurl://16752e124c9b8ed0cd57e504788888b8" target="_top">Home Page</a>

                            <strong>&nbsp;›&nbsp;</strong>

                            Services
                        </div>
                    </nav>

                    <div class="inner-wrap">
                        <section>
                            <div class="left quicklinks-main" role="article">
                                <div class="contentbox">
                                    <div class="heading">
                                        <header>
                                            <h1 id="cbx-l2">Categories</h1>
                                        </header>
                                    </div>
                                    <div class="content">
                                        <ul class="quicklinks-sidebar">
                                            <li>
                                                <?php foreach($content as $row){if($ward_ids == 'default'){?>
                                            <li><a href="#"  style='font-size: 18px'; onclick =' show_categories("<?php echo $row["id"]; ?>","default")' aria-describedby="cbx-l2"><?php echo $row['category_name'];?></a></li>
                                          <?php }else{?>
                                            <li><a href="#"  style='font-size: 18px'; onclick =' show_categories("<?php echo $row["id"]; ?>","<?php echo $ward_ids; ?>")' aria-describedby="cbx-l2"><?php echo $row['category_name'];?></a></li>
                                          <?php }}?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="contentbox" id='remove' style='margin-top: 70px;'>
                                    <div class="heading">
                                        <header>
                                            <h1 id="cbx-l2">Sub Categories</h1>
                                        </header>
                                    </div>
                                    <div class="content" >
                                        <ul class="quicklinks-sidebar">
                                            <li>
                                                <?php if($categories != ''){ foreach($categories as $row){?>
                                            <li><a href="#"  style='font-size: 18px'; onclick =' mycategories("<?php echo $row["id"] ?>",0)' aria-describedby="cbx-l2"><?php echo $row['category_name'];?></a></li>
                                            <?php }
                                            }?>
                                            <li>
                                                <a href="http://stopcoronavirus.mcgm.gov.in/" target="_blank"> <img src="<?php echo base_url('assets1/Corona.jpg');?>"/> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                    <div class="contentbox" id='contentbox' style='margin-top: 70px;'>
                                    </div>
                            </div>
                        </section>


                        <section>
                            <div class="middle-content" role="main">
                                <!-- EPCF: Component com.sap.portal.pagebuilder.pageBuilder, nciheacpojlfhdpocnkdclhgffiblbjk -->
                                <script type="text/javascript">
                                    /* <![CDATA[ */ EPCM.raiseEvent("urn:com.sapportals:navigation", "AddNavTargetAllowDuplicate", {
                                        URL: "navurl://90ec120709501f6663a168c2f4c2c305",
                                        title: "मुंबई\x20विषयी",
                                        params: "",
                                        context: "",
                                        pathIndexes: "0,0",
                                        fullURL: "ROLES://portal_content/MCGM/com.mcgm.roles.Roles/com.mcgm.home.home/com.mcgm.aboutmumbai",
                                        postParams: "",
                                        navMode: "0",
                                    });
                                    try {
                                        if (typeof EPCM.getSAPTop().portalTitle == "undefined") EPCM.getSAPTop().portalTitle = EPCM.getSAPTop().document.title;
                                        if (!EPCM.getSAPTop().isFFP) {
                                            EPCM.getSAPTop().document.title = "मुंबई\x20विषयी - " + EPCM.getSAPTop().portalTitle;
                                            document.title = "मुंबई\x20विषयी - " + EPCM.getSAPTop().portalTitle;
                                        }
                                    } catch (e) {} /* ]]> */
                                </script>
                                <script type="text/javascript">
                                    /* <![CDATA[ */ EPCM.raiseEvent("urn:com.sapportals:navigation", "SetHierarchyPosition", {
                                        context: "navurl://90ec120709501f6663a168c2f4c2c305",
                                        launch: "navurl://90ec120709501f6663a168c2f4c2c305",
                                    }); /* ]]> */
                                </script>
                                <script type="text/javascript">
                                    /* <![CDATA[ */ try {
                                        EPCM.getSAPTop().pageTitleBar.Update();
                                    } catch (e) {} /* ]]> */
                                </script>
                                <script type="text/javascript">
                                    var emptyDocumentUrl = "/com.sap.portal.pagebuilder/html/EmptyDocument.html";
                                </script>

                                <!-- EPCF: Component com.sap.portal.layouts.default.fullWidth, ahkanblneglipenillfalhhgffiblbjp -->

                                <script type="text/javascript">
                                    pageSupport.addPageId(
                                        "pcd:portal_content/MCGM/com.mcgm.layoutfolder.layouts/com.mcgm.desktop.mcgmlightDesktop/frameworkPages/com.mcgm.framework.mcgm_framework/com.sap.portal.lightinnerpage",
                                        "1",
                                        "local"
                                    );
                                    pageSupport._addIvuPageId(
                                        "pcd\x3aportal_content\x2fMCGM\x2fcom.mcgm.layoutfolder.layouts\x2fcom.mcgm.desktop.mcgmlightDesktop\x2fframeworkPages\x2fcom.mcgm.framework.mcgm_framework\x2fcom.sap.portal.lightinnerpage\x2fcom.sap.portal.lightcontentarea",
                                        "page1ivu0"
                                    );
                                    pageSupport._addIViewBank("page1ivu0", new iviewBank("", "", pageSupport.EMBEDDED, 1, "1", "", "GET", "false"));
                                </script>

                                <script defer="defer" language="JavaScript">
                                    ur_system.is508 = false;
                                    ur_language = "mr";
                                </script>
                                <script defer="defer">
                                    sapUrMapi_init();
                                </script>
                                <table width="100%" height="" cellspacing="0" cellpadding="0">
                                    <tbody>
                                        <tr>
                                            <td valign="top">
                                                <table style="width: 100%;" cellspacing="0" cellpadding="0">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <!-- EPCF: Component com.sap.portal.navigation.contentarea.light, jconphcfnojnflilhnbpojhgffiblbjm -->
                                                                <script type="text/javascript">
                                                                    if (self.EPCM) {
                                                                        EPCM.relaxDocumentDomain();
                                                                    } else {
                                                                        var d = window.location.hostname;
                                                                        if (d.search(/^\d+\.\d+\.\d+\.\d+$/) >= 0) {
                                                                        } else {
                                                                            var l = d.indexOf(".");
                                                                            if (l >= 0) {
                                                                                d = d.substr(l + 1);
                                                                            }
                                                                        }
                                                                        if (document.domain != d) {
                                                                            document.domain = d;
                                                                        }
                                                                    }
                                                                </script>
                                                                <script type="text/javascript">
                                                                    workArea.iviewId = "pcd:portal_content/MCGM/com.mcgm.roles.Roles/com.mcgm.home.home/com.mcgm.aboutmumbai";
                                                                    workArea.isPage = true;
                                                                    workArea.refreshUrl =
                                                                        "\x2firj\x2fservlet\x2fprt\x2fportal\x2fprtpos\x2fcom\x21252esap\x21252eportal\x21252enavigation\x21252eportallauncher\x21252eanonymous.pcd\x21253aportal\x21255fcontent\x21252fMCGM\x21252fcom\x21252emcgm\x21252elayoutfolder\x21252elayouts\x21252fcom\x21252emcgm\x21252edesktop\x21252emcgmlightDesktop\x21252fframeworkPages\x21252fcom\x21252emcgm\x21252eframework\x21252emcgm\x21255fframework.com\x21252esap\x21252eportal\x21252elightinnerpage.com\x21252esap\x21252eportal\x21252elightcontentarea\x217brefresh\x217d\x2d\x2d\x2d\x2fprttarget\x2fpcd\x21253aportal_content\x21252fMCGM\x21252fcom\x21252emcgm\x21252elayoutfolder\x21252elayouts\x21252fcom\x21252emcgm\x21252edesktop\x21252emcgmlightDesktop\x21252fframeworkPages\x21252fcom\x21252emcgm\x21252eframework\x21252emcgm_framework.com\x21252esap\x21252eportal\x21252elightinnerpage.com\x21252esap\x21252eportal\x21252elightcontentarea\x2fprtroot\x2fcom.sap.portal.navigation.portallauncher.anonymous";
                                                                    if (typeof pageTitleBar != "undefined") {
                                                                        pageTitleBar.enableExpand();
                                                                        pageTitleBar.enableRefresh();
                                                                        pageTitleBar.enablePersonalize();
                                                                        pageTitleBar.disableHelp();
                                                                        pageTitleBar.enableDetails();
                                                                    }
                                                                    workArea.method = "GET";
                                                                </script>
                                                                <!-- EPCF: Component com.sap.portal.pagebuilder.pageBuilder, mbijgpoabinhijminckicnhgffiblbjn -->

                                                                <script type="text/javascript">
                                                                    var emptyDocumentUrl = "/com.sap.portal.pagebuilder/html/EmptyDocument.html";
                                                                </script>

                                                                <!-- EPCF: Component com.sap.portal.layouts.default.fullWidth, cnjhkimlkbajbipaemoeijhgffiblbjo -->

                                                                <script type="text/javascript">
                                                                    pageSupport.addPageId("pcd:portal_content/MCGM/com.mcgm.roles.Roles/com.mcgm.home.home/com.mcgm.aboutmumbai", "0", "local");
                                                                    pageSupport._addIvuPageId("pcd\x3aportal_content\x2fMCGM\x2fcom.mcgm.roles.Roles\x2fcom.mcgm.home.home\x2fcom.mcgm.aboutmumbai\x2faboutmcgm", "page0ivu0");
                                                                    pageSupport._addIViewBank("page0ivu0", new iviewBank("", "", pageSupport.EMBEDDED, 1, "0", "", "GET", "false"));
                                                                </script>

                                                                <script defer="defer" language="JavaScript">
                                                                    ur_system.is508 = false;
                                                                    ur_language = "mr";
                                                                </script>
                                                                <script defer="defer">
                                                                    sapUrMapi_init();
                                                                </script>
                                                                <table width="100%" height="" cellspacing="0" cellpadding="0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td valign="top">
                                                                                <table style="width: 100%;" class="prtlPageConF" cellspacing="0" cellpadding="0">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <!-- EPCF: Component MCGM.AboutMCGM, jfblljkldlfggicalbpjjbhgffiblbjn -->

                                                                                                <script type="text/javascript" language="JavaScript">
                                                                                                    (function (i, s, o, g, r, a, m) {
                                                                                                        i["GoogleAnalyticsObject"] = r;
                                                                                                        (i[r] =
                                                                                                            i[r] ||
                                                                                                            function () {
                                                                                                                (i[r].q = i[r].q || []).push(arguments);
                                                                                                            }),
                                                                                                            (i[r].l = 1 * new Date());
                                                                                                        (a = s.createElement(o)), (m = s.getElementsByTagName(o)[0]);
                                                                                                        a.async = 1;
                                                                                                        a.src = g;
                                                                                                        m.parentNode.insertBefore(a, m);
                                                                                                    })(window, document, "script", "//www.google-analytics.com/analytics.js", "ga");

                                                                                                    ga("create", "UA-53444366-1", "auto");
                                                                                                    ga("send", "pageview");
                                                                                                </script>

                                                                                               
                                                                                                
                                                                                                

                                                                                                <div id="unsuccesss" style='color: blue;'></div>
                                                                                                <div id="containers" class="left" style='margin-top: 42px;'>
                                                                                                
                                                                                                  <?php 
    
                                                                                                    $coll = json_encode($value, true);
                                                                                                    echo '<div id="data">' . $coll . '</div>';


                                                                                                     $allData = json_encode($data, true);

                                                                                                     echo '<div id="allData">' . $allData . '</div>'; 

                                                                                                   ?>
                                                                                                      <div id="map"></div>
                                                                                                   <div id='show_data'></div>
                                                                                                  
                                                                                                  

                                                                                                </div>
                                                                                               <div id="container" class="left" style='margin-top: 42px;'>
                                                                                               </div>
                                                                                                 <section>
                                                                                                  <div class="right quicklinks-main" role="article">
                                                                                                    <div class="contentbox">
                                                                                                      <div class="heading">
                                                                                                        <header>
                                                                                                          <h1 id="cbx-r1">Login Here</h1>
                                                                                                        </header>
                                                                                                      </div>
                                                                                                      <div class="login-form">
                                                                                                        <form id="login-form" method="POST">
                                                                                                           <div class="form-group">
                                                                                                            <label style='height: 10px'>Email address</label>
                                                                                                            <input type="email" class="form-control" name="email" placeholder="Email" style="height: 25px;font-size: 12px;width: 160px;">
                                                                                                          </div>
                                                                                                          <div class="form-group">
                                                                                                            <label>Password</label>
                                                                                                            <input type="password" class="form-control" name="password" placeholder="Password" style="height: 25px;font-size: 12px;width: 160px;">
                                                                                                          </div>
                                                                                                          <div id="successs" style='color: blue;'></div>
                                                                                                          <div id="errorr" style='color: red;'></div>
                                                                                                          <div class="checkbox">
                                                                                                            <label>
                                                                                                              <input type="checkbox"> Remember Me
                                                                                                            </label>
                                                                                                            <label class="pull-right">
                                                                                                                      <a href="#" style='font-size: 10px;'>Forgotten Password?</a>
                                                                                                            </label>
                                                                                                          </div>
                                                                                                          <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" style='border-radius: 15px;font-size: 10px;height: 30px;width: 80px;margin-left: 25px;padding: 2px;'>Sign in</button>
                                                                                                          <div id="response"></div>
                                                                                                        </form>
                                                                                                      </div>
                                                                                                      <div class="content">
                                                                                                        <ul class="quicklinks-sidebar"></ul>
                                                                                                        <div class="linked-content">
                                                                                                            <a href="https://portal.mcgm.gov.in/irj/portal/anonymous/whatsnew" title="...more from New updates" class="read-more">
                                                                                                                …&nbsp;Know More&nbsp;››
                                                                                                            </a>
                                                                                                        </div>
                                                                                                      </div>
                                                                                                    </div>
                                                                                                  </div>
                                                                                                </section>
                                                                                                
                                                                                                <script src="<?php echo base_url('assets1/blueimp-gallery.js');?>"></script>
                                                                                                <script src="<?php echo base_url('assets1/blueimp-gallery-indicator.js');?>"></script>
                                                                                                <script src="<?php echo base_url('assets1/blueimp-gallery-config.js');?>"></script>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <script type="text/javascript">
                                    if (!self.containers) {
                                        containers = [];
                                    }
                                    var top = { numOfIViews: 2 };
                                    containers["top"] = top;
                                </script>
                            </div>
                        </section>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </main>
            <footer>
                <div class="footer" role="contentinfo">
                    <div class="footlinks">
                        <ul>
                        </ul>
                        <span class="w3c">
                        </span>
                    </div>

                    <div class="stats">
                        <div id="social-connect">
                        </div>

                        <style>
                            #ttlhts,
                            #dlyhts {
                                font-size: 12px;
                            }
                        </style>
                        <script type="text/javascript">
                            var dhc = "" + 3733;
                            var hc = "" + 389246;
                            var mr = 1;
                            var digits_mr = ["\u0966", "\u0967", "\u0968", "\u0969", "\u096A", "\u096B", "\u096C", "\u096D", "\u096E", "\u096F"];
                            var digits_en = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
                            var dhcv = "";
                            var hcv = "";
                            function hits_daily(dhc) {
                                for (i = 0; i < dhc.length; i++) {
                                    if (mr) {
                                        dhcv += digits_mr[dhc.substring(i, i + 1)];
                                    } else {
                                        dhcv += digits_en[dhc.substring(i, i + 1)];
                                    }
                                }
                                document.getElementById("dlyhts").innerHTML = dhcv;
                            }

                            function hits_total(hc) {
                                for (i = 0; i < hc.length; i++) {
                                    if (mr) {
                                        hcv += digits_mr[hc.substring(i, i + 1)];
                                    } else {
                                        hcv += digits_en[hc.substring(i, i + 1)];
                                    }
                                }
                                document.getElementById("ttlhts").innerHTML = hcv;
                            }
                        </script>
                        <div id="website-stats">
                        </div>

                        <div id="toTop" style="display: none;" aria-label="Go to Top of Page"></div>
                    </div>
                    <script src="<?php echo base_url('assets1/redirect.js');?>" type="text/javascript"></script>
                    <script src="<?php echo base_url('assets1/smartmenu-config.js');?>" type="text/javascript"></script>
                    <script type="text/javascript">
                        function OpenWin(FAQ_path) {
                            window.open(FAQ_path, "MCGM", "status=0,toolbar=0,location=0,menubar=0,resizable=1,scrollbars=1");
                        }
                    </script>
                </div>
            </footer>
        </div>
        <div id="contact_modal" class="modal">
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">&times;</span>
          </div>
          <div class="modal-body">
            <form method="post" id="contact" enctype="multipart/form-data">
              <label for="fname">First Name</label>
              <input type="text" id="fname" name="firstname" placeholder="Your name..">

              <label for="lname">Last Name</label>
              <input type="text" id="lname" name="lastname" placeholder="Your last name..">

              <label for="country">Phone Number</label>
              <input type="number" id="phone" name="contact" placeholder="Your last name..">

              <label for="country">Email</label>
              <input type="email" id="email" name="email" placeholder="Your last name..">

              <label for="subject">Subject</label>
              <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
              <div class="row"> 
                  <button id="btn_uploads" class="btn btn-primary">Submit</button>
              </div>
          </form>
        </div>
        </div>
          
      </div>
    </head>
</html>
 <style type="text/css">
    #map {
      height: 502px;
      width: 660px;
      border: 1px solid blue;
    }
    #data, #allData,#show_particular_dataa {
      display: none;
    }
    body {
      padding-top: 56px;
    }
    #heading{
    text-align: center;
      color: red;
  }
  #head{
    text-align: center;
    font-size: 16px;
    color: blue;
  }
  #btn_service{
    border-radius: 8px;
    margin-left: 800px;
      margin-top: 24px;
      width: 150px;
      height: 45px;
  }
  .modal { 
  position: fixed;
  display: none; 
  max-width: 100% !important;
  max-height: 100% !important; 
  padding-top: 100px;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.4); 
  z-index: 2;
  cursor: pointer; 
  margin-top: -8px;
  margin-left: 60px;
  border-left: none;
}

* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}


.row::after {
  content: "";
  clear: both;
  display: table;
}

.container .btn {
  transform: translate(-80%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #c3c0a1;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 8px;
  text-align: center;
}

.container .btn:hover {
  background-color: black;
}


input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=email], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
.modal-content {
  position: relative;
  background-color: #FFFFFF;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 40%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.close_book {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close_book:hover,
.close_book:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #010072;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #010072;
  color: white;
}

#subject{
      width: 100%;
    height: 80px;
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<script src="jquery-3.5.1.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdtgWFU9eL69O8PFeCvteKvfOepX6W2Y8&callback=loadMap">
</script>
<script>
  var map;
  var geocoder;
  function loadMap() {
    var pune = {lat: 19.193, lng: 72.848};
    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 15,
      center: pune
    });

    var marker = new google.maps.Marker({
    });

    var cdata = JSON.parse(document.getElementById('data').innerHTML);
    geocoder = new google.maps.Geocoder();  
    
    codeAddress(cdata);

    var allData = JSON.parse(document.getElementById('allData').innerHTML);

    // $('#show_particular_dataa').val('');

    // var category = (document.getElementById('show_particular_dataa').innerHTML);
   
    showAllColleges(allData)
  }

  function showAllColleges(allData) {
  var infoWind = new google.maps.InfoWindow;
  Array.prototype.forEach.call(allData, function(data){
    var content =document.createElement('div'); 
    content.style.width = '400px'
    var strong = document.createElement('strong');
    strong.className = "view_link";
    strong.id = data.id;
    strong.style.cssText = 'cursor: pointer;';
    strong.onclick = function(){
                        $.ajax({
                          url:"<?php echo base_url(); ?>/add_service_station/show_data/"+data.id,
                          type: "POST",
                          processData:false,
                          success: function (result) {
                            $("#show_data").html(result);
                            $('html,body').animate({
                            scrollTop: $(".container").offset().top},
                            'slow');
                            behavior: 'smooth' 
                          }
                        });
                      };
    var str = data.store_ref_address;
    strong.innerHTML = str;

    var img = document.createElement('img');
    img.src ="<?php echo base_url('images/profile/')?>"+data.profile;
    img.style.cssText = 'padding:0px 10px';
    img.style.width = '100px';
    img.style.float = 'left';

    content.appendChild(img);
    
    content.appendChild(strong);
   

    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(data.location_latitude, data.location_longitude),
        map: map
      });

      marker.addListener('mouseover', function(){
        infoWind.setContent(content);
        infoWind.open(map, marker);
      })
    })
  }

  function codeAddress(cdata) {
     Array.prototype.forEach.call(cdata, function(data){
      if (status == 'OK') {
        map.setCenter(results[0].geometry.location);
        var points = {};
        updateCollegeWithLatLng(points);
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });
  }
  function myfunction()
  {
  $('#contact_modal').show();
  }
  $( ".close" ).click(function() {
    $('#contact_modal').hide();
  });
  function mycategories(id,ids){
    if(ids == 0){
        var detail = 'default';
    }else{
        var detail = ids;
    }
    $.ajax({
      url:"<?php echo base_url(); ?>/add_service_station/show_particular_categories",
      type: "POST",
      data : {id:id,'detail':detail},
      success: function (result) {
        console.log(result);
        $('#container').html(result);
        $('#containers').remove();
      }
    });
  }

  function show_categories(id,detail){
    alert('hiii');
    $.ajax({
      url:"<?php echo base_url(); ?>/add_service_station/show_child_categories",
      type: "POST",
      data : {id:id,'detail':detail},
      success: function (result) {
        console.log(result);
        $('#remove').remove();
        $('#containers').remove();
        $('#contentbox').html(result);
        // window.open('<?php echo base_url('add_service_station/show_particular_categories_data') ?>', '_self')
        $.ajax({
            url:"<?php echo base_url(); ?>/add_service_station/show_child_map",
            type: "POST",
            data : {id:id,'detail':detail},
            success: function (result) {
                console.log(result);
                $('#container').html(result);
            }
        });
      }
    });
  }
  $('#login-form').submit(function(e){
    e.preventDefault();
    var form = $(this).serialize();
    console.log(form);
    $.ajax({
      url: "<?php echo base_url();?>add_service_station/user_verify",
      type:"POST",
      data:form,
      processData:false,
      cache:false,
      success: function(result){
        if(result == 1){
          $('#successs').html('successfully login');
        }else{
          alert('invalid user and password');
        }
      }
    });
  });

  $('#register-form').submit(function(e){
    e.preventDefault();
    var form = $(this).serialize();
    console.log(form);
    $.ajax({
      url: "<?php echo base_url();?>add_service_station/user_registeration",
      type:"POST",
      data:form,
      processData:false,
      cache:false,
      dataType: 'json',
      success: function(result){
        console.log(result.type);
        if(result.type == 'warning'){
          swal('email already exist');
        }else if(result.type == 'success'){
           swal('successfully added');
        }else{
          swal('not uploaded');
        }
      }
    });
  });
</script>

<script type="text/javascript">


    // Datepicker
        // $('.fc-datepicker').datepicker({
        //   showOtherMonths: true,
        //   selectOtherMonths: true,
        //   dateFormat: 'dd/mm/yy' 
        // });
//   $('#bidding_amt').on('change',function(){
//     var coins = $('#bidding_amt').val();
//       console.log(coins);
//         $.ajax({
//         url: "<?php echo base_url(); ?>/user/userDashboard/fetch_winn_coin",
//         type: "POST",
//         data:{coins:coins},
//         dataType: 'json',
//         cache:false,
//         success: function (result) {
//           console.log(result);
//           $('#winning_amt').val(result);
//         },
//       });
//   });

//     $('#bidding_apply').submit(function(e){
//         e.preventDefault();
//         var newdate = ($('#bidding_date').val()).split("-").reverse().join("/");
//         var selected_date_time = (newdate).concat(' ',($('#bidding_time').val()));
//         var current_date_time = ($('#current_date').val()).concat(' ',($('#current_time').val()));
//         var dran_number = $('#dran_number').val();
//     if(selected_date_time < current_date_time){
//       alert('please bidding for future date and time');
//       return false;
//     }
//         if(dran_number.length != 4 ){
//             alert('Exact 4 gigit number you should enter');
//             return false;
//         }
//         var form = $(this).serialize();
//         console.log(form);
//         $.ajax({
//             url:"<?php echo base_url(); ?>user/userDashboard/insert_bidding", 
//             type: "POST",
//             data:form,
//             dataType:'json',
//             success:function(result){
//                 console.log(result.type);
//                 if(result.type == 'success'){
//                     $('#myModal').modal('hide');
//                     swal('successfully added coin.',{
//                         icon:"success"});
//                     $('#coin_insert').trigger("reset");
//                     $('#table').DataTable().ajax.reload();
//                 }
//                 else{
//                   alert(result.msg)
//                 }
//             }
//         });
//     });

//     $(document).ready(function() {
//         $('#table').DataTable({
//          "aLengthMenu": [[10, 25, 50, 100, 500, 1000, 2000, 5000], [10, 25, 50, 100, 500, 1000, 2000, 5000]],
//          dom: 'lBfrtip',
//         "processing": true,
//         "serverSide": true,
//         "pageLength": 10,
//         "language": {
//                 "processing": "<span class='col-teal' style='font-size:16px;back'> </span>",
//         },
//         responsive: true,
//         "buttons": [
//          {
//             extend: 'pageLength',
//             text: 'Show'
//            },
//              {
//                 extend: 'excel',
//                 exportOptions:
//                 {
//                     columns: [ 0, 1]
//                 },
//             },
//              {
//                 extend: 'csv',
//                 exportOptions: {
//                     columns: [ 0, 1]
//                 }
//             },
//         ],
//         "ajax":{
//            url:"<?php echo base_url(); ?>user/userDashboard/get_user_data", 
//             type: "POST",
//             error: function(response){
//               console.log(response);
//             }
//           }
//         });
//     });
// </script>