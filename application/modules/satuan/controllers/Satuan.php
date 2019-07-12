<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		date_default_timezone_set('Asia/Jakarta');

		 if ($this->session->userdata('level') == '' ) {
			# code...
			redirect(base_url('auth/login'));
		}



		$this->load->model('M_satuan');

	}

	public function index()
	{
		$data['allsatuan'] 	= $this->M_satuan->allsatuan()->result();
		$data['kodeotomatis'] = $this->M_satuan->kodeotomatis();

		$this->load->view('template/main-header');
		$this->load->view('template/header-admin');
		$this->load->view('template/main-sidebar');
		$this->load->view('satuan/main-content',$data);
		$this->load->view('template/footer-admin');
	}


// save data
	public function addsatuan()
	{
		$this->form_validation->set_rules('id_satuan', 'id_satuan', 'trim|required|xss_clean');
		$this->form_validation->set_rules('satuan', 'satuan', 'trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->session->set_flashdata('Msg', 'Something Wrong !');

			redirect(base_url('barang'));

		} else {
			# code...
			$id_satuan = $this->input->post('id_satuan');
			$satuan = $this->input->post('satuan');

			$data = array(
				'id_satuan' => $id_satuan , 
				'satuan' => $satuan 
			);

			$this->M_satuan->save($data,'tb_satuan');

			redirect(base_url('satuan'));


		}
	}


	//  edit
	public function edit($id)
	{
		$where = array('id_satuan' => $id);

		$data['satuan'] = $this->M_satuan->editbarang($where,'tb_satuan')->result();

		$this->load->view('template/main-header');
		$this->load->view('template/header-admin');
		$this->load->view('template/main-sidebar');
		$this->load->view('satuan/edit',$data);
		$this->load->view('template/footer-admin');

	}

	//update
	public function update()
	{
		$this->form_validation->set_rules('id_satuan', 'id_satuan', 'trim|required|xss_clean');
		$this->form_validation->set_rules('satuan', 'satuan', 'trim|required|xss_clean');

		
		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->session->set_flashdata('Msg', 'Update Failed , Please Cek Again !');

			redirect(base_url('user'));
			
		} else {
			# code...
			$id_satuan = $this->input->post('id_satuan');
			$satuan = $this->input->post('satuan');

			$data = array(
				'id_satuan' => $id_satuan , 
				'satuan' => $satuan 
			);

			$where = array(
				'id_satuan' => $id_satuan 
			);

			$this->M_satuan->updatebarang($where,$data,'tb_satuan');

			$this->session->set_flashdata('Msg', 'Update Succes !');

			redirect(base_url('satuan'));


		}
		
	}

	//delete
	public function delete($id)
	{
		$where = array('id_satuan' => $id );

		$data = $this->M_satuan->delete($where,'tb_satuan');

		$this->session->set_flashdata('Msg', 'Delete Succes !');

		redirect(base_url('satuan'));

	}

}

/* End of file User.php */
/* Location: ./application/modules/user/controllers/User.php */