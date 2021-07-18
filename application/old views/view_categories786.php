<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Item - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


  <!-- Custom styles for this template -->
  <link href="css/shop-item.css" rel="stylesheet">

</head>

<body>
  <p class="text_align" text-align="center">
  <style type="text/css">
    /*.container {
      height: 450px;
    }*/
    .checked {
    color: orange;
    
    }
    .text_align{
        text-align: center;
        border-radius: "50px";
      }
    #map {
      height: 400px;
      width: 825px;
      border: 1px solid blue;
    }
    #data, #allData {
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
 position: fixed; /* Sit on top of the page content */
  display: none; /* Hidden by default */
  max-width: 100% !important; /* Full width (cover the whole page) */
  max-height: 100% !important; /* Full height (cover the whole page) */
  padding-top: 100px;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.4); /* Black background with opacity */
  z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
  cursor: pointer; /* Add a pointer on hover */
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

/* Clearfix (clear floats) */
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


/* Modal Content */
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

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
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

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" onclick='myfunction()' id='contact_form'>Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

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
          <input type="number" id="lname" name="lastname" placeholder="Your last name..">

          <label for="country">Email</label>
          <input type="email" id="email" name="email" placeholder="Your last name..">

          <label for="subject">Subject</label>
          <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
          <div class="row"> 
              <button id="btn_uploads" class="btn btn-primary">Upload More Image</button>
          </div>
      </form>
    </div>
    </div>
       <!-- .$row['service_head']. " ".$row['nearby_location']. " ".$row['city']. " ".$row['state'].  -->
  </div>



  <!-- Page Content -->

  <?php 
    
      $coll = json_encode($value, true);
      echo '<div id="data">' . $coll . '</div>';


       $allData = json_encode($data, true);

       echo '<div id="allData">' . $allData . '</div>';  


     ?>
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
        <h1 class="my-4">Shop Name</h1>
        <div class="list-group">
          <?php foreach($categories as $row){?>
          <a href="#" class="list-group-item"  ><?php echo $row['category_name'];?></a>
          <?php }?>
        </div>
      </div>
      <!-- /.col-lg-3 -->
      <div class="col-lg-9">
        <div class="card mt-4">
          <div id="map"></div>
        </div>
        <!-- /.card -->
        <div class="card card-outline-secondary my-4">
          <div class="card-body" id="show_data"></div>
        </div>
        <div class="card card-outline-secondary my-4">
          <div class="card-header">Product Reviews</div>
          <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
          </div>
        </div>
      </div>
      <!-- /.col-lg-9 -->
    </div>
  </div>
  <!-- /.container -->
  <div class="card">
    <div class="container" id="container">
      <div class="row">
        <div class="col-md-10">
          <div class="card">
            <div class="card-header"><strong>Rating & Review</strong><small> Form</small></div>
            <div class="card-body card-block row">
            <?php
            foreach($average as $row){?>
                <div class="row">

                  <div class="col-md-6">
                      <h3 align="center"><b><?php echo round($row,1);?></b> <i class="fa fa-star" data-rating="2" style="font-size:20px;color:#ff9f00;"></i></h3>
                      <?php 
                      foreach($rating as $row){
                      ?>
                      <p><?php echo $row['count(review)']; ?> ratings and <?php echo $row['count(ratedindex)']; ?> reviews</p>
                      <?php } ?>
                  </div>
                  <?php } ?>
                  <div class="col-md-6">

                      <?php
                      foreach($count as $row){
                      ?>
                      <h4 align="center"><?php echo $row['ratedindex']; ?> <i class="fa fa-star" data-rating="2" style="font-size:20px;color:green;"></i> Total <?php echo $row['total']; ?></h4>
                      <?php } ?>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12"> 
                  <?php
                  foreach($data as $row){?>
                          <h4><?php echo $row['ratedindex']; ?> <i class="fa fa-star" data-rating="2" style="font-size:20px;color:green;"></i> by <span><?php echo $row['email']; ?></span></h4>
                          <p><?php echo $row['review']; ?></p>
                          <hr>
                  <?php } ?>
                  </div>
                  <div>
                      <input type="number" id="service_id" name="service_id" value="<?php echo $sarvice_data['id'] ?>" hidden />
                  </div>
                </div>
            </div> 
          </div>
        </div>
      </div>
      <div class="row">
          <div class="col-md-12" style="margin-left: 80px;"> 
              <span  onmouseover="starmark(this)" onclick="starmark(this)" id="1one" style="font-size:40px;cursor:pointer;"  class="fa fa-star checked"></span>
              <span onmouseover="starmark(this)" onclick="starmark(this)" id="2one"  style="font-size:40px;cursor:pointer;" class="fa fa-star "></span>
              <span onmouseover="starmark(this)" onclick="starmark(this)" id="3one"  style="font-size:40px;cursor:pointer;" class="fa fa-star "></span>
              <span onmouseover="starmark(this)" onclick="starmark(this)" id="4one"  style="font-size:40px;cursor:pointer;" class="fa fa-star"></span>
              <span onmouseover="starmark(this)" onclick="starmark(this)" id="5one"  style="font-size:40px;cursor:pointer;" class="fa fa-star"></span>
              <br/>
              <br/>
              <div class="col-md-4">
                  <label for="full_name" class="form-control-label">Full Name</label>
                  <input type="text" id="full_name" name="full_name" placeholder="Enter Full name" class="form-control" required/>
              </div>
              <div class="col-md-4">
                  <label for="email" class="form-control-label">Email</label>
                  <input type="text" id="email" name="email" placeholder="Enter Email" class="form-control" required/>
              </div>
              <div class="form-group col-8">
                  <label for="comment" class="form-control-label">Review</label>
                  <textarea class="form-control" rows="5" placeholder="Write your review here..." name="comment" id="review" required></textarea><br>
              </div>
              <div>
                  <button onclick="result()" type="button" style="margin-top:-35px;margin-right:400px;margin-left:15px;" class="btn btn-lg btn-success">Submit</button>
              </div>
          </div>
      </div>
    </div>
  </div>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
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
    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 15,
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

    showAllColleges(allData)
}

