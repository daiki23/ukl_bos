<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model {

public function __construct()
{
	parent::__construct();
	//Do your magic here
}
	
function cek_user ($username,$password){
	$this->db->where('username',$username);
	$this->db->where('password',$password);
	$query = $this->db->get('admin');
	return $query->result_array();
}


}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */