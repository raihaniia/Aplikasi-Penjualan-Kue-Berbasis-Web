<?php


class Data_type extends CI_Controller{
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
	public function index(){

	//pagination
	$row = $this->pesan_model->baris();


$config['base_url'] = 'http://www.sellcakebirthday.rf.gd/admin/data_type/index';
$config['total_rows'] = $row;
$config['per_page'] = 5;

$data['start'] = $this->uri->segment(4);

$this->pagination->initialize($config);
$data['type'] = $this->pesan_model->ambil('type', $config['per_page'], $data['start'])->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/Data_type', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_type()
	{
	$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/form_tambah_type');
		$this->load->view('templates_admin/footer');	
	}

	public function tambah_type_aksi()
	{
		$this->_rules();
		if($this->form_validation->run()== FALSE){
			$this->tambah_type();

		}else{
			$kode_type = $this->input->post('kode_type');
			$nama_type = $this->input->post('nama_type');

			$data= array(
				'kode_type' => $kode_type,
				'nama_type' => $nama_type,
			);

			$this->pesan_model->insert_data($data,'type');
					$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Type Berhasil Ditambahkan!.

						<button type="button" class="close" data-dismiss="alert" aria-label="Close">

						<span aria-hidden="true">&times;</span>
 		 </button>
			</div>');
					redirect('admin/data_type');
		}
	}

	public function update_type($id){
		$where = array('id_type' => $id);
		$data['type'] = $this->db->query("SELECT * FROM type WHERE id_type = '$id'")->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/form_update_type',$data);
		$this->load->view('templates_admin/footer');	
	}

	public function update_type_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run()== FALSE)
		{
			$this->update_type();

		}else{
			$id = $this->input->post('id_type');
			$kode_type = $this->input->post('kode_type');
			$nama_type = $this->input->post('nama_type');

			$data = array(
				'kode_type' => $kode_type,
				'nama_type'=> $nama_type
			);

			$where= array(
				'id_type' => $id
			);

			$this->pesan_model->update_data('type', $data, $where);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Type Berhasil Diupdate!.

						<button type="button" class="close" data-dismiss="alert" aria-label="Close">

						<span aria-hidden="true">&times;</span>
 		 </button>
			</div>');
					redirect('admin/data_type');

		}
	}



	public function _rules()
	{
		$this->form_validation->set_rules('kode_type', 'Kode_type', 'required');
		$this->form_validation->set_rules('nama_type', 'Nama_type', 'required');

	}
	public function delete_type($id)
	{
		$where = array('id_type' => $id);
		$this->pesan_model->delete_type($where, 'type' );
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Data Type Berhasil Dihapus!.

						<button type="button" class="close" data-dismiss="alert" aria-label="Close">

						<span aria-hidden="true">&times;</span>
 		 </button>
			</div>');
					redirect('admin/data_type');
	}
}