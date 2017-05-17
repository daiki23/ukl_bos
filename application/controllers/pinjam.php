<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pinjam extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('pinjam_model');
  }

  public function index()
  {
    $data['main_view'] = 'pinjam_view';

    $this->load->view('template' , $data);
  }

public function simpan()
{
$this->form_validation->set_rules('judul_buku','judul_buku','trim|required');
$this->form_validation->set_rules('deskripsi','deskripsi','trim|required');

if($this->form_validation->run() == TRUE)
{
  // konfigurasi upload foto
  $config['upload_path'] = './uploads/';
  $config['allowed_types'] = 'gif|jpg|png';
  $config['max_size'] = '10000';

  // load library upload file
  $this->load->library('upload' , $config);

  // jika upload berhasil
if($this->upload->do_upload('gambar_buku'))
{
  //menyimpan info file yg akan diup
  if ($this->pinjam_model->insert($this->upload->data()) == TRUE)
  {
    $data['notif'] = 'Pendaftaran berhasil!';
    $data['main_view'] = 'pinjam_view';
    $this->load->view('template', $data);
  }
  else
  {
  $data['notif'] = 'Pendaftaran gagal!';
  $data['main_view'] = 'pinjam_view';
  $this->load->view('template', $data);
  }
}
// jika up gagal
else
{
  $data['main_view'] = 'pinjam_view';
  $data['notif'] = $this->upload->display_errors();
  $this->load->view('template', $data);
}
}
else {
  $data['notif'] = validation_errors();
  $data['main_view'] = 'pinjam_view';
  $this->load->view('template', $data);
}



}

}
?>
