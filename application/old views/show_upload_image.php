<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</style>
</head>
<body>
	<div id="myModals" class="modal">
	    <div class="modal-content">
	        <div class="modal-header">
	          <span class="close">&times;</span>
	        </div>
	        <div class="modal-body">
	          <form method="post" id="update_images" enctype="multipart/form-data">
	            <div class="row">
	                <input type="file" name="files[]" id="files" multiple accept=" .jpg, .jpeg, .png, .gif">
	            </div>
	            <input type="text" name="id" id="service_profile_ids" hidden>
	            <br>
	            <div class="row"> 
	                <button id="btn_uploads" class="btn btn-primary">Upload More Image</button>
	            </div>
	        </form>
	      </div>
	    </div>
       <!-- .$row['service_head']. " ".$row['nearby_location']. " ".$row['city']. " ".$row['state'].  -->
	</div>
    <?php
        foreach($dataa as $row){
            $upload_img = $row;
            $str_arr = explode (",", $upload_img);  
        } 
    ?>
    <?php 
    foreach($sarvice_data as $row){?>
    	<h1 id='heading'><?php echo $row['service_head']?></h1>
 		<h1 id='head'><?php echo $row['service_head']." ".$row['nearby_location']." ".$row['city']." ".$row['state'] ?></h1>
 		<div class="container">
			<div class="row">
	 		<?php foreach($str_arr as $row_img){?>
				<div class="column">
			    	<img src="<?php echo base_url('images/profile/').$row_img ?>" value="<?php echo $row_img?>" alt="Los Angeles" style="width:350px;height:350px;">
			    	<button  onclick="myFunction(<?php echo $row['id'] ?>,'<?php echo $row_img ?>');" id="btn_delete" style="margin-left: 200px ; margin-bottom: 24px;" class="btn btn-danger btn-xs"></i> Delete </button>
				</div>
				<?php }?>
				<?php }?>
			</div>
		</div>
	<?php echo " <td><button type='button' id='btn_service' onclick='update_img(".$sarvice_data[0]['id'].");'  class='btn btn-info btn-lg'>Upload More Image</button><td>";
                ?>
</body>

<style>
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
</style>
<script src="<?php echo base_url('assets/') ?>bower_components/jquery/dist/jquery.min.js"></script>

<script src="<?php echo base_url('assets/') ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?php echo base_url('assets/') ?>plugins/iCheck/icheck.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">

	$('document').ready(function(){
	});

	function update_img(id){
		$('#service_profile_ids').val(id);
        console.log(id);
        $('#myModals').show();
	}

	$( ".close" ).click(function() {
 
    $('#myModals').hide();
 
    });

    $('#update_images').submit(function(e){ 
        e.preventDefault();
        var servces_ids = $('#service_profile_ids').val();
        console.log(servces_ids);   
        var formData=new FormData(this);
        formData.append('service_ids',servces_ids);
        console.log(formData);

                $.ajax({  
                url:"<?php echo base_url(); ?>add_service_station/update_image",  
                method:"POST",  
                data:formData,  
                contentType: false,  
                cache: false,  
                processData:false,  
                success:function(result) 
                { 
                    location.reload();
                    console.log(result);
                    return false;                       
                },
                error:function(result){
                    alert(result);
                }
            });  
         
     return false;
        
    });

    function myFunction(id,file_name){
    		console.log(file_name);
    	$.ajax({
    		url:"<?php echo base_url(); ?>add_service_station/remove_specific_img", 
    		 method:"POST",
    		 data:{id:id,file_name:file_name},
    		 success:function(result){
    		 	console.log(result);
    		 	location.reload();

    		 }
    	});
    }
</script>

