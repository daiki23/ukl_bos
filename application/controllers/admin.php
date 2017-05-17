<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

public function __construct()
{
	parent::__construct();
	//Do your magic here
}

	public function index()
	{
	

if($this->session->userdata('logged_in') == TRUE){
	redirect(base_url('index.php/admin/page'),'refresh');
}else{
	$this->load->view('login_view');
}

	}


public function page()

{
		$data['view'] = 'dashboard';
	$this->load->view('templates', $data);

}


public function masuk()
	{
		if($this->input->post('submit'))
		{
			$this->form_validation->set_rules('username', 'Username','trim|required');
			$this->form_validation->set_rules('password', 'Password','trim|required');

			if ($this->form_validation->run() == TRUE)
			{
				if($this->admin_model->cek_user() == TRUE)
				{
					redirect(base_url('index.php/admin/page'));
				}
				else
				{
					$data['notif'] = 'Login Gagal!';
					$this->load->view('login_view', $data);
				}
			} else
			{
				$data['notif'] = validation_errors();
				$this->load->view('login_view', $data);
			}
		}
	}




}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */