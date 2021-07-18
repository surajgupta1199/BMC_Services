<?php
class Add_service_station extends CI_controller
{
	
	function __construct()
	{
		parent::__construct(); 	
	 	if($this->session->userdata('user_id') == null)
		{
			redirect(base_url('admin_login'));
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
			$data['jo_contact'] = $this->input->post('jo_contact');
			$data['councilor_name'] = $this->input->post('councilor_name');
			$data['councilor_contact'] = $this->input->post('councilor_contact');
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
		$result['ward'] = $this->service->get_data('ward_detail');
		if($type){
			$result['type'] = $this->service->search_category($type);
			// print_r($result['type']);die;
		}
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
				// $this->upload->display_errors();
				$dataa['type'] = 'success';
				// $dataa['msg'] = 'not updated';
				$data =$this->input->post();
				$result = $this->service->update_service_station($data);
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
		$this->load->view('header');
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

	public function check_category(){
		$data = $this->input->post('id');
		$result = $this->service->check_category($data);
		if(!empty($result)){
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
		}else{
			echo 0;
		}
	}

	public function ward_polygon(){
		$id = $this->uri->segment(3);
		$result['data'] = $this->service->get_perticuler_data('ward_detail','ward_number',$id);
		echo $this->load->view('polygon_ward',$result,true);
	}

	public function fetch_lat_lng(){
		$id = $this->uri->segment(3);
		$result['data'] = $this->service->get_perticuler_data('ward_detail','id',$id);
		echo $this->load->view('view_ward_latlng',$result,true);
	}

	// public function fetch_lat_lng(){
	// 	$id = $this->uri->segment(3);
	// 	$result = $this->service->get_perticuler_data('ward_detail','id',$id);
	// 	$latitude = json_decode($result['ward_lat']);
	// 	$longitude = json_decode($result['ward_lng']);
	// 	for($i=0;$i<count($latitude);$i++){
	// 		$output =   '<div class="form-group col-12 order_number">
	// 						<div class="form-group col-4">
	// 							<label for="pincode" class="form-control-label">Ward Latitude</label>
	//                  			<input type="text" name="ward_lat[]" id="view_ward_lat" value='.$latitude[$i].' class="form-control" placeholder="Enter Ward Latitude..." required><br>
	// 						</div>
	// 						<div class="form-group col-4">
	// 							<label for="pincode" class="form-control-label">Ward Longitude</label>
	// 							<input type="text" name="ward_lng[]" id="view_ward_lng" value='.$longitude[$i].' class="form-control" placeholder="Enter Ward Longitude..." required>
	// 						</div>';
	// 		if($i==0){
	// 			$output.=   '<div class="form-group">
	// 							<div class="col-md-3">
	// 								<button class="btn btn-success mod_add_field_button" style="margin-top: 30px;">Add-More</button>
	// 							</div>
	// 						</div>';
	// 		}else{
	// 			$output.=   '<div class="form-group">
	// 							<div class="col-md-3">
	// 								<button class="btn btn-success remove_field" style="margin-top:30px;">remove</button>
	//     						</div>
	// 						</div>
	// 						</div>';
	// 		}
	// 		$output.= '<span class="modal_input_fields_wrap"></span>';
	// 		$output.=   "<script>
	// 						$(document).ready(function() {
	// 							var max_fields      = 200; //maximum input boxes allowed
	// 							var mod_wrapper       = $('.modal_input_fields_wrap'); //Fields wrapper
	// 							var mod_add_button      = $('.mod_add_field_button'); //Add button ID
	// 							var x = 1; //initlal text box count
	// 							$(mod_add_button).click(function(e){ 
	// 					            e.preventDefault();
	// 					            if(x < max_fields){ 
	// 					                x++; 
	// 					                $(mod_wrapper).append('<div class='form-group col-12'><div class='form-group col-4'><label for='pincode' class='form-control-label'>Ward Latitude</label><input type='text' name='ward_lat[]' id='ward_lat' value='' class='form-control' placeholder='Enter Ward Latitude...' required><br></div><div class='form-group col-4'><label for='pincode' class='form-control-label'>Ward Longitude</label><input type='text' name='ward_lng[]' id='ward_lng' value='' class='form-control' placeholder='Enter Ward Longitude...' required></div><div class='col-md-3'><button class='btn btn-success remove_field' style='margin-top: 30px;'>remove</button></div></div>');
	// 					            }
	// 					        });
	// 							$(mod_wrapper).on('click','.remove_field', function(e){ 
	// 					            e.preventDefault(); $(this).parent('div').parent('div').remove(); x--;
	// 					        });
	// 					        $('.remove_field').click(function(e){
	// 					        	e.preventDefault();
	// 					        	$(this).parent('div').parent('div').parent('div.order_number').remove();
	// 					        })
	// 						});
	// 					</script>";
	// 		echo $output;
	// 	}
	// }

	function logout(){
		$this->session->sess_destroy();
		$this->load->view('#');
	}
}
?>