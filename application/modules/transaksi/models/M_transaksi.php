<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_transaksi extends CI_Model {

	// view
	public function allbarang()
	{
		$query = $this->db->query("select * from tb_baja");

		return $query;
	}

	public function alltransaksi()
	{
		$query = $this->db->query("select tb_transaksi.id_transaksi,tb_transaksi.invoice,tb_transaksi.tgl,tb_customer.nama,tb_brand.brand,tb_type.type,
			tb_transaksi.no_pol,tb_teknisi.teknisi,tb_transaksi.keluhan from tb_transaksi join tb_customer 
			on tb_transaksi.id_customer=tb_customer.id_customer join tb_brand on tb_transaksi.id_brand=tb_brand.id_brand JOIN tb_type on tb_transaksi.id_type=tb_type.id_type join tb_teknisi on tb_transaksi.id_teknisi=tb_teknisi.id_teknisi");

		return $query;
	}


	

	//kode ototmatis
	public function kodeotomatis()
	{
		$this->db->select('RIGHT(tb_transaksi.invoice,4) as kode', FALSE);
		$this->db->order_by('invoice','DESC');    
		$this->db->limit(1);    
		  $query = $this->db->get('tb_transaksi');      //cek dulu apakah ada sudah ada kode di tabel.    
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
		  $kode = 'INV-';
		  $tgl = date('Ym-');
		  $kodejadi = $kode.$tgl.$kodemax;    // hasilnya ODJ-9921-0001 dst.
		  return $kodejadi;  
		}




	}

	/* End of file M_user.php */
/* Location: ./application/modules/user/models/M_user.php */