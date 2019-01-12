<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
        function auth_admin($username,$password){
		$query=$this->db->query("SELECT * FROM admin WHERE username='$username' AND password=MD5('$password') LIMIT 1");
		return $query;
	}

}

?>