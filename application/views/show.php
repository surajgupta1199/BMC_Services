<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

</head>
<body>
    <?php
        foreach($dataa as $row){
            $upload_img = $row;
            // $ip = "123.456.789.000"; // some IP address
            $str_arr = explode (",", $upload_img);  
           
        } 
    ?>

    <div class="card" id="reload">
        <div class="container" id="container" style='width: 650px;'>
        </br>
        </br>
            
        
        <h1 id='heading'><?php echo $sarvice_data['service_head']?></h1>
        <h1 id='head'><?php echo $sarvice_data['service_head']." ".$sarvice_data['nearby_location']." ".$sarvice_data['city']." ".$sarvice_data['state'] ?></h1>
        </br>
            <h>Description</h>
            <p>As the name suggests, Travelers is a free travel and tours website template for agencies interested in expanding their businesses. Never lack web presence again thanks to this spectacular and easy to use free tool that will put you on top. Travelers is full of amazing features and great characteristics that will keep you going strong on the web</p>
            <p>Core features of Travelers are full-screen slider with parallax effect and call-to-action button, unique testimonials slider, video support and a full-blown booking form. Additionally, Travelers also treats you to neat destination, discount, about and blog pages. Indeed, you can also start a travel blog with Travelers and put your travel agency ahead of the competition effortlessly. If you would like to stand out from the masses and emphasize your professionalism and mind-bending travel destinations, do it in style with Travelers.</p>
            <div class="images_slider">
                <div class='carousel' data-flickity='{"autoPlay":true}'>
                    <?php foreach($str_arr as $row_img){?>
                    <div class='carousel-cell'>
                        <img src="<?php echo base_url('images/profile/').$row_img ?>"  alt="Los Angeles" style="width:100%;height:500px;">
                    </div>
                <?php }?>
                </div>
            </div>
            <style media="screen">
                .carousel-cell{
                    width: 100%;
                   
                }

                .carousel-cell:before{
                    display: block;
                }
            </style>

            <div class="row">
		  		<div class="col-md-12">
					<div class="card">
		   				<div class="card-header"><strong>View Service Registration</strong><small> Form</small></div>
	    				<div class="card-body card-block">
	        				<form id="edit_service_station_form">
	            				<input type="text" name="id" value="<?php echo $sarvice_data['id'] ?>" hidden />
	        					<div class="form-group">
					                <label for="company" class="form-control-label">Service Head</label>
					                <input type="text" id="company" name="service_head" value="<?php echo $sarvice_data['service_head'] ?>" placeholder="Enter Service Head" class="form-control" readonly="readonly" />
					            </div>

					            <div class="form-group">
					                <label for="pincode" class="form-control-label">Pincode</label>
					                <input type="number" id="pincode" name="pincode" value="<?php echo $sarvice_data['pincode'] ?>" placeholder="Pincode" class="form-control" readonly="readonly" />
					            </div>

					            <div class="form-group">
					                <label for="place" class="form-control-label">Place</label>
					                <input type="text" id="place" name="place" value="<?php echo $sarvice_data['place'] ?>" placeholder="Enter Place" class="form-control" readonly="readonly" />
					            </div>

					            <div class="form-group">
					                <label for="nearby_location" class="form-control-label">Near by Location</label>
					                <input type="text" id="nearby_location" name="nearby_location" value="<?php echo $sarvice_data['nearby_location'] ?>" placeholder="Enter Near by Location" class="form-control" readonly="readonly" />
					            </div>

					            <div class="form-group">
					                <label for="city" class="form-control-label">City</label>
					                <input type="text" id="city" name="city" value="<?php echo $sarvice_data['city'] ?>" placeholder="Enter city" class="form-control" readonly="readonly" />
					            </div>

					            <div class="form-group">
					                <label for="state" class="form-control-label">State</label>
					                <input type="text" id="state" name="state" value="<?php echo $sarvice_data['state'] ?>" placeholder="Enter State name" class="form-control" readonly="readonly" />
					            </div>
	         
					            <div class="form-group">
					                <label for="store_ref_address" class="form-control-label">Address</label>
					                <textarea  style="margin-top:5px;" class="form-control" rows="3" readonly="readonly" id="comment" placeholder="Enter your review">"<?php echo $sarvice_data['store_ref_address'] ?>"</textarea>
					                <!--  <textarea class="form-control"  name="store_ref_address" id="store_ref_address" readonly="readonly"/>"<?php echo $sarvice_data['store_ref_address'] ?>"</textarea> -->
					            </div>
	        				</form>
	    				</div>
					</div> 
				</div>
			</div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                       <div class="card-header"><strong>Rating & Review</strong><small> Form</small></div>
                        <div class="card-body card-block row" id="reload">
                        <?php
                        foreach($average as $row){?>
                            <div class="row">
        
                                <div class="col-md-4">
                                    <h3 align="center"><b><?php echo round($row,1);?></b> <i class="fa fa-star" data-rating="2" style="font-size:20px;color:#ff9f00;"></i></h3>
                                    <?php 
                                    foreach($rating as $row){
                                    ?>
                                    <p style="margin-left: 20px;"><?php echo $row['count(review)']; ?> ratings and <?php echo $row['count(ratedindex)']; ?> reviews</p>
                                    <?php } ?>
                                </div>
                                <?php } ?>
                                <div class="col-md-8" style="margin-left: 400px;margin-top: -80px;">
    
                                    <?php
                                    foreach($count as $row){
                                    ?>
                                    <h4 align="center"><?php echo $row['ratedindex']; ?> <i class="fa fa-star" data-rating="2" style="font-size:20px;color:green;"></i> Total <?php echo $row['total']; ?></h4>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="row" style="margin-right: 400px;">
                                <div class="col-md-12"> 
                                <?php
                                foreach($data as $row){?>
                                        <h4 style="margin-left:13px"><?php echo $row['ratedindex']; ?> <i class="fa fa-star" data-rating="2" style="font-size:20px;color:green;"></i> by <span><?php echo $row['email']; ?></span></h4>
                                        <p style="margin-left:13px"><?php echo $row['review']; ?></p>
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
                <div class="col-md-12"> 
                	<br/>
                	<br/>	
                    <span  onmouseover="starmark(this)" onclick="starmark(this)" id="1one" style="font-size:40px;cursor:pointer;" class="fa fa-star checked" select="selected"></span>
                    <span onmouseover="starmark(this)" onclick="starmark(this)" id="2one"  style="font-size:40px;cursor:pointer;" class="fa fa-star "></span>
                    <span onmouseover="starmark(this)" onclick="starmark(this)" id="3one"  style="font-size:40px;cursor:pointer;" class="fa fa-star "></span>
                    <span onmouseover="starmark(this)" onclick="starmark(this)" id="4one"  style="font-size:40px;cursor:pointer;" class="fa fa-star"></span>
                    <span onmouseover="starmark(this)" onclick="starmark(this)" id="5one"  style="font-size:40px;cursor:pointer;" class="fa fa-star"></span>
                    <br/>
                    <br/>
                     <div id='error' style="color: red"></div>
                    <div class="form-group">
                        <label for="full_name" class="form-control-label">Full Name</label>
                        <input type="text" id="full_name" name="full_name" placeholder="Enter Full name" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-control-label">Email</label>
                        <input type="email" id="user_email" name="email" placeholder="Enter Email" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label for="comment" class="form-control-label">Review</label>
                        <textarea class="form-control" rows="5" placeholder="Write your review here..." name="comment" id="review" required></textarea><br>
                    </div>
                    <div>
                        <button onclick="result()" type="button" style="margin-left:400px;" class="btn btn-lg btn-success">Submit</button>
                    </div>
                </div>
            </div>
		</div>
	</div>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>
    <script>
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
    var emails = document.getElementById("user_email").value;
    var service_id = document.getElementById("service_id").value;
    console.log(emails);
    if(user_rating == ""){
       $('#error').html('*please rate');
       return false;
    }
    $.ajax({
        url:"<?php echo base_url(); ?>/add_service_station/rating",
        type:"POST",
        data:{ratedindex:user_rating,full_name:full_name,review:comment,email:emails,service_id:service_id},
        dataType: 'json',
        success:function(data){
            console.log(data.type = "success");
            if(data.type="success"){
                // swal('info!','updated successfully','success');
                $("#reload").load('show_data/'+service_id);
            }
            else{
                swal('info!','not updated','info');
            }
        }
    });
}

</script>