<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_biodata extends CI_Model {

	// view
	// public function allbarang()
	// {
	// 	$query = $this->db->query("select * from tb_baja");

	// 	return $query;
	// }

	// public function alltransaksi()
	// {
	// 	$query = $this->db->query("select tb_transaksi.id_transaksi,tb_transaksi.invoice,tb_transaksi.tgl,tb_customer.nama,tb_brand.brand,tb_type.type,
	// 		tb_transaksi.no_pol,tb_teknisi.teknisi,tb_transaksi.keluhan from tb_transaksi join tb_customer 
	// 		on tb_transaksi.id_customer=tb_customer.id_customer join tb_brand on tb_transaksi.id_brand=tb_brand.id_brand JOIN tb_type on tb_transaksi.id_type=tb_type.id_type join tb_teknisi on tb_transaksi.id_teknisi=tb_teknisi.id_teknisi");

	// 	return $query;
	// }

	// public function allcustomer()
	// {
	// 	$query = $this->db->query("select * from tb_customer");

	// 	return $query;
	// }

	// public function allbrand()
	// {
	// 	$query = $this->db->query("select * from tb_brand");

	// 	return $query;
	// }

	// public function alltype()
	// {
	// 	$query = $this->db->query("select * from tb_type");

	// 	return $query;
	// }

	// public function allteknisi()
	// {
	// 	$query = $this->db->query("select * from tb_teknisi");

	// 	return $query;
	// }

	// public function alltemp()
	// {
	// 	$query = $this->db->query("select tb_temptrans.id_temp,tb_temptrans.invoice,tb_baja.id_baja,tb_baja.nama,tb_satuan.satuan,tb_kategori.kategori,tb_temptrans.harga_jual,tb_temptrans.diskon,tb_temptrans.qty from tb_temptrans join tb_baja on tb_temptrans.id_baja = tb_baja.id_baja join tb_satuan on tb_satuan.id_satuan = tb_temptrans.id_satuan join tb_kategori on tb_temptrans.id_kategori = tb_kategori.id_kategori");

	// 	return $query;
	// }

	// //kode ototmatis
	// public function kodeotomatis()
	// {
	// 	$this->db->select('RIGHT(tb_transaksi.invoice,4) as kode', FALSE);
	// 	$this->db->order_by('invoice','DESC');    
	// 	$this->db->limit(1);    
	// 	  $query = $this->db->get('tb_transaksi');      //cek dulu apakah ada sudah ada kode di tabel.    
	// 	  if($query->num_rows() <> 0){      
	// 	   //jika kode ternyata sudah ada.      
	// 	  	$data = $query->row();      
	// 	  	$kode = intval($data->kode) + 1;    
	// 	  }
	// 	  else {      
	// 	   //jika kode belum ada      
	// 	  	$kode = 1;    
	// 	  }
	// 	  $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
	// 	  $kode = 'RGS-';
	// 	  $tgl = date('Ymd-');
	// 	  $kodejadi = $kode.$tgl.$kodemax;    // hasilnya ODJ-9921-0001 dst.
	// 	  return $kodejadi;  
	// 	}

	// // save
	// 	public function save($data,$tabel)
	// 	{
	// 		$this->db->insert($tabel,$data);
	// 	}

	// 	public function savetrans($invoice)
	// 	{
	// 		$query = $this->db->query("insert into tb_detailtrans (id_temp,invoice,id_baja,id_satuan,id_kategori,harga_jual,diskon,qty,sisa)  select tb_temptrans.id_temp,
	// 			tb_temptrans.invoice,tb_temptrans.id_baja,tb_temptrans.id_satuan,tb_temptrans.id_kategori,tb_temptrans.harga_jual,tb_temptrans.diskon,tb_temptrans.qty, tb_temptrans.sisa from tb_temptrans where tb_temptrans.invoice = '$invoice'");

	// 	//insert into a (field1,field2) select b.field1,b.field2 where b.id= post
	// 	}

	// 	public function savetemp($data,$tabel)
	// 	{
	// 		$this->db->insert($tabel,$data);
	// 	}

	// //edit
	// 	public function edittrans($where)
	// 	{
	// 		$query = $this->db->query("select tb_transaksi.id_transaksi,tb_transaksi.invoice,tb_transaksi.tgl,tb_customer.nama,tb_brand.brand,tb_type.type,
	// 		tb_transaksi.no_pol,tb_teknisi.teknisi,tb_transaksi.keluhan from tb_transaksi join tb_customer 
	// 		on tb_transaksi.id_customer=tb_customer.id_customer join tb_brand on tb_transaksi.id_brand=tb_brand.id_brand JOIN tb_type on tb_transaksi.id_type=tb_type.id_type join tb_teknisi on tb_transaksi.id_teknisi=tb_teknisi.id_teknisi where tb_transaksi.invoice='$where'");

	// 		return $query;

	// 	}

	// 	public function edittrans1($where)
	// 	{
	// 		$query = $this->db->query("SELECT tb_detailtrans.invoice,tb_baja.id_baja,tb_baja.nama,tb_satuan.satuan,tb_kategori.kategori,tb_detailtrans.harga_jual,tb_detailtrans.harga_jual,tb_detailtrans.diskon,tb_detailtrans.qty from tb_detailtrans join tb_baja on tb_detailtrans.id_baja=tb_baja.id_baja join tb_satuan on tb_detailtrans.id_satuan=tb_satuan.id_satuan join tb_kategori on tb_detailtrans.id_kategori=tb_kategori.id_kategori where tb_detailtrans.invoice='$where'");

	// 		return $query;

	// 	}

	// //update user
	// 	public function updatebarang($where,$data,$table)
	// 	{
	// 		$this->db->where($where);
	// 		$this->db->update($table,$data);
	// 		return TRUE;
	// 	}

	// //delete
	// 	public function delete($where,$tabel)
	// 	{
	// 		$this->db->where($where);
	// 		$this->db->delete($tabel);
	// 	}

	// //delete
	// 	public function deletetemp1($invoice,$tabel)
	// 	{
	// 		$this->db->where($invoice);
	// 		$this->db->delete($tabel);
	// 	}

	// //delete
	// 	public function hapus($where,$tabel)
	// 	{
	// 		$this->db->where($where);
	// 		$this->db->delete($tabel);
	// 	}

	// 	public function tes($id_baja)
	// 	{


	// 		$query = $this->db->query("select * from tb_baja where id_baja='$id_baja'");

	// 		return $query	;
	// 	}

	// 	public function kustomer($id_customer)
	// 	{


	// 		$query = $this->db->query("select * from tb_customer where id_customer='$id_customer'");

	// 		return $query	;
	// 	}

	// 	public function updatestock($invoice)
	// 	{
	// 		$query = $this->db->query("update tb_detailtrans as a, tb_baja as b set b.qty=a.sisa where a.id_baja = b.id_baja and a.invoice = '$invoice'");
	// 	}


	}

	/* End of file M_user.php */
/* Location: ./application/modules/user/models/M_user.php */