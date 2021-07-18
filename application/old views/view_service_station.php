 <div id="myModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
          <span class="close">&times;</span>
        </div>
        <div class="modal-body">
          <form method="post" id="upload_images" enctype="multipart/form-data">
            <div class="row">
                <input type="file" name="files[]" id="files" multiple accept=" .jpg, .jpeg, .png, .gif">
            </div>
            <input type="text" name="id" id="service_ids" hidden>
            <br>
            <div class="row"> 
                <button id="btn_upload" class="btn btn-primary">Upload Image</button>
            </div>
        </form>
      </div>
    </div>
</div>

 <div id="modal_img_show" class="modal">
    <div class="modal-content">
        <div class="modal-header">
          <span class="close">&times;</span>
        </div>
        <div class="modal-body">
          <img src="<?php echo base_url('images/admin.jpg');?>" id="img" alt="Trulli" width="200" height="222" center="center"  border-radius= "50px">
      </div>
      <input type="text" name="id" id="view_ids" hidden>
        <div class="row"> 
            <button id="btn_update" class="btn btn-primary">Update Image</button>
        </div>
    </div>
</div>
</div>
 <div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Table</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Service Title</th>
                                    <th>Category</th>
                                    <th>Amount</th>
                                    <th>Type</th>
                                    <th>Ward</th>
                                    <th>Manager Name</th>
                                    <th>Manager Email</th>
                                    <th>Manager Contact</th>
                                    <th>Address</th>
                                    <th>Pincode</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Profile</th>
                                    <th>Edit</th>
                                    <th>Upload Image</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $no = 1;
                                    foreach ($service_station as $service) {
                                    // print_r($service_station);
                                    // die;
                                        
                                echo " <tr>
                                    <td>".$no."</td>
                                    <td>".$service['service_head']."</td>
                                    <td>".$service['place']."</td>";
                                    if($service['amount_services'] == ""){
                                      echo "<td> null </td>";
                                    }else{
                                      echo "<td>".$service['amount_services']."</td>";
                                    }
                                    if($service['type'] == ""){
                                      echo "<td> null </td>";
                                    }else{
                                      echo "<td>".$service['type']."</td>";
                                    }
                                echo "
                                    <td>".$service['ward_number']."</td>
                                    <td>".$service['manager_name']."</td>
                                    <td>".$service['manager_email']."</td>
                                    <td>".$service['manager_contact']."</td>
                                    <td>".$service['service_head']. " ".$service['nearby_location']. " ".$service['city']." ".$service['state']."</td>
                                    <td>".$service['pincode']."</td>
                                    <td>".$service['working_hour_from']."</td>
                                    <td>".$service['working_hour_to']."</td>
                                    <td><a href=".base_url('Add_service_station/show_particular_data/'.$service['id'])."><button class='btn btn-warning btn-xs'><i class='ti-star'> Profile </button></a></td>
                                    
                                     <td><a href=".base_url('Add_service_station/get_service_station/'.$service['id'])."><button class='btn btn-info btn-xs'><i class='ti-marker-alt'> Edit </button></a></td>";
                                    
                                    if($service['file_name'] == ""){
                                       echo " <td><button type='button' id='btn_service' service_ids = ".$service['id']." onclick='upload_img(".$service['id'].");'  class='btn btn-info btn-lg'>Upload Image</button>";
                                    }else{
                                        echo " <td><a href=".base_url('Add_service_station/image_fetch/'.$service['id'])."><button class='btn btn-info btn-xs'><i style='    height: 20px;width: 80px;font-size: 14px;' class='fa fa-eye'> View Image </button></a></td>";;
                                    }

                                    if($service['status']==0){
                                        echo '<td><button  onclick="update_status('.$service['id'].',1);"  class="btn btn-success btn-xs"><i class="ti-check"></i> Active </button></td></tr>';
                                    }
                                    else{
                                        echo '<td><button  onclick="update_status('.$service['id'].',0);" class="btn btn-danger btn-xs"><i class="ti-close"></i>  Deactive </button></td></tr>';   
                                    }
                                    // echo "<td><a href=".base_url('Add_service_station/get_service_station/'.$service['id'])."><button class='btn btn-info btn-xs'><i class='ti-marker-alt'> Edit </button></a></td>";
                                  $no++;
                                  echo '<div name="id" id="registeration_id" hidden>' . $service['id'] . '</div>';
                            } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- echo " <td><button type='button' id='btn_service' service_ids = ".$service['id']." onclick='view_img(".$service['id'].");'  class='btn btn-info btn-lg'>View Image</button>"; -->
  <style type="text/css">

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
    function update_status(id,status) {
        var msg='';
        if(status==1){
            msg="You want deactivate Service Station!";
        }
        else{
            msg="You want activate Service Station!";
        }
        swal({
            title: "Are you sure?",
            text: msg,
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
            $.ajax({
                    url:'<?php echo base_url('Add_service_station/update_status/')?>'+id+'/'+status,
                    type:'GET',
                    success:function (response) {
                        if (response == 1) {
                        console.log(response);
                        swal("Status Deactivated Successfully!");
                        location.reload(true);
                        }
                        else if (response == 0) {
                        console.log(response);
                        swal("Status Activated Successfully!");
                        location.reload(true);
                        }
                        console.log(response);
                    },
                    error:function (error) {
                        alert(response);
                    }
                }); 
            } else {
            // swal("Your imaginary file is safe!");
            }
        });
    }

    function upload_img(id){
        console.log("hii");
        // var id = id;
        $('#service_ids').val(id);
        console.log(id);
        $('#myModal').show();
    }

    // function view_img(id){
    //     console.log("hii");
    //     // var id = id;
    //     $('#view_ids').val(id);
    //     var ids =$('#view_ids').val();
    //     console.log(ids);
    //     $.ajax({
    //         url:"<?php echo base_url(); ?>add_service_station/image_fetch",  
    //         method:"POST",  
    //         data:{'id':id},
    //         success:function(result) 
    //             { 
    //                 console.log(result);
    //                    $('#modal_img_show').show();
    //                    $('#img').attr(result);

    //             },
    //             error:function(result){
    //                 alert(result);
    //             }
    //     });
       
    // }

    $( ".close" ).click(function() {
 
    $('#myModal').hide();
 
    });

    $( ".close" ).click(function() {
 
    $('#modal_img_show').hide();
 
    });

    $('#upload_images').submit(function(e){ 
        alert("hiii");
        e.preventDefault();
        var servces_ids = $('#service_ids').val();
        console.log(servces_ids);   
        var formData=new FormData(this);
        formData.append('service_ids',servces_ids);
        console.log(formData);

                $.ajax({  
                url:"<?php echo base_url(); ?>add_service_station/upload_image",  
                method:"POST",  
                data:formData,  
                contentType: false,  
                cache: false,  
                processData:false,  
                success:function(result) 
                { 
                    console.log(result);
                    return false;                       
                },
                error:function(result){
                    alert(result);
                }
            });  
         
     return false;
        
    });
    
</script>
<!--   // $('#upload_imgs').on('submit',function(e){
    //     e.preventDefault();
    //     alert('hiii');
    //     var form = $('#file').val();
    //     console.log($('#file').val());
    //     console.log(form);
    //     $.ajax({
    //         url:"<?php echo base_url(); ?>add_service_station/upload_image", 
    //         method:"POST",
    //         data:form,
    //         // contentType:false,
    //         // cache:false,
    //         dataType: 'json',
    //         processData:false,
    //         success:function(result){

    //         }
    //     });
    // }); -->


