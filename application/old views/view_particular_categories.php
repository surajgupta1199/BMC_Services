<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Item - Start Bootstrap Template</title>

  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


  
  <link href="css/shop-item.css" rel="stylesheet">

</head>

<body>

  <style type="text/css">
    #my_map {
      height: 400px;
      width: 660px;
      border: 1px solid blue;
    }
    #null_dataa, #all_dataa {
      display: none;
    }
  </style>
  <div>
  <?php 
    
      $null_data = json_encode($value,true);
      echo '<div id="null_dataa">' . $null_data . '</div>';  
     $all_data = json_encode($data,true);
     echo '<div id="all_dataa">' . $all_data . '</div>';  

     ?>

          <div id="my_map"></div>
          <div id='show_dataa'></div>
  </div>
       

  <script src="jquery-3.5.1.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdtgWFU9eL69O8PFeCvteKvfOepX6W2Y8&callback=loadMap">
</script>
</html>

<script>
  var map;
var geocoder;
function loadMap() {
  var pune = {lat: 19.193, lng: 72.848};
  map = new google.maps.Map(document.getElementById('my_map'), {
    zoom: 15,
    center: pune
  });

  var marker = new google.maps.Marker({
  });

  var cdata = JSON.parse(document.getElementById('null_dataa').innerHTML);
  geocoder = new google.maps.Geocoder();  
  codeAddress(cdata);

  var allData = JSON.parse(document.getElementById('all_dataa').innerHTML);

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
                            console.log(result);
                            $('#show_dataa').html(result);
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
</script>