<div class="card">
    <div class="card-header"><strong>View & Edit Service Registration</strong><small> Form</small></div>
    <div class="card-body card-block row">
        <form id="edit_category_station_form">
            <!-- <input type="text" name="id" value="<?php echo $data['id'] ?>" hidden /> -->
            <div class="form-group col-6">
                <label for="company" class="form-control-label">Category Name</label>
                <input type="text" id="category_name" name="category_name" value="<?php echo $data['category_name'] ?>" placeholder="Enter Service Head" class="form-control" required />
            </div>

             <div class="form-group col-4">
                <label for="place" class="form-control-label">Category</label>
                <!-- <input type="text" id="place" name="place" placeholder="Enter Place" class="form-control" required /> -->
                <select class="form-control"  name="parent_name" id="parent_name" >
                    <option value=""selected disabled>Select Class</option>
                    <?php 
                    foreach($categories as $row){
                        ?>
                    <option value= <?php echo $row['id']; ?>><?php echo $row['category_name']; ?></option> 
                <?php }?>
                </select>
            </div>
            <div class="form-group float-right">
                <button type="submit" class="btn btn-success text-left m-r-30" id="submit">Submit</button>
            </div>
        </form>
        <input type="text" name="id" id="id" value="<?php echo $data['id'] ?>" hidden />
    </div>
</div>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $('document').ready(function(){
        $('#edit_category_station_form').on('submit', function(event){
            event.preventDefault();
            var form = $(this).serialize();
            var id = $('#id').val();
            console.log(id);
            $.ajax({
                url:"<?php echo base_url(); ?>/Add_service_station/edit_category_station_form/"+id,
                type:"POST",
                data:form,
                dataType: 'json',
                processData:false,
                success:function(data){
                    console.log(data.type);
                    if(data.type == "success"){
                        swal("info!",'successfully updated',"success");
                    }else{
                        swal("info!",'not updated ',"info");
                    }
                }
            })
        });
    });
</script>
