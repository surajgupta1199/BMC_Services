<div class='text-center'>
	<button class="btn btn-success mod_add_field_button" style="margin-top: 15px;margin-bottom: 15px">Add-More</button>
</div>
<div class='container'>
<?php 
	$latitude = json_decode($data['ward_lat']);
	$longitude = json_decode($data['ward_lng']);
	for($i=0;$i<count($latitude);$i++){
		if($i==0){?>
		<?php }?>
		<div class="form-group col-12 order_number">
			<div class="form-group col-4 text-center">
				<label for="pincode" class="form-control-label">Ward Latitude</label>
				<input type="text" name="ward_lat[]" id="view_ward_lat" value='<?php echo $latitude[$i];?>' class="form-control" placeholder="Enter Ward Latitude..." required><br>
			</div>
			<div class="form-group col-4 text-center">
				<label for="pincode" class="form-control-label">Ward Longitude</label>
				<input type="text" name="ward_lng[]" id="view_ward_lng" value='<?php echo $longitude[$i];?>' class="form-control" placeholder="Enter Ward Longitude..." required>
			</div>
	<?php if($i==0){?>
				<div class="form-group">
					<div class="col-md-3">
						<!-- <button class="btn btn-success mod_add_field_button" style="margin-top: 30px;">Add-More</button> -->
						<button class="btn btn-success remove_field" style="margin-top:30px;">remove</button>
					</div>
				</div>
	<?php }else{?>
			<div class="form-group ">
				<div class="col-md-3">
					<button class="btn btn-success remove_field" style="margin-top:30px;">remove</button>
				</div>
			</div>
	<?php }?>
		</div>
<?php }?>
	<span class="modal_input_fields_wrap"></span>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
	$(document).ready(function() {
		var max_fields      = 200; //maximum input boxes allowed
		var mod_wrapper       = $(".modal_input_fields_wrap"); //Fields wrapper
		var mod_add_button      = $(".mod_add_field_button"); //Add button ID
		var x = 1; //initlal text box count
		$(mod_add_button).click(function(e){ 
            e.preventDefault();
            if(x < max_fields){ 
                x++; 
                $(mod_wrapper).append('<div class="form-group col-12"><div class="form-group col-4"><label for="pincode" class="form-control-label">Ward Latitude</label><input type="text" name="ward_lat[]" id="ward_lat" value="" class="form-control" placeholder="Enter Ward Latitude..." required><br></div><div class="form-group col-4"><label for="pincode" class="form-control-label">Ward Longitude</label><input type="text" name="ward_lng[]" id="ward_lng" value="" class="form-control" placeholder="Enter Ward Longitude..." required></div><div class="col-md-3"><button class="btn btn-success remove_field" style="margin-top: 30px;">remove</button></div></div>');
            }
        });
		$(mod_wrapper).on("click",".remove_field", function(e){ 
            e.preventDefault(); $(this).parent('div').parent('div').remove(); x--;
        });
        $('.remove_field').click(function(e){
        	e.preventDefault();
        	$(this).parent('div').parent('div').parent('div.order_number').remove();  x--;
        })
	});
</script>
<style>
	.btn:not(:disabled):not(.disabled) {
		width: 90px;
		border-radius: 8px;
		height: 32px;
		font-size: 14px;
	}
</style>