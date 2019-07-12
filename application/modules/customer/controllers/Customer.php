<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		date_default_timezone_set('Asia/Jakarta');

		 if ($this->session->userdata('level') == '' ) {
			# code...
			redirect(base_url('auth/login'));
		}


		$this->load->model('M_customer');

	}

	public function index()
	{
		$data['allcustomer'] 	= $this->M_customer->allcustomer()->result();
		$data['kodeotomatis'] = $this->M_customer->kodeotomatis();

		$this->load->view('template/main-header');
		$this->load->view('template/header-admin');
		$this->load->view('template/main-sidebar');
		$this->load->view('customer/main-content',$data);
		$this->load->view('template/footer-admin');
	}


// save data
	public function addcustomer()
	{
		$this->form_validation->set_rules('id_customer', 'id_customer', 'trim|required|xss_clean');
		$this->form_validation->set_rules('nama', 'nama', 'trim|required|xss_clean');
		$this->form_validation->set_rules('hp', 'hp', 'trim|required|xss_clean');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->session->set_flashdata('Msg', 'Something Wrong !');

			redirect(base_url('barang'));

		} else {
			# code...
			$id_customer = $this->input->post('id_customer');
			$nama = $this->input->post('nama');
			$hp = $this->input->post('hp');
			$alamat = $this->input->post('alamat');

			$data = array(
				'id_customer' => $id_customer , 
				'nama' => $nama ,
				'hp' => $hp ,
				'alamat' => $alamat 
			);

			$this->M_customer->save($data,'tb_customer');

			redirect(base_url('customer'));


		}
	}


	//  edit
	public function edit($id)
	{
		$where = array('id_customer' => $id);

		$data['customer'] = $this->M_customer->editbarang($where,'tb_customer')->result();

		$this->load->view('template/main-header');
		$this->load->view('template/header-admin');
		$this->load->view('template/main-sidebar');
		$this->load->view('customer/edit',$data);
		$this->load->view('template/footer-admin');

	}

	//update
	public function update()
	{
		$this->form_validation->set_rules('id_customer', 'id_customer', 'trim|required|xss_clean');
		$this->form_validation->set_rules('nama', 'nama', 'trim|required|xss_clean');
		$this->form_validation->set_rules('hp', 'hp', 'trim|required|xss_clean');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required|xss_clean');

		
		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->session->set_flashdata('Msg', 'Update Failed , Please Cek Again !');

			redirect(base_url('user'));
			
		} else {
			# code...
			$id_customer = $this->input->post('id_customer');
			$nama = $this->input->post('nama');
			$hp = $this->input->post('hp');
			$alamat = $this->input->post('alamat');

			$data = array(
				'id_customer' => $id_customer , 
				'nama' => $nama ,
				'hp' => $hp ,
				'alamat' => $alamat 
			);

			$where = array(
				'id_customer' => $id_customer 
			);

			$this->M_customer->updatebarang($where,$data,'tb_customer');

			$this->session->set_flashdata('Msg', 'Update Succes !');

			redirect(base_url('customer'));


		}
		
	}

	//delete
	public function delete($id)
	{
		$where = array('id_customer' => $id );

		$data = $this->M_customer->delete($where,'tb_customer');

		$this->session->set_flashdata('Msg', 'Delete Succes !');

		redirect(base_url('customer'));

	}

}

/* End of file User.php */
/* Location: ./application/modules/user/controllers/User.php */