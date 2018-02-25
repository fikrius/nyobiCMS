<?php 

class Website extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model("website_model");
		$this->load->helper(array("form", "url"));
		$this->output->enable_profiler(TRUE);
	}

	public function index($halaman = "index"){
		$this->load->view("templates/website/header");
		$this->load->view("website/".$halaman);
		$this->load->view("templates/website/footer");
	}

	public function posts($halaman = "posts"){
		$this->load->view("templates/website/header");
		$this->load->view("website/".$halaman);
	}

	public function contact($halaman = "kontak"){
		$this->load->view("templates/website/header");
		$this->load->view("website/".$halaman);
		$this->load->view("templates/website/footer");
	}

	public function send_feedback(){
		//menangkap inputan user
		$nama = html_escape($this->input->post("nama"));
		$email = html_escape($this->input->post("email"));
		$website = html_escape($this->input->post("web"));
		$telpon = html_escape($this->input->post("telpon"));
		$pesan = html_escape($this->input->post("pesan"));

		//inputan user dimasukkan ke array
		$data = array(
				"nama" => $nama,
				"email" => $email,
				"website" => $website, 
				"telepon" => $telpon,
				"pesan" => $pesan
		);

		//memasukkan query ke dalam variabel
		$send = $this->website_model->send_feedback($data);
		//cek apakah data berhasil ditambahkan
		if($send){
			$this->session->set_flashdata("sukses", "pesan sukses");
			redirect("website/contact");
		}else{
			$this->session->set_flashdata("gagal", "pesan gagal");
			redirect("website/contact");
		}
	}

}