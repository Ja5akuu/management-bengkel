<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class type extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		date_default_timezone_set('Asia/Jakarta');

		
        if ($this->session->userdata('level') == '' ) {
			# code...
			redirect(base_url('auth/login'));
		}


		$this->load->model('M_type');

	}

	public function index()
	{
		$data['alltype'] 	= $this->M_type->alltype()->result();
		$data['kodeotomatis'] = $this->M_type->kodeotomatis();

		$this->load->view('template/main-header');
		$this->load->view('template/header-admin');
		$this->load->view('template/main-sidebar');
		$this->load->view('type/main-content',$data);
		$this->load->view('template/footer-admin');
	}


// save data
	public function addtype()
	{
		$this->form_validation->set_rules('id_type', 'id_type', 'trim|required|xss_clean');
		$this->form_validation->set_rules('type', 'type', 'trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->session->set_flashdata('Msg', 'Something Wrong !');

			redirect(base_url('barang'));

		} else {
			# code...
			$id_type = $this->input->post('id_type');
			$type = $this->input->post('type');

			$data = array(
				'id_type' => $id_type , 
				'type' => $type 
			);

			$this->M_type->save($data,'tb_type');

			redirect(base_url('type'));


		}
	}


	//  edit
	public function edit($id)
	{
		$where = array('id_type' => $id);

		$data['type'] = $this->M_type->editbarang($where,'tb_type')->result();

		$this->load->view('template/main-header');
		$this->load->view('template/header-admin');
		$this->load->view('template/main-sidebar');
		$this->load->view('type/edit',$data);
		$this->load->view('template/footer-admin');

	}

	//update
	public function update()
	{
		$this->form_validation->set_rules('id_type', 'id_type', 'trim|required|xss_clean');
		$this->form_validation->set_rules('type', 'type', 'trim|required|xss_clean');

		
		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->session->set_flashdata('Msg', 'Update Failed , Please Cek Again !');

			redirect(base_url('user'));
			
		} else {
			# code...
			$id_type = $this->input->post('id_type');
			$type = $this->input->post('type');

			$data = array(
				'id_type' => $id_type , 
				'type' => $type 
			);

			$where = array(
				'id_type' => $id_type 
			);

			$this->M_type->updatebarang($where,$data,'tb_type');

			$this->session->set_flashdata('Msg', 'Update Succes !');

			redirect(base_url('type'));


		}
		
	}

	//delete
	public function delete($id)
	{
		$where = array('id_type' => $id );

		$data = $this->M_type->delete($where,'tb_type');

		$this->session->set_flashdata('Msg', 'Delete Succes !');

		redirect(base_url('type'));

	}

}

/* End of file User.php */
/* Location: ./application/modules/user/controllers/User.php */