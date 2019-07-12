<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();		

		if ($this->session->userdata('level') == '' ) {
			# code...
			redirect(base_url('auth/login'));
		}

		$this->load->model('M_beranda');
		

	}

	public function index()
	{


		$data['allbarang'] 	= $this->M_beranda->allbarang()->result();
		$data['alltransaksi'] 	= $this->M_beranda->alltransaksi()->result();
		

		$this->load->view('template/main-header');
		$this->load->view('template/header-admin');
		$this->load->view('template/main-sidebar');
		$this->load->view('beranda/main-content',$data);
		$this->load->view('template/footer-admin');
	}

	public function eror()
	{
		$this->load->view('template/404');
	}
	
	
}
?>