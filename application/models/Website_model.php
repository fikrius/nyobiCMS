<?php 

class Website_model extends CI_Model{

	function __construct(){
		$this->load->database();
	}

	public function getPosts(){
		$query = $this->db->get("posts");
		return $query;
	}

	public function send_feedback($data){
		$query = $this->db->insert("kontak", $data);
		return $query;
	}

	//id read more
	public function read($where){
		$query = $this->db->get_where("posts", $where);
		return $query;
	}


}