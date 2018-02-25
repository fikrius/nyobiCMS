<?php  

class Admin extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array("url"));
		$this->load->model("admin_model");
		$this->output->enable_profiler(TRUE);
		//cek session saat login ada atau tidak, jika tidk ada maka akan ditendang ke halaman login
		if($this->session->userdata("sess_user") == ""){
			redirect("auth/index");
		}
	}
	
	public function index(){
		$data["jumlah_pesan"] = $this->admin_model->jumlah_pesan();
		$data["pesan_limit"] = $this->admin_model->get_cuplikan_pesan();

		$this->load->view("templates/admin/header");
		$this->load->view("admin/index", $data);
		$this->load->view("templates/admin/left_side");
		$this->load->view("templates/admin/footer");

	}

	public function write_post(){
		$data["jumlah_pesan"] = $this->admin_model->jumlah_pesan();
		$data["pesan_limit"] = $this->admin_model->get_cuplikan_pesan();
		$data["pesan_error"] = array(
			"error" => ""
		);

		$this->load->view("templates/admin/header");
		$this->load->view("admin/write_post", $data);
		$this->load->view("templates/admin/left_side");
		$this->load->view("templates/admin/footer");
	}

	public function send_post(){

	}

	public function post_list(){
		$data["jumlah_pesan"] = $this->admin_model->jumlah_pesan();
		$data["pesan_limit"] = $this->admin_model->get_cuplikan_pesan();

		$this->load->view("templates/admin/header");
		$this->load->view("admin/post_list", $data);
		$this->load->view("templates/admin/left_side");
		$this->load->view("templates/admin/footer");
	}

	//menampilkan halaman yang berisi feedback
	public function feedback(){
		$data["jumlah_pesan"] = $this->admin_model->jumlah_pesan();
		$data["pesan_limit"] = $this->admin_model->get_cuplikan_pesan();
		$data["get_feedback"] = $this->admin_model->get_feedback();

		$this->load->view("templates/admin/header");
		$this->load->view("admin/feedback", $data);
		$this->load->view("templates/admin/left_side");
		$this->load->view("templates/admin/footer");
	}

	//tampil halaman create new admin
	public function new_admin(){
		$data["jumlah_pesan"] = $this->admin_model->jumlah_pesan();
		$data["pesan_limit"] = $this->admin_model->get_cuplikan_pesan();

		$this->load->view("templates/admin/header");
		$this->load->view("admin/new_admin", $data);
		$this->load->view("templates/admin/left_side", array("error" => ""));
		$this->load->view("templates/admin/footer");
	}

	//membuat admin baru
	public function create_new_admin(){
		//menangkap inputan dari form create new admin
		$nama = html_escape($this->input->post("nama"));
		$username = html_escape($this->input->post("username"));
		$password = html_escape($this->input->post("password"));
		$konfirmasi_password = html_escape($this->input->post("konfirmasi_password"));
		$profesi = html_escape($this->input->post("profesi"));
		$tanggal_dibuat = html_escape($this->input->post("tanggal_dibuat"));

		//cek konfirmasi password sama atau tidak
		if($password != $konfirmasi_password){
			echo "<script>
					alert('Wrong password confirmation!');
					window.location.href = 'new_admin';
				</script>";
		}else{
			//mengatur file gambar yang akan diupload
			$config['upload_path']          = 'assets/upload/images';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('foto_profil'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    $this->load->view('admin/tes_error/error', $error);
            }
            else
            {
                    $foto_profil = array('upload_data' => $this->upload->data());

                    //memasukkan data inputan ke dalam array
					$data = array(
							"nama" => $nama,
							"username" => $username,
							"password" => md5($password),
							"profesi" => $profesi,
							"foto_profil" => $foto_profil,
							"tanggal_dibuat" => $tanggal_dibuat
					);

                   	$upload_all_data = $this->admin_model->create_new_admin($data);
                   	if($upload_all_data->num_rows() == 1){
                   		$this->load->view('admin/tes_error/success');
                   	}
            }

			

			
		}


	}

	public function logout(){
		$this->session->unset_userdata("sess_user");
		session_destroy();
		redirect("auth/index");
	}


}