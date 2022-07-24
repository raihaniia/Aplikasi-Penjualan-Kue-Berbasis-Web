<?php

class Dashboard extends CI_Controller{
   
	public function index()
	{
		$data['cake'] = $this->pesan_model->get_data('cake')->result();
			$this->load->view('templates_pelanggan/header');
		$this->load->view('pelanggan/dashboard',$data);
			$this->load->view('templates_pelanggan/footer');
	}
		public function detail_cake($id)
	{
		$data['detail'] = $this->pesan_model->ambil_id_cake($id);
			$this->load->view('templates_pelanggan/header');
		$this->load->view('pelanggan/detail_cake', $data);
			$this->load->view('templates_pelanggan/footer');
	}
}