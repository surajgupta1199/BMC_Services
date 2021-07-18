<?php 
/**
 * 
 */
class Service_station_model extends CI_model
{
	public function insert_data($table,$data){
		return $this->db->insert($table,$data);
	}

	// public function get_all_data(){
	// 	return $this->db->select('*')
	// 					->from('service_registration')
	// 					->get()->result_array();
	// }

	public function get_all_data(){
		return $this->db->select('reg1.service_head,reg1.ward_number,reg1.pincode,reg1.nearby_location,reg1.city,reg1.id,reg1.manager_name,reg1.manager_email,reg1.manager_contact,reg1.status,reg1.state,reg1.location_latitude,reg1.location_longitude,reg1.store_ref_address,reg1.working_hour_from,reg1.working_hour_to,reg2.category_name as place ,reg1.file_name,reg1.profile,reg1.amount_services,reg1.type,reg3.category_name as type')
						->from('service_registration as reg1')
						->join('category_name as reg2','reg1.place = reg2.id')
						->join('category_name as reg3','reg1.type = reg3.id')
						->get()->result_array();
	}

	public function get_ward_particular_data($id,$ward_num){
		$data =  $this->db->query('SELECT * FROM service_registration WHERE place IN (SELECT `id` FROM `category_name` WHERE `parent_name` IN (' . implode(',', array_map('intval', $id)) . ')) AND ward_number = '.$ward_num.'');
		return $data->result_array();
	}

	public function get_particular_data($id){
		$data =  $this->db->query('SELECT * FROM service_registration WHERE place IN (SELECT `id` FROM `category_name` WHERE `parent_name` = '.$id.')');
		return $data->result_array();
	}

	public function get_ward_perticular_data($id,$ward_num){
		
		$data =  $this->db->query('SELECT * FROM service_registration WHERE place IN (SELECT `id` FROM `category_name` WHERE `parent_name` = '.$id.') AND ward_number = '.$ward_num.'');
		return $data->result_array();
	}

	public function get_perticuler_data($data,$id_type,$id){
		return $this->db->select('*')->from($data)->where($id_type,$id)->get()->row_array();
	}

	public function update_service_station($data){
		return $this->db->where('id',$data['id'])->update('service_registration',$data);
	}

	public function update_service_status($status,$id){
		return $this->db->where('id',$id)->update('service_registration',array('status'=>$status));
	}

	/*public function get_data(){
		return $this->db->select('location_latitude','location_longitude')
	}*/
	public function get_data($table){
		return $this->db->select('*')
						->from($table)
						->get()->result_array();
	}

	public function null_data(){
		return $this->db->select('*')
						->from('service_registration')
						->where('location_latitude IS NULL AND location_longitude IS NULL')
						->get()->result_array();
	}

	public function insert($data){
		return $this->db->insert('category_name',$data);
	}

	public function getAll(){
		return  $this->db->select('cat1.id, cat1.category_name, cat1.status,cat2.category_name as parent_name,cat1.parent_name as parent_id')
						->from('category_name as cat1')
						->join('category_name as cat2', 'cat1.parent_name = cat2.id','left')
						->get()->result_array();
	}

	// public function getAll(){
	// 	return  $this->db->select('cat1.id, cat1.category_name, cat1.status,cat2.category_name as parent_name,cat1.parent_name as parent_id')
	// 					->from('category_name as cat1')
	// 					->from('category_name as cat2')
	// 					->where('cat1.id = cat2.parent_name')
	// 					->get()->result_array();
	// }

	public function get_detail($id){
		return $this->db->select('*')
						->from('category_name')
						->where('id',$id)
						->get()->row_array();	
		/*select t1.category_name from category_name as t1,category_name as t2 where t2.parent_name = t1.id*/
		/*update category_name as t1 join  category_name as t2 on t2.parent_name= t1.id set t2.parent_name = t1.category_name*/
	}

	public function update_category($data,$id){
		return $this->db->where('id',$id)->update('category_name',$data);
	}

	public function delete_category($id){
		return $this->db->where('id',$id)->delete('category_name');
	}

	public function insert_user_rating($data){
		return $this->db->insert('user_rating',$data);
	}

	public function show_all_rating($id){
		$where = array(
			'service_id' => $id
		);
		return $this->db->select('*')
						->from('user_rating')
						->where($where)
						->get()->result_array();
	}

	public function average_rating($id){
		$where = array(
			'service_id' => $id
		);
		return $this->db->select('AVG(ratedindex)')
						->from('user_rating')
						->where($where)
						->get()->row_array();
	}

	public function no_of_rating($id){
		$where = array(
			'service_id' => $id
		);
		return $this->db->select('count(ratedindex)')
						->select('count(review)')
						->from('user_rating')
						->where($where)
						->get()->result_array();
	}

	public function count_of_rating($id){
		$where = array(
			'service_id' => $id
		);
		return $this->db->select('count(*) AS total')
						->select('ratedindex')
						->from('user_rating')
						->where($where)
						->group_by('ratedindex')
						->order_by("ratedindex","desc")
						->get()->result_array();
	}

	public function get_categories(){
		return $this->db->select('*')
					->from('category_name')
					->get()->result_array();
	}

