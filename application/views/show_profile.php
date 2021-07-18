<!DOCTYPE html>
<html>
<head>
<!-- Font Awesome Icon Library -->
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<style>
.checked {
    color: orange;
    
}
</style>
</head>
<body>
	<p class="text_align" text-align="center">
    <style>
      .text_align{
        text-align: center;
        border-radius: "50px";
      }
    </style>
  <img src="<?php echo base_url('images/admin.jpg');?>" alt="Trulli" width="400" height="333" center="center"  border-radius= "50px">
  </p>
<style>
	#container{
		margin-left: 360px;

	}
</style>
	<div class="container" id="container">
		<h>Description</h>
		<p>As the name suggests, Travelers is a free travel and tours website template for agencies interested in expanding their businesses. Never lack web presence again thanks to this spectacular and easy to use free tool that will put you on top. Travelers is full of amazing features and great characteristics that will keep you going strong on the web</p>
		<p>Core features of Travelers are full-screen slider with parallax effect and call-to-action button, unique testimonials slider, video support and a full-blown booking form. Additionally, Travelers also treats you to neat destination, discount, about and blog pages. Indeed, you can also start a travel blog with Travelers and put your travel agency ahead of the competition effortlessly. If you would like to stand out from the masses and emphasize your professionalism and mind-bending travel destinations, do it in style with Travelers.</p>
		<div class="row">
	  		<div class="col-md-8">
				<div class="card">
	   				<div class="card-header"><strong>View Service Registration</strong><small> Form</small></div>
	    				<div class="card-body card-block row">
	        				<form id="edit_service_station_form">
	            				<input type="text" name="id" value="<?php echo $sarvice_data['id'] ?>" hidden />
	            					<div class="col-md-6">
						                <label for="company" class="form-control-label">Service Head</label>
						                <input type="text" id="company" name="service_head" value="<?php echo $sarvice_data['service_head'] ?>" placeholder="Enter Service Head" class="form-control" readonly="readonly" />
						            </div>

						            <div class="col-md-6">
						                <label for="pincode" class="form-control-label">Pincode</label>
						                <input type="number" id="pincode" name="pincode" value="<?php echo $sarvice_data['pincode'] ?>" placeholder="Pincode" class="form-control" readonly="readonly" />
						            </div>

						            <div class="col-md-6">
						                <label for="place" class="form-control-label">Place</label>
						                <input type="text" id="place" name="place" value="<?php echo $sarvice_data['place'] ?>" placeholder="Enter Place" class="form-control" readonly="readonly" />
						            </div>

						            <div class="col-md-6">
						                <label for="nearby_location" class="form-control-label">Near by Location</label>
						                <input type="text" id="nearby_location" name="nearby_location" value="<?php echo $sarvice_data['nearby_location'] ?>" placeholder="Enter Near by Location" class="form-control" readonly="readonly" />
						            </div>

						            <div class="col-md-6">
						                <label for="city" class="form-control-label">City</label>
						                <input type="text" id="city" name="city" value="<?php echo $sarvice_data['city'] ?>" placeholder="Enter city" class="form-control" readonly="readonly" />
						            </div>

						            <div class="col-md-6">
						                <label for="state" class="form-control-label">State</label>
						                <input type="text" id="state" name="state" value="<?php echo $sarvice_data['state'] ?>" placeholder="Enter State name" class="form-control" readonly="readonly" />
						            </div>
	             
						            <div class="col-md-6">
						                <label for="store_ref_address" class="form-control-label">Address</label>
						                <textarea  style="margin-top:5px;" class="form-control" rows="3" readonly="readonly" id="comment" placeholder="Enter your review">"<?php echo $sarvice_data['store_ref_address'] ?>"</textarea>
						                <!--  <textarea class="form-control"  name="store_ref_address" id="store_ref_address" readonly="readonly"/>"<?php echo $sarvice_data['store_ref_address'] ?>"</textarea> -->
						            </div>
	            				</div>
	        				</form>
	    				</div>
					</div> 
				</div>
			</div>
		</div>
	</div>	
	<div class="container" id="container">
		<div class="col-md-4 ">
			<h3>Rating & Review</h3>
			<div class="row">
				<div class="col-md-8">
					<?php
					foreach($average as $row){
						?>
						
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
							<div class="col-md-6" style="float:right">
								<?php
								foreach($count as $row){
								?>
								<h4 align="center"><?php echo $row['ratedindex']; ?> <i class="fa fa-star" data-rating="2" style="font-size:20px;color:green;"></i> Total <?php echo $row['total']; ?></h4>
								<?php } ?>
								
			
							</div>
						</div>
					<!-- print_r($average);
					die; -->
				
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">	
				<?php
					foreach($data as $row){
				?>
						<h4><?php echo $row['ratedindex']; ?> <i class="fa fa-star" data-rating="2" style="font-size:20px;color:green;"></i> by <span style="font-size:14px;"><?php echo $row['email']; ?></span></h4>
						<p><?php echo $row['review']; ?></p>
						<hr>
				<?php	
					}
						
				?>
				</div>
			</div>
		</div>
	</div>

	


			<!-- SELECT count(*) as Total,ratedindex from user_rating group by ratedindex order by ratedindex desc -->


  <div class="container" id="container">
	<span  onmouseover="starmark(this)" onclick="starmark(this)" id="1one" style="font-size:40px;cursor:pointer;"  class="fa fa-star checked"></span>
	<span onmouseover="starmark(this)" onclick="starmark(this)" id="2one"  style="font-size:40px;cursor:pointer;" class="fa fa-star "></span>
	<span onmouseover="starmark(this)" onclick="starmark(this)" id="3one"  style="font-size:40px;cursor:pointer;" class="fa fa-star "></span>
	<span onmouseover="starmark(this)" onclick="starmark(this)" id="4one"  style="font-size:40px;cursor:pointer;" class="fa fa-star"></span>
	<span onmouseover="starmark(this)" onclick="starmark(this)" id="5one"  style="font-size:40px;cursor:pointer;" class="fa fa-star"></span>
	<br/>
	<br/>
	<div class="form-group col-6">
		<label for="full_name" class="form-control-label">Full Name</label>
		<input type="text" id="full_name" name="full_name" placeholder="Enter Full Name">
	</div>
	<div class="form-group col-6">
		<label for="email" class="form-control-label">Email</label>
		<input type="email" id="email" name="email" placeholder="Enter Email">
	</div>
	<div class="form-group col-6">
		<label for="comment" class="form-control-label">Review</label>
		<textarea class="form-control" rows="5" placeholder="Write your review here..." name="comment" id="review" required></textarea><br>
	</div>
	<div class="form-group float-right">
		<button  onclick="result()" type="button" style="margin-top:10px;margin-left:5px;" class="btn btn-lg btn-success">Submit</button>
	</div>
</div>
</body>
<script>
var rating="";

function starmark(item)
{
var count=item.id[0];
rating = count;
// sessionStorage.starRating = count;
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
	$.ajax({
		url:"<?php echo base_url(); ?>/add_service_station/rating",
        type:"POST",
        data:{ratedindex:user_rating,full_name:full_name,review:comment,email:emails},
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
</html>