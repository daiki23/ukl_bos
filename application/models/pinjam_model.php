<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pinjam_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

	public function insert($foto)

	{
		$data = array (

					'id' => NULL ,
					'judul_buku' => $this->input->post('judul_buku'),
					'gambar_buku' => $foto['file_name'],
					'deskripsi' => $this->input->post('deskripsi')

				);
				// end of susunan pemasukan model

				$this->db->insert('tb_dafpinjam' ,  $data);

				if($this->db->affected_rows() > 0) {
					return TRUE;
				}else {
					return FALSE;
				}


	}

}
