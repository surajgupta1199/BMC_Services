<?php  if (empty($sarvice_data)) { ?>
<div class="card">
    <div class="card-header"><strong>Service Registration</strong><small> Form</small></div>
    <div class="card-body card-block row">
        <form id="add_service_station_form">
            <div class="form-group col-4">
                <label for="company" class="form-control-label">Service Title</label>
                <input type="text" id="company" name="service_head" placeholder="Enter Service Title" class="form-control" required />
            </div>

            <div class="form-group col-4">
                <label for="place" class="form-control-label">Category</label>
                <select class="form-control"  name="place" id="place" >
                    <option value=""selected disabled>Select Class</option>
                    <?php 
                    foreach($distinct_cat as $row){
                        ?>
                    <option value= <?php echo $row['id']; ?>><?php echo $row['category_name']; ?></option> 
                <?php }?>
               
                </select>
            </div>  

            
            <div class="form-group col-4">
                <label for="pincode" class="form-control-label">Pincode</label>
                <input type="number" id="pincode" name="pincode" placeholder="Pincode" class="form-control" required />
            </div>

            <div class="form-group col-4">
                <label for="manager_name" class="form-control-label">Manager Name</label>
                <input type="text" id="manager_name" name="manager_name" placeholder="Enter..." class="form-control" required />
            </div>

            <div class="form-group col-4">
                <label for="manager_email" class="form-control-label">Manager Email</label>
                <input type="email" id="manager_email" name="manager_email" placeholder="Enter..." class="form-control" required />
            </div>

            <div class="form-group col-4">
                <label for="manager_contact" class="form-control-label">Manage Contact</label>
                <input type="number" id="manager_contact" name="manager_contact" placeholder="Enter..." class="form-control" required />
            </div>

            <div class="form-group col-4">
                <label for="pincode" class="form-control-label">Ward No.</label>
                <!-- <input type="text" id="ward_number" name="ward_number" placeholder="Ward Number" maxlength="10" class="form-control" required /> -->
                <select class="form-control"  name="place" id="place" >
                    <option value=""selected disabled>Select Ward.IF not please add ward</option>
                    <?php 
                    foreach($ward as $row){
                        ?>
                    <option value= <?php echo $row['ward_number']; ?>><?php echo $row['ward_number']; ?></option> 
                <?php }?>
               
                </select>
            </div>

            <div class="form-group col-4">
                <label for="city" class="form-control-label">City</label>
                <input type="text" id="city" name="city" placeholder="Enter city" class="form-control" required />
            </div>

            <div class="form-group col-4">
                <label for="nearby_location" class="form-control-label">Near by Location</label>
                <input type="text" id="nearby_location" name="nearby_location" placeholder="Enter Near by Location" class="form-control" required />
            </div>


            <div id='type_1'></div>

            <div class="form-group col-6" id="amount" style="display:none">
              <label for="place" class="form-control-label">Amount</label>
               <select type="text" name="amount_services" id="amount_services" class="form-control selectpicker">
                  <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                    <option disabled selected value> -- select an option -- </option>
                    <option value="paid">Paid</option>
                    <option value="unpaid">Unpaid</option>
                  </div>
                </select>
            </div>

            <div class="form-group col-6">
                <label for="state" class="form-control-label">State</label>
                <input type="text" id="state" name="state" placeholder="Enter State name" class="form-control" required />
            </div>
             <div class="form-group col-6">
                <label for="state" class="form-control-label">Profile</label>
                <img id="profile_upload" src="#" style="width: 50px;" alt="your image">
                <input type="file" name="profile" id="profile" onchange="readURL(this);" multiple accept=" .jpg, .jpeg, .png, .gif">
            </div>

            <div class="form-group col-3">
                <label for="location_latitude" class="form-control-label">Latitude</label>
                <input type="text" id="location_latitude" name="location_latitude" placeholder="Latitude" class="form-control" required />
            </div>

            <div class="form-group col-3">
                <label for="location_longitude" class="form-control-label">Longitude</label>
                <input type="text" id="location_longitude" name="location_longitude" placeholder="Longitude" class="form-control" required />
            </div>

            <div class="form-group col-3">
                <label for="working_hour_from" class="form-control-label">From</label>
                <input type="time" id="working_hour_from" name="working_hour_from" placeholder="From" class="form-control" required />
            </div>
            <div class="form-group col-3">
                <label for="working_hour_to" class="form-control-label">To</label>
                <input type="time" id="working_hour_to" name="working_hour_to" placeholder="To" class="form-control" required />
            </div>
            <div class="form-group col-6">
                <input id="pac-input" class="controls form-control" type="text" placeholder="Search Box" />
                <div id="myMap"></div>
              <textarea class="materialize-textarea" name="store_ref_address" id="store_ref_address" readonly="readonly"/></textarea>
            </div>
            <div class="form-group float-right">
                <button type="submit" class="btn btn-success text-left m-r-30">Submit</button>
            </div>
        </form>
    </div>
</div>

<?php 
        }else{
     ?>

<div class="card">
    <div class="card-header"><strong>Edit Service Registration</strong><small> Form</small></div>
    <div class="card-body card-block row">
        <form id="edit_service_station_form">
            <input type="text" name="id" value="<?php echo $sarvice_data['id'] ?>" hidden />
            <div class="form-group col-6">
                <label for="company" class="form-control-label">Service Title</label>
                <input type="text" id="company" name="service_head" value="<?php echo $sarvice_data['service_head'] ?>" placeholder="Enter Service Title" class="form-control" required />
            </div>

             <div class="form-group col-6">
                <label for="place" class="form-control-label">Category</label>
               <select class="form-control"  name="place" id="place_1" >
                    <!-- <option value=""selected disabled>Select Class</option> -->
                    <?php 
                    foreach($distinct_cat as $row){
                        ?>
                        
                    
                    
                    <option <?php if($sarvice_data['place'] == $row['id']) echo 'selected="selected"'; ?> value= <?php echo $row['id']; ?>><?php echo $row['category_name']; ?></option> 
              
                <?php }?>
               
                </select>
            </div>

            <div id='view_type_1'></div>

            <div class="form-group col-6" id="type2">
              <label for="place" class="form-control-label">Type</label>
               <select type="text" name="type" id="type" class="form-control selectpicker">
                  <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                    <option value="" selected disabled>not selected</option>
                    <?php foreach($type as $rows){?>
                    <option <?php if($sarvice_data['type'] == $rows['id']) echo 'selected="selected"'; ?> value= <?php echo $rows['id']; ?>><?php echo $rows['category_name']; ?></option>
                <?php }?>
                  </div>
                </select>
            </div>

            <div class="form-group col-6" id="amount">
              <label for="place" class="form-control-label">Amount</label>
               <select type="text" name="amount_services" id="amount_services" class="form-control selectpicker">
                  <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                    <option value="paid" <?php if($sarvice_data['amount_services'] == "paid") echo 'selected="selected"';?>>Paid</option>
                    <option value="unpaid" <?php if($sarvice_data['amount_services'] == "unpaid") echo 'selected="selected"';?>>Unpaid</option>
                  </div>
                </select>
            </div>

            <div class="form-group col-6">
                <label for="pincode" class="form-control-label">Pincode</label>
                <input type="number" id="pincode" name="pincode" value="<?php echo $sarvice_data['pincode'] ?>" placeholder="Pincode" class="form-control" required />
            </div>

             <div class="form-group col-6">
                <label for="manager_name" class="form-control-label">Manager Name</label>
                <input type="text" id="manager_name" name="manager_name" value="<?php echo $sarvice_data['manager_name'] ?>" placeholder="Enter..." class="form-control" required />
            </div>

            <div class="form-group col-6">
                <label for="manager_email" class="form-control-label">Manager Email</label>
                <input type="email" id="manager_email" name="manager_email" value="<?php echo $sarvice_data['manager_email'] ?>" placeholder="Enter..." class="form-control" required />
            </div>

            <div class="form-group col-6">
                <label for="manager_contact" class="form-control-label">Manage Contact</label>
                <input type="number" id="manager_contact" name="manager_contact" value="<?php echo $sarvice_data['manager_contact'] ?>" placeholder="Enter..." class="form-control" required />
            </div>

            <div class="form-group col-6">
                <label for="nearby_location" class="form-control-label">Near by Location</label>
                <input type="text" id="nearby_location" name="nearby_location" value="<?php echo $sarvice_data['nearby_location'] ?>" placeholder="Enter Near by Location" class="form-control" required />
            </div>

            <div class="form-group col-6">
                <label for="city" class="form-control-label">City</label>
                <input type="text" id="city" name="city" value="<?php echo $sarvice_data['city'] ?>" placeholder="Enter city" class="form-control" required />
            </div>

            <div class="form-group col-6">
                <label for="state" class="form-control-label">State</label>
                <input type="text" id="state" name="state" value="<?php echo $sarvice_data['state'] ?>" placeholder="Enter State name" class="form-control" required />
            </div>

            <?php
            if($sarvice_data['profile'] == ""){?>
            <div class="form-group col-6">
                <label for="state" class="form-control-label">Profile</label>
                <img id="blah" src="#" style="width: 50px;" alt="your image">
                 <input type="file" name="profile" id="profile" onchange="UploadUrl(this);" multiple accept=" .jpg, .jpeg, .png, .gif">
            </div>
          <?php }else{?>
            <div class="form-group col-6">
                <label for="state" class="form-control-label">Profile</label>
                <img id="blah" src="<?php echo base_url('images/profile/').$sarvice_data["profile"]; ?>" style="width: 80px;" alt="Italian Trulli">
                <input type="file" name="profile" id="profile" onchange="UploadUrl(this);" multiple accept=" .jpg, .jpeg, .png, .gif">
            </div>
          <?php }?>

            <div class="form-group col-3">
                <label for="location_latitude" class="form-control-label">Latitude</label>
                <input type="text" id="location_latitude" name="location_latitude" readonly="readonly" value="<?php echo $sarvice_data['location_latitude'] ?>" placeholder="Latitude" class="form-control" required />
            </div>

            <div class="form-group col-3">
                <label for="location_longitude" class="form-control-label">Longitude</label>
                <input type="text" id="location_longitude" name="location_longitude" readonly="readonly" value="<?php echo $sarvice_data['location_longitude'] ?>" placeholder="Longitude" class="form-control" required />
            </div>
            

            <div class="form-group col-3">
                <label for="working_hour_from" class="form-control-label">From</label>
                <input type="time" id="working_hour_from" name="working_hour_from" value="<?php echo $sarvice_data['working_hour_from'] ?>" placeholder="From" class="form-control" required />
            </div>
            <div class="form-group col-3">
                <label for="working_hour_to" class="form-control-label">To</label>
                <input type="time" id="working_hour_to" name="working_hour_to" value="<?php echo $sarvice_data['working_hour_to'] ?>" placeholder="To" class="form-control" required />
            </div>
             <div class="form-group col-6">
                <input id="pac-input" class="controls form-control" type="text" placeholder="Search Box" />
                <div id="myMap"></div>
                <!-- <input class="form-control" type="hidden" name="store_lat" id="store_lat" placeholder="Latitude" />
                <input class="form-control" type="hidden" name="store_long" id="store_long" placeholder="Longitude" /> -->
            <div class="form-group col-3">
                <label for="store_ref_address" class="form-control-label">Address</label>
                 <textarea class="materialize-textarea" name="store_ref_address" id="store_ref_address" readonly="readonly"/>"<?php echo $sarvice_data['store_ref_address'] ?>"</textarea>
            </div>
            </div>
            <div class="form-group float-right">
                <button type="submit" class="btn btn-success text-left m-r-30"id="submits">Submit</button>
            </div>
            <body onload="initialize()">
        </form>
    </div>
</div>

<?php } ?>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#add_service_station_form').on('submit', function(event){
          event.preventDefault();
          // var form = new FormData(this);
        $.ajax({
            url:"<?php echo base_url(); ?>/add_service_station/add_service_station",
            type:"POST",
            data:new FormData(this),
            contentType:false,
            cache:false,
            processData:false,
            dataType: 'json',
            success:function(result){
                console.log(result.dataType);
                if(result.type == "success"){
                    $('#add_service_station_form').trigger("reset");
                    swal('info!','successfully inserted',"success");
                    location.href = "<?php echo base_url(); ?>/add_service_station/view_service_station";
                   /* $("#success_alert").html("Success!").after("Successfully Inserted");
                    $("#main_alert").attr("visible");*/
                }
            },
            });
            return false;
        });
        
        $("#edit_service_station_form").submit(function (event) {
            event.preventDefault();
            $.ajax({
                url: "<?php echo base_url(); ?>/add_service_station/edit_service_station",
                type: "POST",
                data:new FormData(this),
                dataType: 'json',
                processData:false,
                contentType:false,
                cache:false,
                success: function (result) {
                    console.log(result.type);
                    if (result.type == 'success') {
                        /*$("#success_alert").html("Success!").after("Successfully Updated");*/
                        swal('info!','updated successfully','success');
                        location.href = "<?php echo base_url(); ?>/add_service_station/view_service_station";
                    }
                },
            });
            return false;
        });
    });

    function UploadUrl(input) 
    {
      if(input.files && input.files[0]) 
      {
        var reader = new FileReader();
       reader.onload = function (e) 
        {
          $('#blah')
              .attr('src', e.target.result)
              .width(80)
        };
        reader.readAsDataURL(input.files[0]);
      }
    }  

    function readURL(input) 
    {
      if(input.files && input.files[0]) 
      {
        var reader = new FileReader();
       reader.onload = function (e) 
        {
          $('#profile_upload')
              .attr('src', e.target.result)
              .width(80)
        };
        reader.readAsDataURL(input.files[0]);
      }
    }   
