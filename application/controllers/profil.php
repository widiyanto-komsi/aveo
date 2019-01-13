<?php

class Profil extends CI_Controller {
    public function __construct(){
	    parent::__construct();

	    $this->load->model("user_model");
		$this->load->library("form_validation");
	    
    }

	public function index()
	{
        $this->load->view("home");
	}

	public function add()
    {
    	$user			= $this->user_model;
    	$validation		= $this->form_validation;
    	$validation->set_rules($user->rules());

    	 if ($validation->run()) {
            $user->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url(''));
        }

    	$this->load->view("home");

    }
}
