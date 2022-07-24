<?php


class Penjualan extends CI_Controller
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


$config['base_url'] = 'http://www.sellcakebirthday.rf.gd/admin/penjualan/index';
$config['total_rows'] = $row;
$config['per_page'] = 5;

$data['start'] = $this->uri->segment(4);

$this->pagination->initialize($config);
$data['penjualan'] = $this->pesan_model->ambil('penjualan', $config['per_page'], $data['start'])->result();
	
	

	
	$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/penjualan',$data);
		$this->load->view('templates_admin/footer');
}

public function tambah_penjualan()
{
	
	$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/form_tambah_penjualan');
		$this->load->view('templates_admin/footer');
}
public function tambah_penjualan_aksi()
{
	$this->_rules();
	if ($this->form_validation->run() == FALSE) {
		$this->tambah_penjualan();

			}else{

		
		
		$tgl_masuk = $this->input->post('tgl_masuk');
		$menu = $this->input->post('menu');
	
		$stok = $this->input->post('stok');
		$sisa = $this->input->post('sisa');
		
		$terjual = $this->input->post('terjual');
		$harga = $this->input->post('harga');
		$total = $this->input->post('total');
		
				$data = array(

					
					'tgl_masuk'=> $tgl_masuk,
					'menu'=> $menu,
					'stok'=> $stok,
					'sisa'=> $sisa,
					'terjual'=> $terjual,
					'harga'=> $harga,
					'total'=> $total

					);


				$this->pesan_model->insert_data($data,'penjualan');
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data penjualan Berhasil Ditambahkan!.

					<button type="button" class="close" data-dismiss="alert" aria-label="Close">

					<span aria-hidden="true">&times;</span>
</button>
</div>');
				redirect('admin/penjualan');
	
}
}
public function update_penjualan($id)
{
	$where = array('id_menu' => $id);
	$data['penjualan'] = $this->db->query("SELECT * FROM penjualan WHERE id_menu = '$id'")->result();
	
	$this->load->view('templates_admin/header');
	$this->load->view('templates_admin/sidebar');
	$this->load->view('admin/form_update_penjualan',$data);
	$this->load->view('templates_admin/footer');
	}

public function update_penjualan_aksi()
{
		$this->_rules();
		if ($this->form_validation->run()== FALSE) 
		{
			$this->update_penjualan();

		}else{
		
		$id 	= $this->input->post('id_menu');
		
		$tgl_masuk = $this->input->post('tgl_masuk');
		$menu = $this->input->post('menu');
		$stok = $this->input->post('stok');
		$sisa = $this->input->post('sisa');
		$terjual = $this->input->post('terjual');
		$harga = $this->input->post('harga');
		$total = $this->input->post('total');


				$data = array(
					
					
					'tgl_masuk'=> $tgl_masuk,
					'menu'=> $menu,
					'stok'=> $stok,
					'sisa'=> $sisa,
					'terjual'=> $terjual,
					'harga'=> $harga,
					'total'=> $total
				
			);

			$where= array(			
				'id_menu' => $id
			);

			$this->pesan_model->update_data('penjualan', $data,$where);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data penjualan Berhasil Diupdate.

					<button type="button" class="close" data-dismiss="alert" aria-label="Close">

					<span aria-hidden="true">&times;</span>
</button>
</div>');
				redirect('admin/penjualan');
	}
}




		public function _rules(){

		
		
		$this->form_validation->set_rules('tgl_masuk', 'tgl_masuk', 'required');
		$this->form_validation->set_rules('menu', 'Menu', 'required');
		
		$this->form_validation->set_rules('stok', 'Stok', 'required');
		$this->form_validation->set_rules('sisa', 'Sisa', 'required');
		$this->form_validation->set_rules('terjual', 'Terjual', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required');
		$this->form_validation->set_rules('total', 'Total', 'required');
		

}

public function delete_penjualan($id_menu)
{
	$where =  array('id_menu' =>$id_menu); 
	$this->pesan_model->delete_penjualan($where,'penjualan');
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Data penjualan Berhasil Dihapus.

					<button type="button" class="close" data-dismiss="alert" aria-label="Close">

					<span aria-hidden="true">&times;</span>
</button>
</div>');
				redirect('admin/penjualan');
	
	
}
}
?>