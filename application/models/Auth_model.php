<?php  

class Auth_model extends CI_Model{

	function __construct(){
		$this->load->database();
	}

	//cek username
	public function cek_username($where){
		$query = $this->db->get_where("akun", $where);
		return $query;
	}

	//cek password
	public function cek_password($where){
		$query = $this->db->get_where("akun", $where);
		return $query;
	}

}