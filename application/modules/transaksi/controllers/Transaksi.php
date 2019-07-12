<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		date_default_timezone_set('Asia/Jakarta');

		if ($this->session->userdata('level') == '' ) {
			# code...
			redirect(base_url('auth/login'));
		}


		function format_rupiah($angka){
         $rupiah=number_format($angka,2,'.',',');
            return $rupiah;
            }

	$this->load->model('M_transaksi');

	}

	public function index()
	{

			$data['allbarang'] 	= $this->M_transaksi->allbarang()->result();
			$data['alltransaksi'] 	= $this->M_transaksi->alltransaksi()->result();
			$data['kodeotomatis'] = $this->M_transaksi->kodeotomatis();

			$this->load->view('template/main-header');
			$this->load->view('template/header-admin');
			$this->load->view('template/main-sidebar');
			$this->load->view('transaksi/main-content',$data);
			$this->load->view('template/footer-admin');
		
	}

}

/* End of file User.php */
/* Location: ./application/modules/user/controllers/User.php */