</script>
<style>
#myMap {
height: 350px;
width: 100%;
}
 
  /*#map {
height: 100%;
  }*/
  
  html, body {
height: 100%;
margin: 0;
padding: 0;
  }
  #description {
font-family: Roboto;
font-size: 15px;
font-weight: 300;
  }

  #infowindow-content .title {
font-weight: bold;
  }

  #infowindow-content {
display: none;
  }

  #map #infowindow-content {
display: inline;
  }

  .pac-card {
margin: 10px 10px 0 0;
border-radius: 2px 0 0 2px;
box-sizing: border-box;
-moz-box-sizing: border-box;
outline: none;
box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
background-color: #fff;
font-family: Roboto;
  }

  #pac-container {
padding-bottom: 12px;
margin-right: 12px;
  }

  .pac-controls {
display: inline-block;
padding: 5px 11px;
  }

  .pac-controls label {
font-family: Roboto;
font-size: 13px;
font-weight: 300;
  }

  #pac-input {
background-color: #fff;
font-family: Roboto;
font-size: 15px;
font-weight: 300;
margin-left: 12px;
padding: 0 11px 0 13px;
text-overflow: ellipsis;
width: 400px;
  }

  #pac-input:focus {
border-color: #4d90fe;
  }

  #title {
color: #fff;
background-color: #4d90fe;
font-size: 25px;
font-weight: 500;
padding: 6px 12px;
  }
  #target {
