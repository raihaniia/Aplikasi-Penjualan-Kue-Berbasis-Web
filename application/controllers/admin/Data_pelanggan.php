<?php

class Data_pelanggan extends CI_Controller{
    public function __construct(){
 		parent::__construct();
 		if($this->session->userdata('role_id') !='1'){
 			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
Anda Belum Login Sebagai Admin!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');

 			redirect('auth/login');
 		}
 	}

	public function index()
	{

		$data['pelanggan'] = $this->pesan_model->get_data('pelanggan')->result();
		$this->load->view('templates_admin/header');
 		$this->load->view('templates_admin/sidebar');
 		$this->load->view('admin/Data_pelanggan',$data);
 		$this->load->view('templates_admin/footer');
	}

	public function tambah_pelanggan()
	{
		$this->load->view('templates_admin/header');
 		$this->load->view('templates_admin/sidebar');
 		$this->load->view('admin/form_tambah_pelanggan');
 		$this->load->view('templates_admin/footer');
	}

	public function tambah_pelanggan_aksi()
	{
		$this->_rules();
		if($this->form_validation->run()== FALSE){
			$this->tambah_pelanggan();

		}else{

			$nama = $this->input->post('nama');
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$role_id = $this->input->post('role_id');
		

			$data = array(
				'nama'  => $nama,
				'username' => $username,
				'password' => $password,
				'role_id' => $role_id
			);
			
			$this->pesan_model->insert_data($data, 'pelanggan');
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data pelanggan Berhasil Ditambahkan!.

						<button type="button" class="close" data-dismiss="alert" aria-label="Close">

						<span aria-hidden="true">&times;</span>
  </button>
</div>');
					redirect('admin/data_pelanggan');


		}
	}

	public function update_pelanggan($id)
	{
		$where = array('id_pelanggan' => $id);
		$data['pelanggan'] = $this->db->query("SELECT * FROM pelanggan WHERE id_pelanggan = '$id'")->result();
		$this->load->view('templates_admin/header');
 		$this->load->view('templates_admin/sidebar');
 		$this->load->view('admin/form_update_pelanggan', $data);
 		$this->load->view('templates_admin/footer');

	}

	public function update_pelanggan_aksi()
	{
		$this->_rules();
		if($this->form_validation->run()== FALSE){
			$this->update_pelanggan();

		}else{

			$id 	= $this->input->post('id_pelanggan');
			$nama 	= $this->input->post('nama');
			$username = $this->input->post('username');
			
			$password = md5($this->input->post('password'));
			$role_id = $this->input->post('role_id');
			

			$data = array(
				'nama'  => $nama,
				'username' => $username,
				
				'password' => $password,
				'role_id' => $role_id
			);

			$where = array(
				'id_pelanggan' => $id
			);

			$this->pesan_model->update_data('pelanggan', $data,$where);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data pelanggan Berhasil Diupdate!.

						<button type="button" class="close" data-dismiss="alert" aria-label="Close">

						<span aria-hidden="true">&times;</span>
  </button>
</div>');
					redirect('admin/data_pelanggan');


}
	}

	public function delete_pelanggan($id)
	{
		$where = array('id_pelanggan' => $id);
		$this->pesan_model->delete_data($where, 'pelanggan' );
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Data pelanggan Berhasil Dihapus!.

						<button type="button" class="close" data-dismiss="alert" aria-label="Close">

						<span aria-hidden="true">&times;</span>
  </button>
</div>');
					redirect('admin/data_pelanggan');
	
}


	public function _rules()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('role_id', 'Role Id', 'required');

	}
	}
