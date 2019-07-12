<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teknisi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		date_default_timezone_set('Asia/Jakarta');

		 if ($this->session->userdata('level') == '' ) {
			# code...
			redirect(base_url('auth/login'));
		}



		$this->load->model('M_teknisi');

	}

	public function index()
	{
		$data['allteknisi'] 	= $this->M_teknisi->allteknisi()->result();
		$data['kodeotomatis'] = $this->M_teknisi->kodeotomatis();

		$this->load->view('template/main-header');
		$this->load->view('template/header-admin');
		$this->load->view('template/main-sidebar');
		$this->load->view('teknisi/main-content',$data);
		$this->load->view('template/footer-admin');
	}


// save data
	public function addteknisi()
	{
		$this->form_validation->set_rules('id_teknisi', 'id_teknisi', 'trim|required|xss_clean');
		$this->form_validation->set_rules('teknisi', 'teknisi', 'required');

		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->session->set_flashdata('Msg', 'Something Wrong !');

			redirect(base_url('barang'));

		} else {
			# code...
			$id_teknisi = $this->input->post('id_teknisi');
			$teknisi = $this->input->post('teknisi');

			$data = array(
				'id_teknisi' => $id_teknisi , 
				'teknisi' => $teknisi 
			);

			$this->M_teknisi->save($data,'tb_teknisi');

			redirect(base_url('teknisi'));


		}
	}


	//  edit
	public function edit($id)
	{
		$where = array('id_teknisi' => $id);

		$data['teknisi'] = $this->M_teknisi->editbarang($where,'tb_teknisi')->result();

		$this->load->view('template/main-header');
		$this->load->view('template/header-admin');
		$this->load->view('template/main-sidebar');
		$this->load->view('teknisi/edit',$data);
		$this->load->view('template/footer-admin');

	}

	//update
	public function update()
	{
		$this->form_validation->set_rules('id_teknisi', 'id_teknisi', 'trim|required|xss_clean');
		$this->form_validation->set_rules('teknisi', 'teknisi', 'trim|required|xss_clean');

		
		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->session->set_flashdata('Msg', 'Update Failed , Please Cek Again !');

			redirect(base_url('user'));
			
		} else {
			# code...
			$id_teknisi = $this->input->post('id_teknisi');
			$teknisi = $this->input->post('teknisi');

			$data = array(
				'id_teknisi' => $id_teknisi , 
				'teknisi' => $teknisi 
			);

			$where = array(
				'id_teknisi' => $id_teknisi 
			);

			$this->M_teknisi->updatebarang($where,$data,'tb_teknisi');

			$this->session->set_flashdata('Msg', 'Update Succes !');

			redirect(base_url('teknisi'));


		}
		
	}

	//delete
	public function delete($id)
	{
		$where = array('id_teknisi' => $id );

		$data = $this->M_teknisi->delete($where,'tb_teknisi');

		$this->session->set_flashdata('Msg', 'Delete Succes !');

		redirect(base_url('teknisi'));

	}

}

/* End of file User.php */
/* Location: ./application/modules/user/controllers/User.php */