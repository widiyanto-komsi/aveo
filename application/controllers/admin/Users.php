
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent :: __construct();
         //validasi jika user belum login
        if($this->session->userdata('masuk') != TRUE){
            $url=base_url('');
            redirect($url);
        }
		$this->load->model("user_model");
		$this->load->library("form_validation");
	}


	public function index()
	{
		$data = array();
    	$data['subscribers'] = $this->user_model->getAll();
    	$this->load->view("admin/users/list", $data);
    }

    public function add()
    {
    	$user			= $this->user_model;
    	$validation		= $this->form_validation;
    	$validation->set_rules($user->rules());

    	 if ($validation->run()) {
            $user->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

    	$this->load->view("admin/users/add");

    }

    public function edit($id=null)
    {
    	if(!isset($id)) redirect('admin/users');

    	$user		= $this->user_model;
    	$validation	= $this->form_validation;
    	$validation->set_rules($user->rules());

    	if ($validation->run()) {
    		$user->update();
    		$this->session->set_flashdata('success', 'Berhasil disimpan');
    	}

    	$data["subscribers"] = $user->getById($id);
    	if (!$data["subscribers"]) show_404();

    	$this->load->view("admin/users/update", $data);
    }

    public function delete($id=null)
    {
    	if(!isset($id)) show_404();
    	if ($this->user_model->delete($id)) {
    		redirect(site_url('admin/users'));
    	}
    }

}