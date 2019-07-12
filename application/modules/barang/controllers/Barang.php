<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		date_default_timezone_set('Asia/Jakarta');
		if ($this->session->userdata('level') == '' ) {
			# code...
			redirect(base_url('auth/login'));
		}


		$this->load->model('M_barang');

	}

	public function index()
	{
		$data['allbarang'] 	= $this->M_barang->allbarang()->result();
		$data['allkategori'] 	= $this->M_barang->allkategori()->result();
		$data['allsatuan'] 	= $this->M_barang->allsatuan()->result();
		$data['allsupplier'] 	= $this->M_barang->allsupplier()->result();
		$data['kodeotomatis'] = $this->M_barang->kodeotomatis();

		$this->load->view('template/main-header');
		$this->load->view('template/header-admin');
		$this->load->view('template/main-sidebar');
		$this->load->view('barang/main-content',$data);
		$this->load->view('template/footer-admin');
	}


// save data
	public function addbarang()
	{
		$this->form_validation->set_rules('id_baja', 'id_baja', 'trim|required|xss_clean');
		$this->form_validation->set_rules('supplier', 'supplier', 'trim|required|xss_clean');
		$this->form_validation->set_rules('nama', 'nama', 'trim|required|xss_clean');
		$this->form_validation->set_rules('satuan', 'satuan', 'trim|required|xss_clean');
		$this->form_validation->set_rules('id_kategori', 'id_kategori', 'trim|required|xss_clean');
		$this->form_validation->set_rules('harga_beli', 'harga_beli', 'trim|required|xss_clean');
		$this->form_validation->set_rules('harga_jual', 'harga_jual', 'trim|required|xss_clean');
		$this->form_validation->set_rules('diskon', 'diskon', 'trim|required|xss_clean');
		$this->form_validation->set_rules('qty', 'qty', 'trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->session->set_flashdata('Msg', 'Something Wrong !');

			redirect(base_url('barang'));

		} else {
			# code...
			$id_baja = $this->input->post('id_baja');
			$supplier = $this->input->post('supplier');
			$nama = $this->input->post('nama');
			$satuan = $this->input->post('satuan');
			$id_kategori = $this->input->post('id_kategori');
			$nm_barang = $this->input->post('nm_barang');
			$harga_beli = $this->input->post('harga_beli');
			$harga_jual = $this->input->post('harga_jual');
			$diskon = $this->input->post('diskon');
			$qty = $this->input->post('qty');

			$data = array(
				'id_baja' => $id_baja , 
				'nama' => $nama , 
				'harga_beli' => $harga_beli , 
				'harga_jual' => $harga_jual , 
				'diskon' => $diskon , 
				'qty' => $qty , 
				'id_satuan' => $satuan , 
				'id_kategori' => $id_kategori , 
				'id_supplier' => $supplier , 
			);

			$this->M_barang->save($data,'tb_baja');

			redirect(base_url('barang'));


		}
	}


	//  edit
	public function edit($id)
	{
		$where = array('id_baja' => $id);

		$data['allkategori'] 	= $this->M_barang->allkategori()->result();
		$data['allsatuan'] 	= $this->M_barang->allsatuan()->result();
		$data['allsupplier'] 	= $this->M_barang->allsupplier()->result();

		$data['barang'] = $this->M_barang->editbarang($where,'tb_baja')->result();
		

		$this->load->view('template/main-header');
		$this->load->view('template/header-admin');
		$this->load->view('template/main-sidebar');
		$this->load->view('barang/edit',$data);
		$this->load->view('template/footer-admin');

	}

	//update
	public function update()
	{
		$this->form_validation->set_rules('id_baja', 'id_baja', 'trim|required|xss_clean');
		$this->form_validation->set_rules('supplier', 'supplier', 'trim|required|xss_clean');
		$this->form_validation->set_rules('nama', 'nama', 'trim|required|xss_clean');
		$this->form_validation->set_rules('satuan', 'satuan', 'trim|required|xss_clean');
		$this->form_validation->set_rules('id_kategori', 'id_kategori', 'trim|required|xss_clean');
		$this->form_validation->set_rules('harga_beli', 'harga_beli', 'trim|required|xss_clean');
		$this->form_validation->set_rules('harga_jual', 'harga_jual', 'trim|required|xss_clean');
		$this->form_validation->set_rules('diskon', 'diskon', 'trim|required|xss_clean');
		$this->form_validation->set_rules('qty', 'qty', 'trim|required|xss_clean');
		
		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->session->set_flashdata('Msg', 'Update Failed , Please Cek Again !');

			redirect(base_url('barang'));
			
		} else {

			$id_baja = $this->input->post('id_baja');
			$supplier = $this->input->post('supplier');
			$nama = $this->input->post('nama');
			$satuan = $this->input->post('satuan');
			$id_kategori = $this->input->post('id_kategori');
			$nm_barang = $this->input->post('nm_barang');
			$harga_beli = $this->input->post('harga_beli');
			$harga_jual = $this->input->post('harga_jual');
			$diskon = $this->input->post('diskon');
			$qty = $this->input->post('qty');

			$data = array(
				'id_baja' => $id_baja , 
				'nama' => $nama , 
				'harga_beli' => $harga_beli , 
				'harga_jual' => $harga_jual , 
				'diskon' => $diskon , 
				'qty' => $qty , 
				'id_satuan' => $satuan , 
				'id_kategori' => $id_kategori , 
				'id_supplier' => $supplier , 
			);

			$where = array(
				'id_baja' => $id_baja 
			);

			$this->M_barang->updatebarang($where,$data,'tb_baja');

			$this->session->set_flashdata('Msg', 'Update Succes !');

			redirect(base_url('barang'));


		}
		
	}

	//delete
	public function delete($id)
	{
		$where = array('id_baja' => $id );

		$data = $this->M_barang->delete($where,'tb_baja');

		$this->session->set_flashdata('Msg', 'Delete Succes !');

		redirect(base_url('barang'));

	}

}

/* End of file User.php */
/* Location: ./application/modules/user/controllers/User.php */