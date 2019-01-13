<?php

class Overview extends CI_Controller {
    public function __construct(){
	    parent::__construct();
	    //validasi jika user belum login
	    if($this->session->userdata('masuk') != TRUE){
			$url=base_url('index.php/admin');
			redirect($url);
		}
    }

	public function index()
	{
        // load view admin/overview.php
        $this->load->view("admin/overview");
	}
}
