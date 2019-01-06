<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
        private $_table = "subscribers";

        public $id;
        public $name;
        public $email;
        public $no_wa;
        public $created_at;

        public function rules()
        {
                return [
                        ['field'        => 'name',
                        'label'         => 'Name',
                        'rules'         => 'required'],

                        ['field'        => 'email',
                        'label'         => 'Email',
                        'rules'         => 'required', 'email']       
                ];
        }

        public function getAll()
        {
                return $this->db->get($this->_table)->result();
        }

        public function getById($id)
        {
                return $this->db->get_where($this->_table, ["id" => $id])->row();
        }

        public function save()
        {
                $_POST = $this->input->post();
                $this->name          = $_POST['name']; 
                $this->email         = $_POST['email'];
                $this->no_wa         = $_POST['no_wa'];
                $this->created_at    = Date('Y-m-d H:i:s');

                $this->db->insert($this->_table, $this);
        }

        public function update()
        {
                $_POST = $this->input->post();
                $this->id            = $_POST['id']; 
                $this->name          = $_POST['name']; 
                $this->email         = $_POST['email'];
                $this->no_wa         = $_POST['no_wa'];
                $this->created_at    = Date('Y-m-d H:i:s');

                $this->db->update($this->_table, $this, array('id' => $_POST['id']));
        }

        public function delete($id)
        {
                return $this->db->delete($this->_table, array("id" => $id));
        }


}

?>