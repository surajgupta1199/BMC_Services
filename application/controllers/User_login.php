<?php

class User_login extends CI_Controller
{
	function __construct()
	{
		parent::__construct(); 
	 	
	 	$this->load->model('User_model','user');
	 	$this->load->model('Service_station_model','service');
	}

	function index(){
		$result['value'] =$this->service->null_data();
		$result['data'] = $this->service->get_all_data();
		$result['categories'] = $this->service->fetch_parent_cat();
		$result['ward_data'] = $this->service->get_data('ward_detail');
		$this->load->view('view_categories',$result);
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

	public function show_ward_categories_id(){
		$ward_num = $this->uri->segment(3);
		$result = $this->service->ward_selected_data($ward_num);				
		if(count($result) > 0){
			echo "success";
		}else{
			echo "unsuccess";
		}
	}

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
			$result['data'] = $this->service->get_ward_part_data($ward_id,$ward_num);
			$result['content'] = $this->service->ward_selected_data($ward_num);
			$result['categories'] = array();
			$result['ward_ids'] = $ward_num;
		}
		$this->load->view('view_categories_data',$result);
	}

	public function show_particular_categories(){
		$id = $this->input->post('id');
		$detail = $this->input->post('detail');
		$result['value'] =$this->service->null_data();
		if($detail == 0){
			$where = array(
				'reg2.id' => $id,
				'reg1.ward_number' => '');
			$result['data'] = $this->service->get_particular_categories($where);
		}else{
			$where = array(
				'reg2.id' => $id,
				'reg1.ward_number' => $detail);
			$result['data'] = $this->service->get_particular_categories($where);
		}
		echo $this->load->view('show_parent_cat',$result,true);
	}

	public function show_child_categories(){
		$id = $this->input->post('id');
		$ward_number = $this->input->post('detail');
		if($ward_number == 'default'){
			$result = $this->service->get_child_categories($id);
		}else{
			$result = $this->service->get_child_ward_categories($id,$ward_number);
		}
		$output = '<li>';
		foreach ($result as  $item) {
			if($ward_number == 'default'){
				$output.="<li><a href='#'  style='font-size: 18px;' onclick = 'mycategories(".$item['id'].",0)' aria-describedby='cbx-l2'>".$item['category_name']."</a></li>";	
			}else{
				$output.="<li><a href='#'  style='font-size: 18px;' onclick = 'mycategories(".$item['id'].",".$ward_number.")' aria-describedby='cbx-l2'>".$item['category_name']."</a></li>";
			}
		}
		$output.= '</li>';
		echo $output;
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
		echo $this->load->view('show_parent_cat',$result,true);
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

	function logout(){
		$this->session->sess_destroy();
		$this->load->view('user_login');
	}
}

?>