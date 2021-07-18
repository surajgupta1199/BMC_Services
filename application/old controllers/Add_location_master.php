<?php  
/**
 * 
 */
class Add_location_master extends CI_controller
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
		$this->load->model(''); 	
	 	$this->load->helper('date');
		$now = new DateTime();
		$now->setTimezone(new DateTimezone('Asia/Kolkata'));
		$this->current_date=$now->format('Y-m-d H:i:s');
	}

	function index(){
		$this->load->view('header');
		$this->load->view('add_location_view');
		$this->load->view('footer');
	}

	
}
?>