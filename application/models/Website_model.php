<?php 

class Website_model extends CI_Model{

	function __construct(){
		$this->load->database();
	}

	public function send_feedback($data){
		$query = $this->db->insert("kontak", $data);
		return $query;
	}


}