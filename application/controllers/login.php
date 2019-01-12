<?php
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	function index(){
		$this->load->view('admin/login');
	}

	function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
		$cek=$this->login_model->auth_admin($username,$password);
		if($cek->num_rows() > 0){
			$data=$cek->row_array();
		    $this->session->set_userdata('masuk',TRUE);
			$this->session->set_userdata('akses','1');
			$this->session->set_userdata('ses_id',$data['username']);
			$this->session->set_userdata('ses_name',$data['name']);
			redirect('admin/overview');
		}else{  // jika username dan password tidak ditemukan atau salah
			$url=base_url('');
			echo $this->session->set_flashdata('msg','Username Atau Password Salah');
			redirect($url);
		}  					  

    }

    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }

}
