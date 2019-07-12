<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class brand extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		date_default_timezone_set('Asia/Jakarta');
		
		 if ($this->session->userdata('level') == '' ) {
			# code...
			redirect(base_url('auth/login'));
		}


		$this->load->model('M_brand');

	}

	public function index()
	{
		$data['allbrand'] 	= $this->M_brand->allbrand()->result();
		$data['kodeotomatis'] = $this->M_brand->kodeotomatis();

		$this->load->view('template/main-header');
		$this->load->view('template/header-admin');
		$this->load->view('template/main-sidebar');
		$this->load->view('brand/main-content',$data);
		$this->load->view('template/footer-admin');
	}


// save data
	public function addbrand()
	{
		$this->form_validation->set_rules('id_brand', 'id_brand', 'trim|required|xss_clean');
		$this->form_validation->set_rules('brand', 'brand', 'trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->session->set_flashdata('Msg', 'Something Wrong !');

			redirect(base_url('barang'));

		} else {
			# code...
			$id_brand = $this->input->post('id_brand');
			$brand = $this->input->post('brand');

			$data = array(
				'id_brand' => $id_brand , 
				'brand' => $brand 
			);

			$this->M_brand->save($data,'tb_brand');

			redirect(base_url('brand'));


		}
	}


	//  edit
	public function edit($id)
	{
		$where = array('id_brand' => $id);

		$data['brand'] = $this->M_brand->editbarang($where,'tb_brand')->result();

		$this->load->view('template/main-header');
		$this->load->view('template/header-admin');
		$this->load->view('template/main-sidebar');
		$this->load->view('brand/edit',$data);
		$this->load->view('template/footer-admin');

	}

	//update
	public function update()
	{
		$this->form_validation->set_rules('id_brand', 'id_brand', 'trim|required|xss_clean');
		$this->form_validation->set_rules('brand', 'brand', 'trim|required|xss_clean');

		
		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->session->set_flashdata('Msg', 'Update Failed , Please Cek Again !');

			redirect(base_url('user'));
			
		} else {
			# code...
			$id_brand = $this->input->post('id_brand');
			$brand = $this->input->post('brand');

			$data = array(
				'id_brand' => $id_brand , 
				'brand' => $brand 
			);

			$where = array(
				'id_brand' => $id_brand 
			);

			$this->M_brand->updatebarang($where,$data,'tb_brand');

			$this->session->set_flashdata('Msg', 'Update Succes !');

			redirect(base_url('brand'));


		}
		
	}

	//delete
	public function delete($id)
	{
		$where = array('id_brand' => $id );

		$data = $this->M_brand->delete($where,'tb_brand');

		$this->session->set_flashdata('Msg', 'Delete Succes !');

		redirect(base_url('brand'));

	}

}

/* End of file User.php */
/* Location: ./application/modules/user/controllers/User.php */