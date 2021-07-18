<?php
class Add_service_station extends CI_controller
{
	
	function __construct()
	{
		parent::__construct(); 	
	 	if($this->session->userdata('user_id') == null)
		{
			redirect(base_url('user_login'));
			return ;
		}
		$this->load->model('Service_station_model','service'); 	
	 	$this->load->helper('date');
		$now = new DateTime();
		$now->setTimezone(new DateTimezone('Asia/Kolkata'));
		$this->current_date=$now->format('Y-m-d H:i:s');
	}

	function index(){
		$this->load->view('header');
		$all_data['categories']= $this->service->getAll();
		$all_data['distinct_cat'] = $this->service->child_cat();
		$all_data['ward'] = $this->service->get_data('ward_detail');
		$this->load->view('add_service_station',$all_data);
		$this->load->view('footer');
	}

	public function view_service_station(){
		$all_data['service_station'] = $this->service->get_all_data();
		$this->load->view('header');
		$this->load->view('view_service_station',$all_data);
		$this->load->view('footer');
	}

	public function add_service_station(){
		$data =$this->input->post();
		print_r($data);
		die;
		if(isset($_FILES['profile']['name'])){
			$config['upload_path'] = 'images/profile';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);	
			if(!$this->upload->do_upload('profile')){
				$this->upload->display_errors();
				$dataa['type'] = 'error';
				$dataa['msg'] = 'not updated';
				
			}else{
				$file_data = $this->upload->data();
				$profile= $file_data['file_name'];
				$data =$this->input->post();
				array_push($data,$profile);
				$data['profile'] = $data[0];
				unset($data[0]);
				$result = $this->service->insert_data('service_registration',$data);
				$dataa['type'] = 'success';
				$dataa['msg'] = 'updated successfully';
			}
		}
		echo json_encode($dataa);
	}

	public function add_ward_detail(){
		$all_data['ward_detail']= $this->service->get_data('ward_detail');
		$this->load->view('header');
		$this->load->view('ward_detail',$all_data);
		$this->load->view('footer');
	}

	public function add_ward_data(){
		$ward_lat = $this->input->post('ward_lat');
		$ward_lng = $this->input->post('ward_lng');
		

		$result = array();

		for ($i=0; $i < count($ward_lat); $i++) {
			$res = array('lat'=>$ward_lat[$i],'lng'=>$ward_lng[$i]);
			array_push($result, $res);
		}

		$data['ward_number'] = $this->input->post('ward_number');
		$duplicate = $this->service->get_perticuler_data('ward_detail','ward_number',$data['ward_number']);
		if($duplicate){
			echo 0;
			exit();
		}else{
			$data['ward_title'] = $this->input->post('ward_title');
			$data['jo_name'] = $this->input->post('jo_name');
			$data['ward_lat'] = json_encode($ward_lat);
			$data['ward_lng'] = json_encode($ward_lng);
			$data['ward_lat_lng'] = json_encode($result);
			$result = $this->service->insert_data('ward_detail',$data);
			echo $result;
		}
	}

	public function get_service_station(){
		$id = $this->uri->segment('3');
		$result['categories']= $this->service->getAll();
		$result['distinct_cat'] = $this->service->child_cat();
		$result['sarvice_data'] = $this->service->get_perticuler_data('service_registration','id',$id);
		$type = $result['sarvice_data']['type'];
		$result['type'] = $this->service->search_category($type);
		// print_r($result['sarvice_data']);
		// die;
		$this->load->view('header');
		$this->load->view('add_service_station',$result);
		$this->load->view('footer');
	}
	
	public function edit_service_station(){
		if(isset($_FILES['profile']['name'])){
			$config['upload_path'] = 'images/profile';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);	
			if(!$this->upload->do_upload('profile')){
				$this->upload->display_errors();
				$dataa['type'] = 'error';
				$dataa['msg'] = 'not updated';
				echo json_encode($dataa);
			}else{
				$file_data = $this->upload->data();
				$profile= $file_data['file_name'];
				$data =$this->input->post();
				array_push($data,$profile);
				$data['profile'] = $data[0];
				unset($data[0]);
				$result = $this->service->update_service_station($data);
				$dataa['type'] = 'success';
				$dataa['msg'] = 'updated successfully';
				echo json_encode($dataa);
			}
		}
	}

	public function update_status(){
		$id = $this->uri->segment('3');
		$status = $this->uri->segment('4');
		$result = $this->service->update_service_status($status,$id);
		echo $result;
	}

	public function view_reviews(){
		$this->load->view('header');
		$this->load->view('users_review');
		$this->load->view('footer');
	}

	public function view_location(){
		$this->load->view('header');
		$result['value'] =$this->service->null_data();
		$result['data'] = $this->service->get_data('service_registration');
		$this->load->view('map_display',$result);
		$this->load->view('footer');
	}

	public function categories(){
		$all_data['categories']= $this->service->getAll();
		$all_data['distinct_cat'] = $this->service->child_cat();
		$this->load->view('header');
		$this->load->view('categories',$all_data);
		$this->load->view('footer');
	}

	public function add_categories(){
		$data_post = $this->input->post();
		$result = $this->service->insert($data_post);
		$data['type'] = "unsuccessfull";
		$data['message'] = "not added successfully";
		if($result){
			$data['type'] = "success";
			$data['message'] = "added successfullt";
		echo json_encode($data);
		} 
	}

	public function view_category_station(){
		$id =$this->uri->segment('3');
		$result['categories']= $this->service->getAll();
		$result['data']=$this->service->get_detail($id);
		$this->load->view('header');
		$this->load->view('get_data',$result);
		$this->load->view('footer');
		
	}

	public function edit_category_station_form(){
		$data_post = $this->input->post();
		$id = $this->uri->segment(3);
		$result = $this->service->update_category($data_post,$id);
		$data['type'] = "unsuccessfull";
		$data['message'] = "not added successfully";
		if($result){
			$data['type'] = "success";
			$data['redirect'] = 'http://localhost/bmc_services/Add_service_station/categories';
		echo json_encode($data);
		} 
	}

	public function delete_category_station(){
		$id = $this->uri->segment('3');
		$status = $this->uri->segment('4');
		$parent_id = $this->uri->segment('5');
		$check = $this->service->check_parent_child($id,$status,$parent_id);
		// $data = $check->num_rows();
		if(count($check)>0){
			$result = $this->service->update_category_status($status,$id);
			echo $result;
		}else{
			$result = $this->service->delete_category_status($status,$id);
			echo $result;
		}
		// $result = $this->service->update_category_status($status,$id);
		// echo $result;
	}

	public function show_data(){
		$id =$this->uri->segment('3');
		$result['sarvice_data'] = $this->service->get_perticuler_data('service_registration','id',$id);
		$result['data']=$this->service->show_all_rating($id);
		$result['average']=$this->service->average_rating($id);
		$result['rating']=$this->service->no_of_rating($id);
		$result['count']=$this->service->count_of_rating($id);
		$result['dataa'] = $this->service->get_particular_image($id);
		echo $this->load->view('show',$result, true);
	}

	public function show_particular_info(){
		$id =$this->uri->segment('3');
		$result['sarvice_data'] = $this->service->get_perticuler_data('service_registration','id',$id);
		$result['data']=$this->service->show_all_rating($id);
		$result['average']=$this->service->average_rating($id);
		$result['rating']=$this->service->no_of_rating($id);
		$result['count']=$this->service->count_of_rating($id);
		$result['dataa'] = $this->service->get_particular_image($id);
		$this->load->view('show_particular_info',$result);
	}

	public function show_particular_data(){
		$id =$this->uri->segment('3');
		$result['sarvice_data'] = $this->service->get_perticuler_data('service_registration','id',$id);
		$result['data']=$this->service->show_all_rating($id);
		$result['average']=$this->service->average_rating($id);
		$result['rating']=$this->service->no_of_rating($id);
		$result['count']=$this->service->count_of_rating($id);
		$result['dataa'] = $this->service->get_particular_image($id);
		// print_r($result['dataa']);
		// die;
		$this->load->view('header');
		// $this->load->view('show_profile',$result);
		$this->load->view('show_profile_rating',$result);
		$this->load->view('footer');
	}

	public function rating(){
		$post_data = $this->input->post();
		$result = $this->service->insert_user_rating($post_data);
		$data['type']="error";
		$data['message']="unable to add detail";
		if($result){
			$data['type'] = 'success';
			$data['message']='successfully added';
		}
		echo json_encode($data);
	}

	public function show_categories(){
		$result['value'] =$this->service->null_data();
		$result['data'] = $this->service->get_all_data();
		$result['categories'] = $this->service->fetch_parent_cat();
		$result['ward_data'] = $this->service->get_data('ward_detail');
		$this->load->view('view_categories',$result);
	}

	public function show_ward_categories_id(){
		$ward_num = $this->uri->segment(3);
		$result = $this->service->ward_selected_data($ward_num);				
		$ward_id_json = json_encode($result);
		$ward_id = array();
		foreach($result as $row){
			$data = $row['id'];
			array_push($ward_id, $data);
		}
		$id = json_encode($ward_id);
		echo $id;
	}

	// public function show_particular_categories_data(){
	// 	$ward_num = $this->uri->segment(4);
	// 	if($ward_num == ''){
	// 		$id = array();
	// 		$catid = $this->uri->segment(3);
	// 		array_push($id, $catid);
	// 		$result['value'] =$this->service->null_data();
	// 		$result['data'] = $this->service->get_particular_data($id);
	// 		$result['content'] = $this->service->fetch_parent_cat();				//
	// 		$result['categories'] = $this->service->get_child_categories($catid);		//
	// 	}else{
	// 		// $data = $this->input->post('id');
	// 		$data = $this->uri->segment(3);
	// 		$id = json_decode($data);
	// 		print_r($id);die;			$result['value'] =$this->service->null_data();
	// 		$result['data'] = $this->service->get_particular_data($id);
	// 		$result['content'] = $this->service->ward_selected_data($ward_num);				
	// 		$result['categories'] = array();
	// 	}
	// 	$this->load->view('view_categories_data',$result);
	// }

	// public function show_child_map(){
	// 	$id = $this->input->post('id');
	// 	$result['value'] =$this->service->null_data();
	// 	$result['data'] = $this->service->get_particular_data($id);
	// 	$this->load->view('show_parent_cat',$result);
	// }

	public function show_particular_categories_data(){
		$id = $this->uri->segment(3);
		$ward_num = $this->uri->segment(4);
		if($ward_num == ''){
			$result['value'] =$this->service->null_data();
			$result['data'] = $this->service->get_particular_data($id);
			$result['content'] = $this->service->fetch_parent_cat();				
			$result['categories'] = $this->service->get_child_categories($id);	
			$result['ward_ids'] = 'default';
		}else{
			$ward_cat_id = $this->service->ward_selected_data($ward_num);				
			$ward_id_json = json_encode($ward_cat_id);
			$ward_id = array();
			foreach($ward_cat_id as $row){
				$data = $row['id'];
				array_push($ward_id, $data);
			}
			$result['value'] =$this->service->null_data();		
			$result['data'] = $this->service->get_ward_particular_data($ward_id,$ward_num);
			$result['content'] = $this->service->ward_selected_data($ward_num);
			$result['categories'] = array();
			$result['ward_ids'] = $ward_num;
		}
		$this->load->view('view_categories_data',$result);
	}

	public function show_child_map(){
		$id = $this->input->post('id');
		$detail = $this->input->post('detail');
		if($detail=='default'){
			$result['data'] = $this->service->get_particular_data($id);
		}else{
			$result['data'] = $this->service->get_ward_perticular_data($id,$detail);
		}
		$result['value'] =$this->service->null_data();
		$this->load->view('show_parent_cat',$result);
	}

	public function show_child_categories(){
		$id = $this->input->post('id');
		$ward_number = $this->input->post('detail');
		if($ward_number == 'default'){
			$result = $this->service->get_child_categories($id);
		}else{
			$result = $this->service->get_child_ward_categories($id,$ward_number);
		}
		$output = '<div class="heading">
	            <header>
	                <h1 id="cbx-l2">Sub Categories</h1>
	            </header>
	        </div>
	        <div class="content">
	            <ul class="quicklinks-sidebar">';
    	foreach ($result as  $item) {
    		if($ward_number == 'default'){
    			$output.="<li><a href='#'  style='font-size: 18px;' onclick = 'mycategories(".$item['id'].",0)' aria-describedby='cbx-l2'>".$item['category_name']."</a></li>";		
    		}else{
    			$output.="<li><a href='#'  style='font-size: 18px;' onclick = 'mycategories(".$item['id'].",".$ward_number.")' aria-describedby='cbx-l2'>".$item['category_name']."</a></li>";
    		}
		}
        $output.='</ul>
	        </div>';
	        echo $output;
	}

	public function show_particular_categories(){
		$id = $this->input->post('id');
		$detail = $this->input->post('detail');
		$result['categories']= $this->service->getAll();
		$result['value'] =$this->service->null_data();
		if($detail == 0){
			$where = array(
				'reg2.id' => $id);
			$result['data'] = $this->service->get_particular_categories($where);
		}else{
			$where = array(
				'reg2.id' => $id,
				'reg1.ward_number' => $detail);
			$result['data'] = $this->service->get_particular_categories($where);
		}
		echo $this->load->view('view_particular_categories',$result,true);
	}

	public function all_active(){
		$result['data'] = $this->service->show_all_data();
		$this->load->view('userdashboard',$result);
	}

	public function upload_image(){
		$image_path='';
		$ids = $this->input->post('id');
		if(!empty($_FILES['files']['name'])){
			$filesCount = count($_FILES['files']['name']);


			for($i = 0; $i < $filesCount; $i++){
				$_FILES['file']['name']     = $_FILES['files']['name'][$i];
				$_FILES['file']['type']     = $_FILES['files']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
				$_FILES['file']['error']     = $_FILES['files']['error'][$i];
				$_FILES['file']['size']     = $_FILES['files']['size'][$i];

				
				$config['upload_path'] = 'images/profile';
				

				$config['allowed_types'] = 'gif|jpg|png|jpeg';

				// Load and initialize upload library
				$this->load->library('upload', $config);
				$this->upload->initialize($config);

				// Upload file to server
				if($this->upload->do_upload('file')){
					// Uploaded file data
					$fileData = $this->upload->data();

					echo "string";

					


					if($image_path==''){
						$image_path=$fileData['file_name'];
					}
					else{
						$image_path=$image_path.",".$fileData['file_name'];
					}

					$uploadData[$i]['file_name'] = $fileData['file_name'];
				}else{
					print_r(array('error' => $this->upload->display_errors()));
				}
			}
		}

		//end image procss
		// $img_data=array('file_name'=>$image_path,'id' => $ids);
		$where = array('id' => $ids);
		$data = array('file_name' => $image_path);
		$status = $this->service->insert_image($where,$data);

		echo $status;
	}

	public function image_fetch(){
		$id = $this->uri->segment(3);
		$result['sarvice_data'] = array($this->service->get_perticuler_data('service_registration','id',$id));
		$result['dataa'] = $this->service->get_particular_image($id);
		$this->load->view('header');
		$this->load->view('show_upload_image',$result);
		$this->load->view('footer');
	}

	public function update_image(){
		$image_path='';
		$ids = $this->input->post('id');
		$result['data'] = $this->service->get_particular_file($ids);
		$file_path = $result['data']['file_name'];
		$array1 = explode(',',$file_path);
		
		if(!empty($_FILES['files']['name'])){
			$filesCount = count($_FILES['files']['name']);



			for($i = 0; $i < $filesCount; $i++){
				$_FILES['file']['name']     = $_FILES['files']['name'][$i];
				$_FILES['file']['type']     = $_FILES['files']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
				$_FILES['file']['error']     = $_FILES['files']['error'][$i];
				$_FILES['file']['size']     = $_FILES['files']['size'][$i];

			
				$config['upload_path'] = 'images/profile';
				

				$config['allowed_types'] = 'gif|jpg|png|jpeg';
			 	
				$this->load->library('upload', $config);
				$this->upload->initialize($config);

				
				if($this->upload->do_upload('file')){
					
					$fileData = $this->upload->data();


					if($image_path==''){
						$image_path=$fileData['file_name'];
					}
					else{
						$image_path=$image_path.",".$fileData['file_name'];
					}

					$uploadData[$i]['file_name'] = $fileData['file_name'];
				}else{
					print_r(array('error' => $this->upload->display_errors()));
				}
			}
		}

		// $where = array('id' => $ids);
		$data = array('file_name' => $image_path);
		$array2 = explode(',', $data['file_name']);
		$array3 = array_merge($array1,$array2);
		$output = implode(',', $array3);

		$status = $this->service->update_profile_image($output,$ids);
	}

	public function remove_specific_img(){
		$id=$this->input->post('id');
		$file_name=$this->input->post('file_name');
		$array1 = explode(',',$file_name);
		$result['data'] = $this->service->get_particular_file($id);
		$file_path = $result['data']['file_name'];
		$array2 = explode(',',$file_path);
		$array3 = array_diff($array2, $array1);
		$output = implode(',', $array3);
		$data = $this->service->update_profile_image($output,$id);
		/*$input = 'Wed';
		$list = 'Mon,Tue,Wed,Thrs,Fri,Sat,Sun';
		$array1 = explode(',', $input);
		$array2 = explode(',', $list);
		$array3 = array_diff($array2, $array1);
		print_r(array_merge($array1,$array2));
		$output = implode(',', $array3);

		echo $output;*/
	}

	public function user_registeration(){
		$data_set= $this->input->post();
		$data_set['user_password']=md5($data_set['user_password']);
		$email=$this->input->post('user_email');
		$duplicate = $this->service->duplicate($email);
		$rows= count($duplicate);
		if($rows==0)
		{
		$result = $this->service->user_registeration($data_set);
		$data['type'] = 'error';
		$data['message'] = 'not added successfully';
		if($result){
			$data['type'] = 'success';
			$data['message'] = 'successfully added';
		}
		}
		else
		{
			$data['type'] = 'warning';
			$data['message'] = 'Email Id Already Registered';
		}
		echo json_encode($data);
	}

	public function user_verify(){
		$where = array('user_email'=>$this->input->post('email'),
						'user_password'=>md5($this->input->post('password')));
		$result = $this->service->check_user_login($where);
		if($result != NULL)
		{
			$this->session->set_userdata($result);
			echo 1;
		}
		else
		{
			echo 2;
		}
	}

	public function check_category(){
		$data = $this->input->post('id');
		$result = $this->service->check_category($data);
			
		$output = '<div class="form-group col-6" id="type1">';
		$output.='<label for="place" class="form-control-label">Type</label>
					<select type="text" name="type" id="type" class="form-control selectpicker">
					 <div class="dropdown-menu" aria-labelledby="dropdownMenu">
	                  <option value="" selected disabled>not selected</option>';
	    foreach($result as $row){

	    $output.='              
	                  <option value='.$row->id.'>'.$row->category_name.'</option>';
	                  
	              }
	    $output.='
	                 </div>
	                </select>
	              </div>';
		
         

		echo json_encode($output);
		
	}

	public function ward_polygon(){
		$id = $this->uri->segment(3);
		$result['data'] = $this->service->get_perticuler_data('ward_detail','ward_number',$id);
		echo $this->load->view('polygon_ward',$result,true);
	}

	public function fetch_lat_lng(){
		$id = $this->uri->segment(3);
		$result = $this->service->get_perticuler_data('ward_detail','id',$id);
		$latitude = json_decode($result['ward_lat']);
		$longitude = json_decode($result['ward_lng']);
		for($i=0;$i<count($latitude);$i++){
			$output =   '<div class="form-group col-12">
							<div class="form-group col-4">
								<label for="pincode" class="form-control-label">Ward Latitude</label>
	                 			<input type="text" name="ward_lat[]" id="view_ward_lat" value='.$latitude[$i].' class="form-control" placeholder="Enter Ward Latitude..." required><br>
							</div>
							<div class="form-group col-4">
								<label for="pincode" class="form-control-label">Ward Longitude</label>
								<input type="text" name="ward_lng[]" id="view_ward_lng" value='.$longitude[$i].' class="form-control" placeholder="Enter Ward Longitude..." required>
							</div>';
			if($i==0){
				$output.=   '<span class="modal_input_fields_wrap"></span>
							<div class="col-md-3">
								<button class="btn btn-success mod_add_field_button" style="margin-top: 30px;">Add-More</button>
								</div>
							</div>';
			}else{
				$output.=   '<div class="col-md-3">
								<button class="btn btn-success remove_field" style="margin-top:30px;">remove</button>
	    						</div>
							</div>';
			}
			$output.=   '<script>
							$(document).ready(function() {
								var max_fields      = 200;
								var mod_wrapper       = $(".modal_input_fields_wrap");
								var mod_add_button      = $(".mod_add_field_button");
								var x = 1;
								$(mod_add_button).click(function(e){
									e.preventDefault();
									if(x < max_fields){ 
										x++; 
										$(mod_wrapper).append("<div class=form-group col-12"><div class="form-group col-4"><label for="pincode" class="form-control-label">Ward Latitude</label><input type="text" name="ward_lat[]" id="ward_lat" value="" class="form-control" placeholder="Enter Ward Latitude..." required><br></div><div class="form-group col-4"><label for="pincode" class="form-control-label">Ward Longitude</label><input type="text" name="ward_lng[]" id="ward_lng" value="" class="form-control" placeholder="Enter Ward Longitude..." required></div><div class="col-md-3"><button class="btn btn-success remove_field" style="margin-top: 30px;">remove</button></div></div>");
									}
								});
								$(mod_wrapper).on("click",".remove_field", function(e){
							      e.preventDefault();
							      $(this).parent("div").parent("div").remove();
							      x--;
							    });
						    });
					    </script>';
			echo $output;
		}
	}

	function logout(){
		$this->session->sess_destroy();
		$this->load->view('#');
	}
}
?>