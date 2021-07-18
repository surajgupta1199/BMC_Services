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
.blue-button{
  background-color: blue;
  border-radius: 5px;
  color: white;
  padding: .5em;
  text-decoration: none;
}
.blue-button:focus, .blue-button:hover {
    background-color: FireBrick;
    color: White;
}
</style>
<body>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><strong>Ward Detail</strong><small> Form</small></div>
                <div class="card-body card-block row">
                    <div class="card-body mrg_bottom"> 
                        <form id="add_ward_form">
                            <div class="form-group col-12">
                                <div class="form-group col-4">
                                    <label for="ward_number" class="form-control-label">Ward No.</label>
                                    <input type="text" id="ward_number" name="ward_number" placeholder="Enter Ward Number..." maxlength="10" class="form-control" required />
                                </div>

                                <div class="form-group col-4">
                                    <label for="ward_title" class="form-control-label">Ward Title</label>
                                    <input type="text" id="ward_title" name="ward_title" placeholder="Enter Ward Title..." class="form-control" required />
                                </div>

                                <div class="form-group col-4">
                                    <label for="jo_name" class="form-control-label">JO Name</label>
                                    <input type="text" id="jo_name" name="jo_name" placeholder="Enter Ward JO Name..." class="form-control" required />
                                </div>
                            </div>
                            <div class="form-group" style="text-align: center;">
                                <label class="col-md-3 control-label"></label>
                                <div class="col-md-6">
                                  <a href="https://www.latlong.net/" target="_blank">
                                    Find your latitude & longitude
                                  </a>
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <div class="form-group col-4">
                                    <label for="pincode" class="form-control-label">Ward Latitude</label>
                                    <input type="text" name="ward_lat[]" id="ward_lat" value="" class="form-control" placeholder="Enter Ward Latitude..." required><br>
                                </div>

                                <div class="form-group col-4">
                                    <label for="pincode" class="form-control-label">Ward Longitude</label>
                                    <input type="text" name="ward_lng[]" id="ward_lng" value="" class="form-control" placeholder="Enter Ward Longitude..." required>
                                </div>
                                <div class="col-md-3">
                                  <button class="btn btn-success add_field_button" style='margin-top: 30px;'>Add-More</button>    
                                </div>
                            </div>
                            <span class="input_fields_wrap"></span>

                            <div class="form-group">
                                <div class="col-md-9 col-md-offset-3">
                                  <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
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
                                        <th>JO Name</th>
                                        <th>Ward Number</th>
                                        <th>Ward Title</th>
                                        <th>View Ward</th>
                                    </tr>
                                    <tbody>
                                        <?php 
                                        $no = 1;
                                        foreach($ward_detail as $row){
                                           echo ' <tr>
                                                <td>'.$no.'</td>
                                                <td>'.$row['jo_name'].'</td>
                                                <td>'.$row['ward_number'].'</td>
                                                <td>'.$row['ward_title'].'</td>
                                                <td><button id="click" data-value ='.$row["ward_number"].' onclick="view_ward_map('.$row['ward_number'].');" class="button js-button" role="button">Open Modal</button>
                                                  <button id="click" data-value ='.$row["ward_number"].' onclick="view_data('.$row['id'].');" class="blue-button" role="button">View Lat Lng</button></td></tr>';
                                                $no++;
                                        } ?>
                                    </tbody>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="viewModal" class="modal">
      <div class="modal-content">
        <div class="modal-header">
          <h2>View Ward Lat_Lng</h2>
          <span class="close">&times;</span>
        </div>
        <div class="modal-body" id='Show_lat_lng_ward'>
          <span class="modal_input_fields_wrap"></span>
        </div>
      </div>
    </div>
    <div id="myModal" class="modal">
      <div class="modal-content">
        <div class="modal-header">
          <h2>View Ward</h2>
          <span class="close">&times;</span>
        </div>
        <div class="modal-body">
          <div id=show_data></div>
        </div>
      </div>
    </div>
