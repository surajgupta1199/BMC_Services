<div class="card">
    <div class="card-header"><strong>Service Registration</strong><small> Form</small></div>
    <div class="card-body card-block row">
        <!-- <div class="modal fade" id="modal-default" style="display: none;"> -->
        <form id="categories">
            <div class="form-group col-6">
                <label for="category_name" class="form-control-label">Category Name</label>
                <input type="text" id="category_name" name="category_name" placeholder="Enter Category Name" class="form-control" required />
            </div>
            <div class="form-group col-6">
                <label for="category_name" class="form-control-label">Parent Name</label>
                <select class="form-control"  name="parent_name" id="parent_name" >
                    <option value=""selected disabled>Select Class</option>
                    <?php 
                    foreach($categories as $row){
                        ?>
                   
                    <option value= <?php echo $row['id'] ?>><?php echo $row['category_name'] ?></option> 
                
                <?php }?>
                </select>
            </div>
            <div class="form-group float-right">
                <button type="submit" class="btn btn-success text-left m-r-30" id="submit">Submit</button>
            </div>
        </form>
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
                                    <th>Category Name</th>
                                    <th>Parent_Name</th>
                                    <th>edit</th>
                                    <th>status</th>
                                </tr>
                                <tbody>
                                    <?php 
                                    $no = 1;
                                    foreach($categories as $row){
                                       echo ' <tr>
                                            <td>'.$no.'</td>
                                            <td>'.$row['category_name'].'</td>
                                            <td>'.$row['parent_name'].'</td>
                                            <td><a href='.base_url("Add_service_station/view_category_station/".$row["id"]).'><button class="btn btn-info btn-xs"><i class="ti-marker-alt"> Edit </button></a></td>';
                                           if($row['status']==0){
                                                echo '<td><button  onclick="update_status('.$row['id'].',1,'.$row['parent_id'].');"  class="btn btn-success btn-xs"><i class="ti-check"></i> Active </button></td></tr>';
                                            }
                                            else{
                                                echo '<td><button  onclick="update_status('.$row['id'].',0,'.$row['parent_id'].');" id="1" class="btn btn-danger btn-xs"><i class="ti-close"></i>  Deactive </button></td></tr>';   
                                            }
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


<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
    $('document').ready(function(){
        $('#categories').on('submit', function(event){
            event.preventDefault();
            var form = $(this).serialize();
            console.log(form);
            $.ajax({
                url:"<?php echo base_url(); ?>/Add_service_station/add_categories",
                type:"POST",
                data:form,
                dataType: 'json',
                processData:false,
                success:function(data){
                    console.log(data.type);
                    if(data.type == "success"){
                        $('#categories').trigger("reset");
                        swal("info!",'successfullt added',"success");
                        location.reload();

                    }else{
                        swal("info!",'not added ',"info");
                    }
                }
            })
        });
    });
    function update_status(id,status,parent_name) {
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
                    url:'<?php echo base_url('Add_service_station/delete_category_station/')?>'+id+'/'+status+'/'+parent_name,
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
</script>