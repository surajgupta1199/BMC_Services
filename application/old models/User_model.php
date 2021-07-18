<?php  

/**
 * 
 */
class User_model extends CI_model
{
	public function check_login($where){
		return $this->db->select('*')->from('user_master')->where($where)->get()->row_array();
	}
}
?>