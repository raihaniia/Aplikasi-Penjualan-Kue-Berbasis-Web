<?php

class Pesan_model extends CI_Model{
			public function get_data($table){
		return $this->db->get($table);
	}




	public function ambil($table, $perPage, $start){
		return $this->db->get($table, $perPage, $start);
	}

public function baris(){


		return $this->db->get('penjualan')->num_rows();
        return $this->db->get('data_cake')->num_rows();
        return $this->db->get('data_type')->num_rows();
	
	}
	public function get_where($where, $table){
		return $this->db->get_where($table, $where);
	}
	public function insert_data($data, $table){
		 $this->db->insert($table, $data);
	}
 public function update_data($table, $data, $where){
		 $this->db->update($table, $data, $where);

}



public function delete_cake($where, $table)
{
	$this->db->where($where);
	$this->db->delete($table);
}

public function delete_transaksi($where, $table)
{
	$this->db->where($where);
	$this->db->delete($table);
}


public function delete_pembayaran($where, $table)
{
	$this->db->where($where);
	$this->db->delete($table);
}

public function hapus($where, $table)
{
	$this->db->where($where);
	$this->db->delete($table);
}


public function delete_penjualan($where, $table)
{
	$this->db->where($where);
	$this->db->delete($table);
}
 public function ambil_id_cake($id){
		$hasil = $this->db->where('id_cake' ,$id)->get('cake');
		if($hasil->num_rows()>0){
			return $hasil->result();
		}else{
			return false;
		}
		}

		public function cek_login()
		{
			$username = set_value('username');
			$password = set_value('password');
			$result = $this->db
			->where('username', $username)
			->where('password', md5($password))
			->limit(1)
			->get('pelanggan');

			if($result->num_rows()>0){
				return $result->row();

			}else{
				return FALSE;
			}
		}

public function update_password($where, $data, $table)
{
	$this->db->where($where);
	$this->db->update($table, $data);
}
		public function delete_type($where, $table)
{
	$this->db->where($where);
	$this->db->delete($table);
}

public function tampil_data(){
	return $this->db->get('tb_cake');
}

public function tambah_cake($data,$table){
	$this->db->insert($table,$data);
}

public function edit_cake($where,$table){
	return $this->db->get_where($table,$where);
}

public function edit($where, $table){
return $this->db->get_where($table,$where);
}


public function delete_data($where, $table)
{
	$this->db->where($where);
	$this->db->delete($table);
}

public function find($id){
	$result = $this->db->where('id_cake', $id)
	->limit(1)
	->get('tb_cake');
	if($result->num_rows()>0){
		return $result->row();

	}else{
		return array();
	}
}


public function downloadPembayaran($id)
{
	$query= $this->db->get_where('transaksi', array('id_pesan' =>$id));
	return $query->row_array();

}

}


