<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  <style type="text/css">
    #map {
      height: 800px;
      width: 1600px;
      /*margin-right: 900px;
      height: 100%;
      width: 152%;*/
    }
    #data, #allData ,#ids{
      display: none;
    }
    #head1{
          text-align: center;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 id=head1>View Location</h1>
    <?php 
    
      $coll = json_encode($value, true);
      echo '<div id="data">' . $coll . '</div>';


       $allData = json_encode($data, true);
       foreach($data as $row){
        /*echo '<div id="ids">' . $row['id'] . '</div>';*/
       $id = ($row['id']);
       }
       echo '<div id="allData">' . $allData . '</div>';  
       // echo '<script>alert("Welcome to Geeks for Geeks")</script>'; 


     ?>
    
  </div>
    <div id="map"></div>
</body>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdtgWFU9eL69O8PFeCvteKvfOepX6W2Y8&callback=loadMap">
</script>
</html>
<script>
  var map;
var geocoder;
function loadMap() {
  var pune = {lat: 19.1889541, lng: 72.835543};
    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 18,
      center: pune
    });

    var marker = new google.maps.Marker({
      position: pune,
      map: map
    });

    var cdata = JSON.parse(document.getElementById('data').innerHTML);
    geocoder = new google.maps.Geocoder();  
    codeAddress(cdata);

    var allData = JSON.parse(document.getElementById('allData').innerHTML);
    console.log(allData);

    showAllColleges(allData)
}

function showAllColleges(allData) { var infoWind = new google.maps.InfoWindow;
    Array.prototype.forEach.call(allData, function(data){
    var content =document.createElement('div'); 
    var strong = document.createElement('strong');
    var id =data.id;
    var str = data.store_ref_address; 
    console.log(id);
    var result = str.link("<?php echo base_url('Add_service_station/show_particular_info/')?>"+id);
    strong.innerHTML = result;
    
    content.appendChild(strong);
   
   // var img = document.createElement('img');
   //  img.src ='img/leopard.jpg';
   //  img.style.width = '100px';
   //  content.appendChild(img);

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

// <?php 
    
//       $coll = json_encode($value, true);
//       echo '<div id="data">' . $coll . '</div>';
      
//       echo '<div id="allData">' . $data . '</div>';

//       $no = 0;
//       foreach($data as $data_single){
//         $data_set[$no] = ($data_single['store_ref_address'])."</br>";
//         $no++;
//       }
//       // echo "<a href='showDateInfo.php?date=$data_set'>$coll</a><br>";
//        die;
//       echo '<div id="">' . $data . '</div>';  

//       // $allData = json_encode($data, true);
//       // echo "<a href='showDateInfo.php?date=$allData'>$allData</a><br>";
          
//      ?>
</script>