width: 345px;
  }
</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdtgWFU9eL69O8PFeCvteKvfOepX6W2Y8&libraries=places&sensor=false&callback=initAutocomplete" async defer></script>
<script>
   
function initAutocomplete() {
var geocoder = new google.maps.Geocoder();
var infowindow = new google.maps.InfoWindow();
var marker;
var lat;
var lon;
var map;
var map = new google.maps.Map(document.getElementById('myMap'), {
  center: {lat: 19.0759837, lng: 72.8776559},
  zoom: 13,
  mapTypeId: 'roadmap'
});


var input = document.getElementById('pac-input');
var searchBox = new google.maps.places.SearchBox(input);
map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);


map.addListener('bounds_changed', function() {
  searchBox.setBounds(map.getBounds());
});

var markers = [];

searchBox.addListener('places_changed', function() {
  var places = searchBox.getPlaces();

  if (places.length == 0) {
return;
  }

  // Clear out the old markers.
  markers.forEach(function(marker) {
marker.setMap(null);
  });
  markers = [];

  // For each place, get the icon, name and location.
  var bounds = new google.maps.LatLngBounds();
  places.forEach(function(place) {
if (!place.geometry) {
  console.log("Returned place contains no geometry");
  return;
}
var icon = {
url: place.icon,
size: new google.maps.Size(71, 71),
origin: new google.maps.Point(0, 0),
anchor: new google.maps.Point(17, 34),
scaledSize: new google.maps.Size(25, 25)
};
var marker = new google.maps.Marker({
map: map,
title: place.name,
position: place.geometry.location,
animation: google.maps.Animation.DROP,
draggable: true 
});
marker.addListener('click', toggleBounce);
geocoder.geocode({'latLng': place.geometry.location }, function(results, status) {
if (status == google.maps.GeocoderStatus.OK) {
if (results[0]) {
$('#latitude,#longitude').show();
$('#store_ref_address').val(results[0].formatted_address);
/*$('#store_lat').val(marker.getPosition().lat());
$('#store_long').val(marker.getPosition().lng());*/
$('#location_latitude').val(marker.getPosition().lat());
$('#location_longitude').val(marker.getPosition().lng());
infowindow.setContent(results[0].formatted_address);
infowindow.open(map, marker);
}
}
});

google.maps.event.addListener(marker, 'dragend', function() {
geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
if (status == google.maps.GeocoderStatus.OK) {
if (results[0]) {
$('#store_ref_address').val(results[0].formatted_address);
/*$('#store_lat').val(marker.getPosition().lat());
$('#store_long').val(marker.getPosition().lng());*/
$('#location_latitude').val(marker.getPosition().lat());
$('#location_longitude').val(marker.getPosition().lng());
infowindow.setContent(results[0].formatted_address);
infowindow.open(map, marker);
}
}
});
});

if (place.geometry.viewport) {
  bounds.union(place.geometry.viewport);
} else {
  bounds.extend(place.geometry.location);
}
  });
  map.fitBounds(bounds);
});
function toggleBounce() {
  if (this.getAnimation() != null) {
      this.setAnimation(null);
  } 
  else {
      this.setAnimation(google.maps.Animation.BOUNCE);
  }
}
}
/*function initialize(){
    <?php
        foreach($sarvice_data as $row);
            echo "addMarker(new google.maps.LatLng(".$row['location_latitude'].", ".$row['location_longitude']."), map);"; 
    ?>
}*/
/*function addmarker(){
    var marker = new google.maps.Marker({
    position: Latlng,
    map: map,
    animation: google.maps.Animation.DROP
  });
  return marker;
}*/
$('#place').on('change',dosomething);
function dosomething(){
  var id = $('#place').val();
  console.log(id);
  $.ajax({
    url: "<?php echo base_url(); ?>/add_service_station/check_category",
    type: "POST",
    data:{id:id},
    dataType: 'json',
    cache:false,
    success: function (result) {
      console.log(result);
      $('#type_1').html(result);
      // $('#view_type_1').html(result);
      $('#amount').show();
    },
  });
}
$('#place_1').on('change',dosomething1);
function dosomething1(){
  var id = $('#place_1').val();
  console.log(id);
  $.ajax({
    url: "<?php echo base_url(); ?>/add_service_station/check_category",
    type: "POST",
    data:{id:id},
    dataType: 'json',
    cache:false,
    success: function (result) {
      console.log(result);
      // $('#type_1').html(result);
      $('#view_type_1').html(result);
      $('#type2').remove();
      // $('#amount').show();
    },
  });
}

</script>