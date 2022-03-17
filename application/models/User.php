<?php 
class Users extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function insertUsers($var1){
		$this->db->insert('users',$var1);
		$rows=$this->db->affected_rows();
		return $rows;
	}

	
}
?>