	public function ward_selected_data($ward_num){
		return $this->db->query('SELECT DISTINCT(cat2.category_name) AS category_name, cat2.id FROM category_name AS cat1 JOIN category_name AS cat2 ON cat1.parent_name = cat2.id WHERE cat1.id IN (SELECT DISTINCT(cat.id) FROM `service_registration` as ser JOIN category_name as cat ON ser.place = cat.id WHERE ward_number = '.$ward_num.')')->result_array();
	}

	// public function ward_selected_data($id_type,$id,$table){
	// 	return $this->db->select('*')->from($table)->where($id_type,$id)->get()->result_array();
	// }

	public function show_active_data(){
		$where = array(
			'status' => 0
		);
		return $this->db->select('count(*)')
					->from('service_registration')
					->where($where)
					->get()->result_array();
	}

	public function total_service(){
		return $this->db->select('count(*)')
					->from('service_registration')
					->get()->result_array();
	}

	public function update_category_status($status,$id){
		$data = array(
			'status' => $status
		);
		$where = array(
			'id' => $id);
		return $this->db->set($data)->where($where)->update('category_name');
	}

	public function check_parent_child($id,$status,$parent_id){
		// print_r($parent_id);

		return $this->db->select('*')
					->from('category_name')
					->where('id',$parent_id)
					->get()->result_array();
	}

	public function delete_category_status($status,$id){
		$where = array(
			'id' => $id);
		return $this->db->where($where)->delete('category_name');
	}

	// public function save_upload($title,$image){
	// 	$data = array('title' => $title,'file_name' => $image);
	// 	return $this->db->insert('image',$data);

	// }

	public function insert_image($where,$data){
		// print_r($image['id']);
		// die;
		return $this->db->where($where)->update('service_registration',$data);

	}

	public function get_particular_image($id){
		$where = array('id' => $id);
		return $this->db->select('file_name')->from('service_registration')->where($where)->get()->row_array();
	}

	// public function update_image($where,$data){
	// 	return $this->db->where($where)->update('service_registration',$data);
	// }

	public function get_particular_file($id){
		$where = array('id' => $id);
		return $this->db->select('file_name')->from('service_registration')->where($where)->get()->row_array();
	}

	public function update_profile_image($array3,$id){
		$data = array('file_name' => $array3);
		$where = array('id' => $id);
		return $this->db->where($where)->update('service_registration',$data);
	}

	public function find_categories_name($id){
		$where = array(
			'id' =>$id);
		return $this->db->select('category_name')->from('category_name')->where($where)->get()->row_array();
	}

	public function get_particular_categories($where){
		return $this->db->select('reg1.service_head,reg1.pincode,reg1.nearby_location,reg1.city,reg1.id,reg1.manager_name,reg1.manager_email,reg1.manager_contact,reg1.status,reg1.state,reg1.location_latitude,reg1.location_longitude,reg1.store_ref_address,reg1.working_hour_from,reg1.working_hour_to,reg2.category_name as place ,reg1.file_name,reg1.profile,reg2.id as catid')
						->from('service_registration as reg1')
						->from('category_name as reg2')
						->where('reg1.place = reg2.id')
						->where($where)
						->get()->result_array();

	}

	public function user_registeration($data){
		return $this->db->insert('user_registeration',$data);
	}

	public function duplicate($email){
		$where = array(
			'user_email' =>$email
		);
		return $this->db->select('*')->from('user_registeration')->where($where)->get()->result_array();
	}

	public function check_user_login($where){
		return $this->db->select('*')->from('user_registeration')->where($where)->get()->row_array();
	}

	public function check_category($data){
		$where = array(
			'parent_name' => $data
		);
		return $this->db->select('*')->from('category_name')->where($where)->get()->result();
	}

	public function child_cat(){
		return $this->db->select('cat2.*')
						->from('category_name as cat1')
						->from('category_name as cat2')
						->where('cat1.parent_name = ""')
						->where('cat1.id = cat2.parent_name')
						->get()
						->result_array();
	}

	public function get_child_categories($id){
		return $this->db->select('*')->from('category_name')->where('parent_name',$id)->get()->result_array();
	}

	public function get_child_ward_categories($id,$ward_number){
		return $this->db->query('SELECT id,category_name from category_name WHERE parent_name = '.$id.' AND id IN (SELECT DISTINCT(place) FROM `service_registration` WHERE ward_number = '.$ward_number.')')->result_array();
	}

	// public function get_child_ward_categories($id,$ward_number){
	// 	return $this->db->select('*')->from('category_name')->where('parent_name = '.$id.' AND id IN '.$ward_number.'')->result_array();
	// }

	public function search_category($data){
		$where= array(
			'id' => $data);
		$parent_name = $this->db->select('parent_name')->from('category_name')->where($where)->get()->row_array();
		$id = $parent_name['parent_name'];
		$whereid = array(
			'parent_name' => $id);
		return $this->db->select('id,category_name')->from('category_name')->where($whereid)->get()->result_array();
	}

	public function fetch_parent_cat(){
		$where = array(
			'parent_name' => '');
		return $this->db->select('category_name,id')->from('category_name')->where($where)->get()->result_array();
	}
}
 ?>