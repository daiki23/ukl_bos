<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sites extends CI_Controller {


public function __construct()
{
	parent::__construct();
	
}

	public function index()
	{
		echo 'halo';
	}

	public function bukutamu()
	{
		$data['title'] = 'Selamat Datang!';
		$data['notes'] = 'silahkan isi data anda dengan lengkap';

		$this->load->view('sites_view', $data);
	}

}

/* End of file sites.php */
/* Location: ./application/controllers/sites.php */