<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Item - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-item.css" rel="stylesheet">

</head>

<body>

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
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
        <h1 class="my-4">Shop Name</h1>
        <div class="list-group">
          <a href="#" class="list-group-item active">Category 1</a>
          <a href="#" class="list-group-item">Category 2</a>
          <a href="#" class="list-group-item">Category 3</a>
        </div>
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="card mt-4">
          <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt="">
          <div class="card-body">
            <h3 class="card-title">Product Name</h3>
            <h4>$24.99</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dicta fugit fugiat hic aliquam itaque facere, soluta. Totam id dolores, sint aperiam sequi pariatur praesentium animi perspiciatis molestias iure, ducimus!</p>
            <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
            4.0 stars
          </div>
        </div>
        <!-- /.card -->

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Product Reviews
          </div>
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
            <a href="#" class="btn btn-success">Leave a Review</a>
          </div>
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>





<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  <style type="text/css">
    .container {
      height: 450px;
    }
    #map {
      height: 800px;
      width: 800px;
      border: 1px solid blue;
    }
    #data, #allData {
      display: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <align:left><h1>View Location</h1></align:left  >
    <?php 
    
      $coll = json_encode($value, true);
      echo '<div id="data">' . $coll . '</div>';


       $allData = json_encode($data, true);

       echo '<div id="allData">' . $allData . '</div>';  


     ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/vendors/bootstrap/dist/css/bootstrap.min.css">
  <!-- <div id="map"></div> -->
  <!-- <div id="map" class="col-md-6">
    <div class="row">
      <div class="col-md-4">
        </div>
      </div>
    </div>
    </div> -->
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Category Name</th>
                      <th>Parent_Name</th>
                  </tr>
                  <tbody>
                      <?php 
                      $no = 1;
                      foreach($categories as $row){
                         echo ' <tr>
                              <td>'.$no.'</td>
                              <td>'.$row['category_name'].'</td>
                              <td>'.$row['parent_name'].'</td>
                            </tr>';
                          $no++;
                      }

                      ?>
                  </tbody>
              </thead>
          </table>
        </div>
        <div class="col-md-8">
          <div id="map">
          </div>
        </div>
    </div>
      <div class="row">
      </div>
    </div>
  
</body>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdtgWFU9eL69O8PFeCvteKvfOepX6W2Y8&callback=loadMap">
</script>
</html>
<script>
  var map;
var geocoder;
function loadMap() {
  var pune = {lat: 19.032, lng: 72.8401};
    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 8,
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
    var id=data.id;
    var str = data.store_ref_address; console.log(str); var result =
    str.link("<?php echo base_url("Add_service_station/show_data/") ?>"+id);
   
    strong.innerHTML = result;

    
    content.appendChild(strong);
   
   var img = document.createElement('img');
    img.src ='img/leopard.jpg';
    img.style.width = '100px';
    content.appendChild(img);

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
