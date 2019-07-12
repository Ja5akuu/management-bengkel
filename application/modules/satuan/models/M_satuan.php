<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_satuan extends CI_Model {

	// view
	public function allsatuan()
	{
		$query = $this->db->query("select * from tb_satuan");

		return $query;
	}

	//kode ototmatis
	public function kodeotomatis()
	{
		 $this->db->select('RIGHT(tb_satuan.id_satuan,4) as kode', FALSE);
		  $this->db->order_by('id_satuan','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('tb_satuan');      //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
		   //jika kode ternyata sudah ada.      
		   $data = $query->row();      
		   $kode = intval($data->kode) + 1;    
		  }
		  else {      
		   //jika kode belum ada      
		   $kode = 1;    
		  }
		  $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
		  $kode = 'STN-';
		  $kodejadi = $kode.$kodemax;    // hasilnya ODJ-9921-0001 dst.
		  return $kodejadi;  
	}

	// save
	public function save($data,$tabel)
	{
		$this->db->insert($tabel,$data);
	}

	// save
	public function saveuser($data,$tabel)
	{
		$this->db->insert($tabel,$data);
	}

	//edit
	public function editbarang($where,$table)
	{
		return $this->db->get_where($table,$where);
	}

	//update user
	public function updatebarang($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
		return TRUE;
	}

	//delete
	public function delete($where,$tabel)
	{
		$this->db->where($where);
		$this->db->delete($tabel);
	}


}

/* End of file M_user.php */
/* Location: ./application/modules/user/models/M_user.php */