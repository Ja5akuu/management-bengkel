<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {

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

		$this->load->model('M_biodata');

	}

	public function index()
	{

			// $data['allbarang'] 	= $this->M_biodata->allbarang()->result();
			// $data['allbiodata'] 	= $this->M_biodata->allbiodata()->result();
			// $data['kodeotomatis'] = $this->M_biodata->kodeotomatis();

		$this->load->view('template/main-header');
		$this->load->view('template/header-admin');
		$this->load->view('template/main-sidebar');
		$this->load->view('biodata/main-content');
		$this->load->view('template/footer-admin');
		
	}


	public function addbiodata()
	{
		$this->load->view('template/main-header');
		$this->load->view('template/header-admin');
		$this->load->view('template/main-sidebar');
		$this->load->view('biodata/addbiodata');
		$this->load->view('template/footer-admin');
	}


// save data
	public function addtranskasi()
	{
		$this->form_validation->set_rules('invoice', 'invoice', 'required|xss_clean');
		$this->form_validation->set_rules('tgl', 'tgl', 'trim|required|xss_clean');
		$this->form_validation->set_rules('id_customer', 'id_customer', 'trim|required|xss_clean');
		//$this->form_validation->set_rules('hp', 'hp', 'trim|required|xss_clean');
		//$this->form_validation->set_rules('alamat', 'alamat', 'trim|required|xss_clean');
		$this->form_validation->set_rules('id_brand', 'id_brand', 'trim|required|xss_clean');
		$this->form_validation->set_rules('id_type', 'id_type', 'trim|required|xss_clean');
		$this->form_validation->set_rules('no_pol', 'no_pol', 'trim|required|xss_clean');
		$this->form_validation->set_rules('id_teknisi', 'id_teknisi', 'trim|required|xss_clean');
		$this->form_validation->set_rules('keluhan', 'keluhan', 'trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->session->set_flashdata('Msg', 'Something Wrong !');

			redirect(base_url('biodata'));

		} else {
			# code...
			$invoice = $this->input->post('invoice');
			$tgl = $this->input->post('tgl');
			$id_customer = $this->input->post('id_customer');
			$id_brand = $this->input->post('id_brand');
			$id_type = $this->input->post('id_type');
			$no_pol = $this->input->post('no_pol');
			$id_teknisi = $this->input->post('id_teknisi');
			$keluhan = $this->input->post('keluhan');

			$data = array(
				'tgl' => $tgl , 
				'invoice' => $invoice , 
				'id_customer' => $id_customer , 
				'id_brand' => $id_brand , 
				'id_type' => $id_type , 
				'no_pol' => $no_pol , 
				'id_teknisi' => $id_teknisi , 
				'keluhan' => $keluhan  
			);

			$where = array('invoice' => $invoice );

			$this->M_biodata->save($data,'tb_biodata');

			$this->M_biodata->savetrans($invoice);

			$this->M_biodata->updatestock($invoice);

			$this->M_biodata->deletetemp1($where ,'tb_temptrans');

			redirect(base_url('biodata'));


		}
	}


	//  edit
	public function edit()
	{
		$where=$this->uri->segment('3');

		$data['edittrans'] = $this->M_biodata->edittrans($where)->result();
		$data['edittrans1'] = $this->M_biodata->edittrans1($where)->result();

		$this->load->view('template/main-header');
		$this->load->view('template/header-admin');
		$this->load->view('template/main-sidebar');
		$this->load->view('biodata/edit',$data);
		$this->load->view('template/footer-admin');

	}

	//update
	public function update()
	{
		$this->form_validation->set_rules('kd_barang', 'kd_barang', 'trim|required|xss_clean');
		$this->form_validation->set_rules('nM_biodata', 'nM_biodata', 'trim|required|xss_clean');
		$this->form_validation->set_rules('harga_beli', 'harga_beli', 'trim|required|xss_clean');
		$this->form_validation->set_rules('harga_jual', 'harga_jual', 'trim|required|xss_clean');
		$this->form_validation->set_rules('diskon', 'diskon', 'trim|required|xss_clean');
		$this->form_validation->set_rules('stock', 'stock', 'trim|required|xss_clean');

		
		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->session->set_flashdata('Msg', 'Update Failed , Please Cek Again !');

			redirect(base_url('user'));
			
		} else {
			# code...
			$kd_barang = $this->input->post('kd_barang');
			$nM_biodata = $this->input->post('nM_biodata');
			$harga_beli = $this->input->post('harga_beli');
			$harga_jual = $this->input->post('harga_jual');
			$diskon = $this->input->post('diskon');
			$stock = $this->input->post('stock');

			$data = array(
				'kd_barang' => $kd_barang , 
				'nM_biodata' => $nM_biodata , 
				'harga_beli' => $harga_beli , 
				'harga_jual' => $harga_jual , 
				'diskon' => $diskon , 
				'stok' => $stock , 
			);

			$where = array(
				'kd_barang' => $kd_barang 
			);

			$this->M_biodata->updatebarang($where,$data,'barang');

			$this->session->set_flashdata('Msg', 'Update Succes !');

			redirect(base_url('barang'));


		}
		
	}

	//delete
	public function delete($id)
	{
		$where = array('kd_barang' => $id );

		$data = $this->M_biodata->delete($where,'barang');

		$this->session->set_flashdata('Msg', 'Delete Succes !');

		redirect(base_url('barang'));

	}


	//js barang
	public function tes1()
	{

		$id_baja=$this->uri->segment('3');
		$data = $this->M_biodata->tes($id_baja)->row_array();

		echo json_encode($data);
	}

	//js customer
	public function tes2()
	{

		$id_customer=$this->uri->segment('3');
		$data = $this->M_biodata->kustomer($id_customer)->row_array();

		echo json_encode($data);
	}

	public function addtemp()
	{
		if (isset($_POST['addtemp'])) {
			# code...
			$this->form_validation->set_rules('invoice', 'invoice', 'trim|required|xss_clean');
			$this->form_validation->set_rules('id_baja', 'id_baja', 'trim|required|xss_clean');
			$this->form_validation->set_rules('satuan', 'satuan', 'trim|required|xss_clean');
			$this->form_validation->set_rules('category', 'category', 'trim|required|xss_clean');
			$this->form_validation->set_rules('harga', 'harga', 'trim|required|xss_clean');
			$this->form_validation->set_rules('diskon', 'diskon', 'trim|required|xss_clean');
			$this->form_validation->set_rules('qty', 'qty', 'trim|required|xss_clean');

			if ($this->form_validation->run() == FALSE) {
			# code...
				$this->session->set_flashdata('Msg', 'Something Wrong !');

				redirect(base_url('biodata'));

			} else {
			# code...
				$invoice = $this->input->post('invoice');
				$id_baja = $this->input->post('id_baja');
				$satuan = $this->input->post('satuan');
				$category = $this->input->post('category');
				$harga = $this->input->post('harga');
				$diskon = $this->input->post('diskon');
				$qty = $this->input->post('qty');
				$stock = $this->input->post('stock');
				$sisa = $stock - $qty ;

				$data = array(
					'invoice' => $invoice , 
					'id_baja' => $id_baja , 
					'id_satuan' => $satuan , 
					'id_kategori' => $category , 
					'harga_jual' => $harga ,
					'diskon' => $diskon ,
					'qty' => $qty ,
					'sisa' => $sisa ,
				);

				$this->M_biodata->savetemp($data,'tb_temptrans');

				redirect(base_url('biodata/addtemp'));


			}
		} else {

			$data['allbarang'] 	= $this->M_biodata->allbarang()->result();
			$data['allbiodata'] 	= $this->M_biodata->allbiodata()->result();
			$data['allcustomer'] 	= $this->M_biodata->allcustomer()->result();
			$data['allbrand'] 	= $this->M_biodata->allbrand()->result();
			$data['alltype'] 	= $this->M_biodata->alltype()->result();
			$data['allteknisi'] 	= $this->M_biodata->allteknisi()->result();
			$data['alltemp'] 	= $this->M_biodata->alltemp()->result();
			$data['kodeotomatis'] = $this->M_biodata->kodeotomatis();

			$this->load->view('template/main-header');
			$this->load->view('template/header-admin');
			$this->load->view('template/main-sidebar');
			$this->load->view('biodata/addtrans',$data);
			$this->load->view('template/footer-admin');
		}
	}

	public function deletetemp($id)
	{
		$where = array('id_temp' => $id );

		$data = $this->M_biodata->hapus($where,'tb_temptrans');

		$this->session->set_flashdata('Msg', 'Delete Succes !');

		redirect(base_url('biodata/addtemp'));

	}


}

/* End of file User.php */
/* Location: ./application/modules/user/controllers/User.php */