function showAllColleges(allData) { var infoWind = new google.maps.InfoWindow;
    Array.prototype.forEach.call(allData, function(data){
    var content =document.createElement('div'); 
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
                          }
                        });
                      };
    var id  = data.id;
    var str = data.store_ref_address;

    // var result = str.text("<?php echo base_url("Add_service_station/show_data/") ?>");
   
    strong.innerHTML = str;

    var img = document.createElement('img');
    img.src ='img/leopard.jpg';
    img.style.width = '100px';
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
      // var address = '<a href="url">datas.store_ref_address</a>';
      // var address = "<a href="url">data.store_ref_address</a>";
      // var address = data.store_ref_address;
      
        if (status == 'OK') {
          map.setCenter(results[0].geometry.location);
          var points = {};
          updateCollegeWithLatLng(points);
        } else {
          alert('Geocode was not successful for the following reason: ' + status);
        }
      
  });
}

var rating="";

function starmark(item)
{
var count=item.id[0];
rating = count;
var subid= item.id.substring(1);
for(var i=0;i<5;i++)
{
if(i<count)
{
document.getElementById((i+1)+subid).style.color="orange";
}
else
{
document.getElementById((i+1)+subid).style.color="black";
}


}

}

function result()
{
    var user_rating = rating;
    var full_name = document.getElementById("full_name").value;
    var comment = document.getElementById("review").value;
    var emails = document.getElementById("email").value;
    var service_id = document.getElementById("service_id").value;
    console.log(service_id);
    $.ajax({
        url:"<?php echo base_url(); ?>/add_service_station/rating",
        type:"POST",
        data:{ratedindex:user_rating,full_name:full_name,review:comment,email:emails,service_id:service_id},
        dataType: 'json',
        success:function(data){
            console.log(data.type = "success");
            if(data.type="success"){
                swal('info!','updated successfully','success');
                
            }
            else{
                swal('info!','not updated','info');
            }
        }
    });
}
</script>