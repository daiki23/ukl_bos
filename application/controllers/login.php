<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$judul = "Selamat datang";
		$data['judul'] = $judul;
		$this->load->view('login_view',$data);
	}



	public function validasi()
	{
		if($this->input->post('submit')) {
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				$data['notif'] = 'Validasi sukses';
				$data['main_view'] = 'login_view';
				$this->load->view('login_view', $data);
			} else {
				$data['notif'] = validation_errors();
				$data['main_view'] = 'login_view';
				$this->load->view('login_view', $data);
			}
		}
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */