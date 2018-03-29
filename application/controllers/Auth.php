<?php  

class Auth extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model("auth_model");
		$this->load->helper(array("form", "url"));
		$this->output->enable_profiler(TRUE);
	}

	public function index(){
		$this->load->view("templates/website/header");
		$this->load->view("auth/login");
		$this->load->view("templates/website/footer");
	}

	public function login(){
		$this->benchmark->mark("login_start"); //login_start-> awal penanda

		//menangkap data dari inputan form
		$username = html_escape($this->input->post("username"));
		$password = html_escape($this->input->post("password"));

		//cek username 
		$where = array(
				"username" => $username
		);

		$cek_username = $this->auth_model->cek_username($where);
		if($cek_username->num_rows() == 1){
			//cek password
			$where = array(
					"password" => $password
			);
			$cek_password = $this->auth_model->cek_password($where);
			if($cek_password->num_rows() == 1){
				//set session admin
				foreach($cek_password->result() as $hasil){
					$data_session["sess_user"] = $hasil->username;
					$data_session["nama"] = $hasil->nama;
					$data_session["profesi"] = $hasil->profesi;
					$data_session["foto_profil"] = $hasil->foto_profil;
					$data_session["tanggal_dibuat"] = $hasil->tanggal_dibuat;
				}

				$this->session->set_userdata($data_session);
				redirect("admin/index");
			}else{
				$this->session->set_flashdata("gagal", "password");
				redirect("auth/index");
			}
		}else{
			$this->session->set_flashdata("gagal", "username");
			redirect("auth/index");
		}
	
		$this->benchmark->mark("login_end");  //login_end = akhir penanda
	}
}