</body>
<style>
    .button {
        background-color: Crimson;  
        border-radius: 5px;
        color: white;
        padding: .5em;
        text-decoration: none;
    }

    .button:focus,
    .button:hover {
        background-color: FireBrick;
        color: White;
    }

    .content.active,
    .no-js .content {
        display: block;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<script type="text/javascript">
    $(document).ready(function() {
        var max_fields      = 200; //maximum input boxes allowed
        var wrapper       = $(".input_fields_wrap"); //Fields wrapper
        var mod_wrapper       = $(".modal_input_fields_wrap"); //Fields wrapper
        var add_button      = $(".add_field_button"); //Add button ID
        var mod_add_button      = $(".mod_add_field_button"); //Add button ID
      
        var x = 1; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div class="form-group col-12"><div class="form-group col-4"><label for="pincode" class="form-control-label">Ward Latitude</label><input type="text" name="ward_lat[]" id="ward_lat" value="" class="form-control" placeholder="Enter Ward Latitude..." required><br></div><div class="form-group col-4"><label for="pincode" class="form-control-label">Ward Longitude</label><input type="text" name="ward_lng[]" id="ward_lng" value="" class="form-control" placeholder="Enter Ward Longitude..." required></div><div class="col-md-3"><button class="btn btn-success remove_field" style="margin-top: 30px;">remove</button></div></div>');
            }
        });

         console.log(document.getElementsByClassName("modal_input_fields_wrap"));

        // $(mod_add_button).click(function(e){ 
        //     e.preventDefault();
        //     alert('hiii');
        //     if(x < max_fields){ 
        //         x++; 
        //         $(mod_wrapper).append('<div class="form-group col-12"><div class="form-group col-4"><label for="pincode" class="form-control-label">Ward Latitude</label><input type="text" name="ward_lat[]" id="ward_lat" value="" class="form-control" placeholder="Enter Ward Latitude..." required><br></div><div class="form-group col-4"><label for="pincode" class="form-control-label">Ward Longitude</label><input type="text" name="ward_lng[]" id="ward_lng" value="" class="form-control" placeholder="Enter Ward Longitude..." required></div><div class="col-md-3"><button class="btn btn-success remove_field" style="margin-top: 30px;">remove</button></div></div>');
        //     }
        // });
  
        $(wrapper).on("click",".remove_field", function(e){ 
            e.preventDefault(); $(this).parent('div').parent('div').remove(); x--;
        })

        // $(mod_wrapper).on("click",".remove_field", function(e){ 
        //     e.preventDefault(); $(this).parent('div').parent('div').remove(); x--;
        // })
    });

    function view_ward_map(id){
      $.ajax({
        url: "<?php echo base_url(); ?>add_service_station/ward_polygon/"+id,
        success: function (result) {
          $('#myModal').show();
          $("#show_data").html(result);
        },
      });
    }

    function view_data(id){
      // $('#viewModal').show();
      $.ajax({
        url: "<?php echo base_url(); ?>/add_service_station/fetch_lat_lng/"+id,
        success: function (result) {
          console.log(result);
          $('#viewModal').show();
          $("#Show_lat_lng_ward").html(result);
        },
      });
    }

    $('.close').click(function(){
      $('#myModal').hide();
    });

    $('.close').click(function(){
      $('#viewModal').hide();
    });

    $('#add_ward_form').submit(function(e){
      e.preventDefault();
      var data = new FormData(this);
      console.log(data);
      $.ajax({
        url: "<?php echo base_url(); ?>/add_service_station/add_ward_data",
        type: "POST",
        data:new FormData(this),
        dataType: 'json',
        processData:false,
        contentType:false,
        cache:false,
        success: function (result) {
          console.log(result);
          if(result == 1){
            $('#add_ward_form').trigger("reset");
            swal('info!','successfully added',"success");
            location.reload();
          }else{
            alert('same ward number already exists');
          }
        },
      });
      return false;
    });
</script>