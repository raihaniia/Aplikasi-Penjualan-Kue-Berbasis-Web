<?php

class Pesan extends CI_Controller{
    

public function tambah_pesan($id)
{



$data['detail'] = $this->pesan_model->ambil_id_cake($id);
$this->load->view('templates_pelanggan/header');
$this->load->view('pelanggan/tambah_pesan', $data);
$this->load->view('templates_pelanggan/footer');

}
    
    

 public function tambah_pesan_aksi()
 {
   

        
    $id_pelanggan = $this->session->userdata('id_pelanggan');
    $id_cake = $this->input->post('id_cake');
    $tanggal_pesan = $this->input->post('tanggal_pesan');

    $tanggal_ambil = $this->input->post('tanggal_ambil');
    $alamat_lengkap = $this->input->post('alamat_lengkap')
    ;
    $nohp = $this->input->post('nohp');
    $pengiriman = $this->input->post('pengiriman');
    $jml_pesan = $this->input->post('jml_pesan');
    $harga = $this->input->post('harga');
    $total_pembayaran = $this->input->post('total_pembayaran');

    $data = array(
        'id_pelanggan' =>$id_pelanggan,
        'id_cake' =>$id_cake,
        'tanggal_pesan' =>$tanggal_pesan,
        'tanggal_ambil' =>$tanggal_ambil,
        'alamat_lengkap' =>$alamat_lengkap,
        'nohp' =>$nohp,
        'pengiriman' => $pengiriman,
        'jml_pesan' =>$jml_pesan,
        'harga' =>$harga,
        'status_pesan' => 'Belum Selesai',
        'status_pengambilan' => 'Cake Belum Diambil',
    
        
        
    );

    $this->pesan_model->insert_data($data,'transaksi');
    
    $status = array (
        'status' => '0'

    );

    $id = array (
        'id_cake' => $id_cake
    );

    $this->pesan_model->update_data('cake',  $status,$id);
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Transaksi Berhasil, Silahkan Checkout !

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                        <span aria-hidden="true">&times;</span>
  </button>
</div>');

    redirect('pelanggan/data_cake');

 }
 
 

    public function _rules()
    {
        $this->form_validation->set_rules('id_pelanggan', 'Harga', 'required');
        $this->form_validation->set_rules('id_cake', 'Id Cake', 'required');
       
        $this->form_validation->set_rules('tanggal_pesan', 'Tanggal Pesan', 'required');
        $this->form_validation->set_rules('tanggal_ambil', 'Tanggal Ambil', 'required');
            
        $this->form_validation->set_rules('alamat_lengkap', 'Alamat Lengkap', 'required');
        $this->form_validation->set_rules('nohp', 'No Hp', 'required');
       
        $this->form_validation->set_rules('pengiriman', 'Pengiriman', 'required');
        
        $this->form_validation->set_rules('jml_pesan', 'Jumlah Pesan', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        
    
        $this->form_validation->set_rules('status_pesan', 'Status Pesan', 'required');
        
        $this->form_validation->set_rules('status_pengambilan', 'Status Pengambilan', 'required');
    
    
        
    }


}
 