<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		date_default_timezone_set('Asia/Jakarta');

		 if ($this->session->userdata('level') == '' ) {
			# code...
			redirect(base_url('auth/login'));
		}




		$this->load->model('M_supplier');

	}

	public function index()
	{
		$data['allsupplier'] 	= $this->M_supplier->allsupplier()->result();
		$data['kodeotomatis'] = $this->M_supplier->kodeotomatis();

		$this->load->view('template/main-header');
		$this->load->view('template/header-admin');
		$this->load->view('template/main-sidebar');
		$this->load->view('supplier/main-content',$data);
		$this->load->view('template/footer-admin');
	}


// save data
	public function addsupplier()
	{
		$this->form_validation->set_rules('id_supplier', 'id_supplier', 'trim|required|xss_clean');
		$this->form_validation->set_rules('supplier', 'supplier', 'trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->session->set_flashdata('Msg', 'Something Wrong !');

			redirect(base_url('barang'));

		} else {
			# code...
			$id_supplier = $this->input->post('id_supplier');
			$supplier = $this->input->post('supplier');

			$data = array(
				'id_supplier' => $id_supplier , 
				'supplier' => $supplier 
			);

			$this->M_supplier->save($data,'tb_supplier');

			redirect(base_url('supplier'));


		}
	}


	//  edit
	public function edit($id)
	{
		$where = array('id_supplier' => $id);

		$data['supplier'] = $this->M_supplier->editbarang($where,'tb_supplier')->result();

		$this->load->view('template/main-header');
		$this->load->view('template/header-admin');
		$this->load->view('template/main-sidebar');
		$this->load->view('supplier/edit',$data);
		$this->load->view('template/footer-admin');

	}

	//update
	public function update()
	{
		$this->form_validation->set_rules('id_supplier', 'id_supplier', 'trim|required|xss_clean');
		$this->form_validation->set_rules('supplier', 'supplier', 'trim|required|xss_clean');

		
		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->session->set_flashdata('Msg', 'Update Failed , Please Cek Again !');

			redirect(base_url('user'));
			
		} else {
			# code...
			$id_supplier = $this->input->post('id_supplier');
			$supplier = $this->input->post('supplier');

			$data = array(
				'id_supplier' => $id_supplier , 
				'supplier' => $supplier 
			);

			$where = array(
				'id_supplier' => $id_supplier 
			);

			$this->M_supplier->updatebarang($where,$data,'tb_supplier');

			$this->session->set_flashdata('Msg', 'Update Succes !');

			redirect(base_url('supplier'));


		}
		
	}

	//delete
	public function delete($id)
	{
		$where = array('id_supplier' => $id );

		$data = $this->M_supplier->delete($where,'tb_supplier');

		$this->session->set_flashdata('Msg', 'Delete Succes !');

		redirect(base_url('supplier'));

	}

}

/* End of file User.php */
/* Location: ./application/modules/user/controllers/User.php */