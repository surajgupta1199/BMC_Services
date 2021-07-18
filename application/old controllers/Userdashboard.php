<?php  

/**
 * 
 */
class Userdashboard extends CI_controller
{

	function __construct()
	{
		parent::__construct(); 	
	 	if($this->session->userdata('user_id') == null)
		{
			// $this->load->view('users/dashboard');
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
			$result['data'] = $this->service->show_active_data();
			$result['all_data'] = $this->service->total_service();
			$this->load->view('header');
			$this->load->view('userdashboard',$result);
			$this->load->view('footer');
	}
	
	// function __construct(argument)
	// {
	// 	# code...
	// }
}
?>