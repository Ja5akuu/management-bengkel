<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_beranda extends CI_Model {

	
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
	
}

/* End of file M_beranda.php */
/* Location: ./application/modules/beranda/models/M_beranda.php */