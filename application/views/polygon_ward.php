<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>

  <style type="text/css">
    #my_map {
      height: 400px;
      width: 730px;
      border: 1px solid blue;
    }
    #ward_lat_lng{
      display: none;
    }
  </style>
  
  <div id="my_map"></div>
  <?php 
    echo '<div id="ward_lat_lng">' . $data['ward_lat_lng'] . '</div>';
  ?>
</body>

<script async defer
  src="https://maps.googleapis.com/maps/api/js?callback=loadMap&key=AIzaSyDdtgWFU9eL69O8PFeCvteKvfOepX6W2Y8">
</script>
</html>

<script>
  var map;
  var geocoder;
  var objects = JSON.parse(document.getElementById('ward_lat_lng').innerHTML);
  for(var i = 0; i < objects.length; i++){
    var obj = objects[i];
    for(var prop in obj){
      if(obj.hasOwnProperty(prop) && obj[prop] !== null && !isNaN(obj[prop])){
          obj[prop] = +obj[prop];
      }
    }
  }

  result = JSON.stringify(objects, null, 2);
  console.log(JSON.parse(result));
  function loadMap() {
    var pune = {lat: 19.193, lng: 72.848};
    map = new google.maps.Map(document.getElementById('my_map'), {
      center: {
        lat: 19.193,
        lng: 72.848,
      },
      zoom: 15
    });
    var ward_lat_lng = JSON.parse(result);
    var polygon_ward = new google.maps.Polygon({
      path: ward_lat_lng,
      strokeColor: '#FF0000',
      strokeOpacity: 0.8,
      strokeWeight: 3,
      fillColor: '#FF000',
      fillOpacity:0.35
    });
    polygon_ward.setMap(map);
  }
</script>