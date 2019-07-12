<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan extends CI_Model {

	// view
	public function reportinvoice($tglto,$tglfrom)
	{
		$query = $this->db->query("select tb_transaksi.id_transaksi,tb_transaksi.invoice,tb_transaksi.tgl,tb_customer.nama,tb_brand.brand,tb_type.type, tb_transaksi.no_pol,tb_teknisi.teknisi,tb_transaksi.keluhan from tb_transaksi join tb_customer on tb_transaksi.id_customer=tb_customer.id_customer join tb_brand on tb_transaksi.id_brand=tb_brand.id_brand JOIN tb_type on tb_transaksi.id_type=tb_type.id_type join tb_teknisi on tb_transaksi.id_teknisi=tb_teknisi.id_teknisi where tb_transaksi.tgl BETWEEN '$tglfrom' and '$tglto'");
		//$query = $this->db->query("select * from tb_transaksi");

		return $query;
	}

	public function allinvoice()
	{
		$query = $this->db->query("select* from tb_transaksi");
		//$query = $this->db->query("select * from tb_transaksi");

		return $query;
	}

	//edit
		public function edittrans($invoice)
		{
			$query = $this->db->query("select tb_transaksi.id_transaksi,tb_transaksi.invoice,tb_transaksi.tgl,tb_customer.nama,tb_brand.brand,tb_type.type,
			tb_transaksi.no_pol,tb_teknisi.teknisi,tb_transaksi.keluhan from tb_transaksi join tb_customer 
			on tb_transaksi.id_customer=tb_customer.id_customer join tb_brand on tb_transaksi.id_brand=tb_brand.id_brand JOIN tb_type on tb_transaksi.id_type=tb_type.id_type join tb_teknisi on tb_transaksi.id_teknisi=tb_teknisi.id_teknisi where tb_transaksi.invoice='$invoice'");

			return $query;

		}

		public function edittrans1($invoice)
		{
			$query = $this->db->query("SELECT tb_detailtrans.invoice,tb_baja.id_baja,tb_baja.nama,tb_satuan.satuan,tb_kategori.kategori,tb_detailtrans.harga_jual,tb_detailtrans.harga_jual,tb_detailtrans.diskon,tb_detailtrans.qty from tb_detailtrans join tb_baja on tb_detailtrans.id_baja=tb_baja.id_baja join tb_satuan on tb_detailtrans.id_satuan=tb_satuan.id_satuan join tb_kategori on tb_detailtrans.id_kategori=tb_kategori.id_kategori where tb_detailtrans.invoice='$invoice'");

			return $query;

		}



}

/* End of file M_user.php */
/* Location: ./application/modules/user/models/M_user.php */