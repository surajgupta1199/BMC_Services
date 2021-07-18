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

<style type="text/css">
    #map {
      height: 502px;
      width: 660px;
      border: 1px solid blue;
    }
    #data, #allData,#show_particular_dataa {
      display: none;
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
  // function my_categories(id){
  //   alert('hiii');
  //   $.ajax({
  //     url:"<?php echo base_url(); ?>/add_service_station/show_particular_categories",
  //     type: "POST",
  //     data : {id:id},
  //     success: function (result) {
  //       console.log(result);
  //       $('#container').html(result);
  //     }
  //   });
  // }
  // function show_categories(id){
  //   $.ajax({
  //     url:"<?php echo base_url(); ?>/add_service_station/show_child_categories",
  //     type: "POST",
  //     data : {id:id},
  //     success: function (result) {
  //       console.log(result);
  //       $('#remove').remove();
  //       $('#containers').remove();
  //       $('#contentbox').html(result);
  //       // window.open('<?php echo base_url('add_service_station/show_particular_categories_data') ?>', '_self')
  //       $.ajax({
  //           url:"<?php echo base_url(); ?>/add_service_station/show_child_map",
  //           type: "POST",
  //           data : {id:id},
  //           success: function (result) {
  //               console.log(result);
  //               $('#container').html(result);
  //           }
  //       });
  //     }
  //   });
  // }
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