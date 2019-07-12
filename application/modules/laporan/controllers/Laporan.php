<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		date_default_timezone_set('Asia/Jakarta');

		if ($this->session->userdata('level') == '') {
			# code...
			redirect(base_url('auth/login'));
		}


		function format_rupiah($angka){
         $rupiah=number_format($angka,2,'.',',');
            return $rupiah;
            }

		$this->load->model('M_laporan');

	}

	public function index()
	{
		$data['allinvoice'] 	= $this->M_laporan->allinvoice()->result();
		

		$this->load->view('template/main-header');
		$this->load->view('template/header-admin');
		$this->load->view('template/main-sidebar');
		$this->load->view('laporan/main-content',$data);
		$this->load->view('template/footer-admin');
	}

	public function report()
	{

		ob_start(); 

		$tglfrom = $this->input->post('tglfrom');
		$tglto = $this->input->post('tglto');

		$data['transaksi']=$this->M_laporan->reportinvoice($tglto,$tglfrom)->result();


		$tes = $this->load->view('laporan/laporaninvoice',$data);
		$html = ob_get_contents();
		ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','A4','en', false, 'ISO-8859-15',array(10, 0, 0, 0));
		$pdf->WriteHTML($html);
		$pdf->Output();


	}

	public function nota()
	{

		ob_start(); 

		$invoice = $this->input->post('invoice');

		$data['edittrans'] = $this->M_laporan->edittrans($invoice)->result();
		$data['edittrans1'] = $this->M_laporan->edittrans1($invoice)->result();

		
		$tes = $this->load->view('laporan/nota',$data);

		$html = ob_get_contents();
		ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','A4','en', false, 'ISO-8859-15',array(10, 0, 0, 0));
		$pdf->WriteHTML($html);
		$pdf->Output();


	}





}

/* End of file User.php */
/* Location: ./application/modules/user/controllers/User.php */