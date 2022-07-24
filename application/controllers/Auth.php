<?php

class Auth extends CI_Controller
 { 
  function __construct()
    {
        parent::__construct();
        $this->load->model('pesan_model');
    }
  
  public function login()
  {
    $this->_rules();
    if($this->form_validation->run()==FALSE)
 {


  $this->load->view('templates_admin/header');
  $this->load->view('form_login');
  $this->load->view('templates_admin/footer');
 }else{
  $username = $this->input->post('username');
  $password = md5($this->input->post('password'));

  $cek = $this->pesan_model->cek_login($username, $password);
 


  if($cek == FALSE)
  {
    $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  Username atau Password Anda Salah
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
    redirect('auth/login');
  }else{
    $this->session->set_userdata('username', $cek->username);
    $this->session->set_userdata('role_id', $cek->role_id);
    $this->session->set_userdata('nama', $cek->nama);
    $this->session->set_userdata('id_pelanggan', $cek->id_pelanggan);

    switch ($cek->role_id) {
      case 1 : redirect('admin/data_cake');
             break;
      case 2 : redirect('pelanggan/dashboard');
             break;
      
      default:
    
        break;
    }
  }

}
}

public function _rules()
{
  $this->form_validation->set_rules('username', 'Username', 'required');
  $this->form_validation->set_rules('password', 'Password', 'required');
}

public function logout()
{
  $this->session->sess_destroy();
  redirect('pelanggan/dashboard');
}

public function ganti_password()
{

$this->load->view('templates_admin/header');
  $this->load->view('ganti_password');
  $this->load->view('templates_admin/footer');
}

public function ganti_password_aksi()
{
  $pass_baru = $this->input->post('pass_baru');
  $ulang_pass = $this->input->post('ulang_pass');
  $this->form_validation->set_rules('pass_baru', 'Password Baru', 'required|matches[ulang_pass]');
  $this->form_validation->set_rules('ulang_pass', 'Ulangi Password', 'required');

  if($this->form_validation->run() != false){
    
  $data = array('password' => md5($pass_baru));
  $id= array('id_pelanggan' =>$this->session->userdata('id_pelanggan'));

  $this->pesan_model->update_password($id, $data, 'pelanggan');
  $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  Password Berhasil dirubah , Silahkan Login!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
    redirect('auth/login');
 }else{
  $this->load->view('templates_admin/header');
  $this->load->view('ganti_password');
  $this->load->view('templates_admin/footer');
 }
}
}