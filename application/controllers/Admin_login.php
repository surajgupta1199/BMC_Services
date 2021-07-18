<?php

/**
 * 
 */
class Admin_login extends CI_Controller
{
	function __construct()
	{
		parent::__construct(); 
	 	
	 	$this->load->model('User_model','user');
	 	$this->load->model('Service_station_model','service');
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
}

?>