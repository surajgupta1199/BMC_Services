<?php

/**
 * 
 */
class User_login extends CI_Controller
{
	function __construct()
	{
		parent::__construct(); 
	 	
	 	$this->load->model('User_model','user');
	}

	function index(){
		$this->load->view('user_login');

	}

	function login(){
		$where = array('email'=>$this->input->post('email'),
						'password'=>$this->input->post('password'));
		$result = $this->user->check_login($where);
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

	function logout(){
		$this->session->sess_destroy();
		$this->load->view('user_login');
	}

	//AIzaSyCGUoOA_uOD0_AFFnxVfSI_y2chqqqcoUk
	/*<script async defer
    	src="https://maps.googleapis.com/maps/api/js?key={your api key}&callback=loadMap">
	</script>
	*/
	
}

?>