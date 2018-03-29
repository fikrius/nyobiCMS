<?php 

class Admin_model extends CI_Model{

	function __construct(){
		$this->load->database();
	}

	//menampilkan jumlah pesan yang masuk
	public function jumlah_pesan(){
		$query = $this->db->count_all("kontak");
		return $query;
	}

	//menampilkan cuplikan pesan di notif bar
	public function get_cuplikan_pesan(){
		$this->db->select("id_kontak, nama, SUBSTRING(pesan, 1, 30) as pesan");
		$this->db->from("kontak");
		$this->db->order_by("id_kontak", "DESC");
		$this->db->limit(3);
		return $this->db->get();
	}

	//menampilkan seluruh pesan
	public function get_feedback(){
		$query = $this->db->get("kontak");
		return $query;
	}

	//create new admin
	public function create_new_admin($data){
		$query = $this->db->insert("akun", $data);
		return $query;
	}

	//upload file
	public function upload($data){
		$query = $this->db->insert("posts", $data);
		return $query;
	}

	// tampil post
	public function tampil_post(){
		$this->db->select("judul, SUBSTRING(isi, 1, 50) as isi, kategori, tanggal, tag");
		$this->db->from("posts");
		return $this->db->get();
	}

	//tampil profile
	public function get_profile(){
		$query = $this->db->get("akun");
		return $query;
	}


}