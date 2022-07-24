<?php


/**
* 
*/
class Data_cake extends CI_Controller
{
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
   	//pagination
	$row = $this->pesan_model->baris();


$config['base_url'] = 'http://localhost/nilacake/admin/data_cake/index';
$config['total_rows'] = $row;
$config['per_page'] = 22;

$data['start'] = $this->uri->segment(4);

$this->pagination->initialize($config);
$data['cake'] = $this->pesan_model->ambil('cake', $config['per_page'], $data['start'])->result();
	$data['type'] = $this->pesan_model->get_data('type')->result();
	$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/Data_cake',$data);
		$this->load->view('templates_admin/footer');
}

public function tambah_cake()
{
	$data['type'] = $this->pesan_model->get_data('type')->result();
	$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/form_tambah_cake',$data);
		$this->load->view('templates_admin/footer');
}
public function tambah_cake_aksi()
{
	$this->_rules();
	if ($this->form_validation->run () == FALSE) {
		$this->tambah_cake();
	}else{


		$kode_type = $this->input->post('kode_type');
		$nama_cake = $this->input->post('nama_cake');
		$status = $this->input->post('status');
		$harga = $this->input->post('harga');
			
		$gambar = $_FILES['gambar']['name'];
		if($gambar=''){}else{


			$config ['upload_path']  = './assets/upload';
			$config ['allowed_types']  = 'jpg|jpeg|png|tiff|word|pdf|excel';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar')){
				echo "Gambar cake Gagal diupload";

			}else{
				$gambar=$this->upload->data('file_name');
			}
		}
			
				$data = array(
					'kode_type'=> $kode_type,
					'nama_cake'=> $nama_cake,
					
					'status'=> $status,
					'harga'=> $harga,
					
					
				
					'gambar'=> $gambar
					);

				$this->pesan_model->insert_data($data,'cake');
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data cake Berhasil Ditambahkan!.

					<button type="button" class="close" data-dismiss="alert" aria-label="Close">

					<span aria-hidden="true">&times;</span>
</button>
</div>');
				redirect('admin/data_cake');
	}
	}

	public function update_cake($id){
		$where = array('id_cake' => $id);
		$data['cake'] = $this->db->query("SELECT * FROM cake mb, type tp WHERE mb.kode_type=tp.kode_type AND mb.id_cake='$id'")->result();
		$data['type'] = $this->pesan_model->get_data('type')->result();
	$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/form_update_cake',$data);
		$this->load->view('templates_admin/footer');
	}

	public function update_cake_aksi(){
		$this->_rules();
		if ($this->form_validation->run () == FALSE) 
		{
		$this->update_cake();
	}else{
		$id = $this->input->post('id_cake');

		$kode_type = $this->input->post('kode_type');
		$nama_cake= $this->input->post('nama_cake');
		
		$status = $this->input->post('status');
		$harga = $this->input->post('harga');
		
		
		$gambar = $_FILES['gambar']['name'];
		if($gambar){


			$config ['upload_path']  = './assets/upload';
			$config ['allowed_types']  = 'jpg|jpeg|png|tiff|word|pdf|excel';

			$this->load->library('upload', $config);
			if($this->upload->do_upload('gambar')){
			$gambar=$this->upload->data('file_name');
			$this->db->set('gambar', $gambar);
			}else{
				
				echo $this->upload->display_errors();

		}
	}
			
				$data = array(
					'kode_type'=> $kode_type,
					'nama_cake'=> $nama_cake,
					
					'status'=> $status,
					'harga'=> $harga
				
					);

			$where = array(
				'id_cake' =>$id
			);
			$this->pesan_model->update_data('cake', $data, $where);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data cake Berhasil Diupdate!.

					<button type="button" class="close" data-dismiss="alert" aria-label="Close">

					<span aria-hidden="true">&times;</span>
</button>
</div>');
				redirect('admin/data_cake');
	}
}
	public function _rules(){
		$this->form_validation->set_rules('kode_type', 'Kode Type', 'required');
		$this->form_validation->set_rules('nama_cake', 'Nama_cake', 'required');
       
		$this->form_validation->set_rules('status', 'Status', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required');
		
	}

	public function detail_cake($id)
{
	$data['detail'] = $this->pesan_model->ambil_id_cake($id);
	$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_cake', $data);
		$this->load->view('templates_admin/footer');
	
}

	public function delete_cake($id)
{
	$where =  array('id_cake' =>$id); 
	$this->pesan_model->delete_cake($where,'cake');
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Data cake Berhasil Dihapus!.

					<button type="button" class="close" data-dismiss="alert" aria-label="Close">

					<span aria-hidden="true">&times;</span>
</button>
</div>');
				redirect('admin/data_cake');
	
	
}

}