	<?php

	class Transaksi extends CI_Controller{
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
        
$data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, cake mb,
pelanggan cs WHERE tr.id_cake= mb.id_cake AND tr.id_pelanggan= cs.id_pelanggan")->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_transaksi', $data);
		$this->load->view('templates_admin/footer');
	}

	public function pembayaran($id)
	{
		$where = array ('id_pesan'=>$id);
		$data['pembayaran']= $this->db->query("SELECT * FROM transaksi WHERE id_pesan= '$id'")->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/konfirmasi_pembayaran', $data);
		$this->load->view('templates_admin/footer');
	}

	public function cek_pembayaran()
	{
		$id = $this->input->post('id_pesan');
		$status_pembayaran = $this->input->post('status_pembayaran');

		$data = array (
			'status_pembayaran' => $status_pembayaran,
		);

		$where = array(
			'id_pesan' => $id
		);


		$this->pesan_model->update_data('transaksi', $data,$where);
		redirect('admin/transaksi');
	}

	public function download_pembayaran($id)
	{
		$this->load->helper('download');
		$filePembayaran = $this->pesan_model->downloadPembayaran($id);
		$file = 'assets/upload/'.$filePembayaran['bukti_pembayaran'];

		force_download($file,NULL);

	}

	public function transaksi_selesai($id)
	{
		$where = array('id_pesan' =>$id);
		$data['transaksi']= $this->db->query("SELECT * FROM transaksi WHERE id_pesan='$id'")->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/transaksi_selesai', $data);
		$this->load->view('templates_admin/footer');
	}

	public function transaksi_selesai_aksi()
	{
		$id = $this->input->post('id_pesan');

		$tanggal_ambil = $this->input->post('tanggal_ambil');

		$status_pesan = $this->input->post('status_pesan');

		$status_pengambilan = $this->input->post('status_pengambilan');

	
		

		$data = array(
			'tanggal_ambil' =>$tanggal_ambil,
			'status_pesan' =>$status_pesan,
			'status_pengambilan' => $status_pengambilan
			
		);

		$where = array(
			'id_pesan'=>$id
		);

		$this->pesan_model->update_data('transaksi', $data, $where);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Transaksi Berhasil diUpdate!.

						<button type="button" class="close" data-dismiss="alert" aria-label="Close">

						<span aria-hidden="true">&times;</span>
			 </button>
			 </div>');

		redirect('admin/transaksi');



	}


	
}

?>