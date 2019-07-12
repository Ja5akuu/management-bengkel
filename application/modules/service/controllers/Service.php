<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		date_default_timezone_set('Asia/Jakarta');

		$this->load->model('M_service');

	}

	public function index()
	{
		$data['allservice'] 	= $this->M_service->allservice()->result();
		$data['kodeotomatis'] = $this->M_service->kodeotomatis();

		$this->load->view('template/main-header');
		$this->load->view('template/header-admin');
		$this->load->view('template/main-sidebar');
		$this->load->view('service/main-content',$data);
		$this->load->view('template/footer-admin');
	}


// save data
	public function addservice()
	{
		$this->form_validation->set_rules('kd_jasa', 'kd_jasa', 'trim|required|xss_clean');
		$this->form_validation->set_rules('nama_jasa', 'nama_jasa', 'trim|required|xss_clean');
		$this->form_validation->set_rules('harga', 'harga', 'trim|required|xss_clean');
		$this->form_validation->set_rules('diskon', 'diskon', 'trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->session->set_flashdata('Msg', 'Something Wrong !');

			redirect(base_url('service'));

		} else {
			# code...
			$kd_jasa = $this->input->post('kd_jasa');
			$nama_jasa = $this->input->post('nama_jasa');
			$harga = $this->input->post('harga');
			$diskon = $this->input->post('diskon');

			$data = array(
				'kd_jasa' => $kd_jasa , 
				'nama_jasa' => $nama_jasa , 
				'harga' => $harga , 
				'diskon' => $diskon 
			);

			$this->M_service->save($data,'jasaservice');

			redirect(base_url('service'));


		}
	}


	//  edit
	public function edit($id)
	{
		$where = array('kd_jasa' => $id);

		$data['service'] = $this->M_service->editservice($where,'jasaservice')->result();

		$this->load->view('template/main-header');
		$this->load->view('template/header-admin');
		$this->load->view('template/main-sidebar');
		$this->load->view('service/edit',$data);
		$this->load->view('template/footer-admin');

	}

	//update
	public function update()
	{
		$this->form_validation->set_rules('kd_jasa', 'kd_jasa', 'trim|required|xss_clean');
		$this->form_validation->set_rules('nama_jasa', 'nama_jasa', 'trim|required|xss_clean');
		$this->form_validation->set_rules('harga', 'harga', 'trim|required|xss_clean');
		$this->form_validation->set_rules('diskon', 'diskon', 'trim|required|xss_clean');

		
		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->session->set_flashdata('Msg', 'Update Failed , Please Cek Again !');

			redirect(base_url('service'));
			
		} else {
			# code...
			$kd_jasa = $this->input->post('kd_jasa');
			$nama_jasa = $this->input->post('nama_jasa');
			$harga = $this->input->post('harga');
			$diskon = $this->input->post('diskon');

			$data = array(
				'kd_jasa' => $kd_jasa , 
				'nama_jasa' => $nama_jasa , 
				'harga' => $harga , 
				'diskon' => $diskon 
			);

			$where = array(
				'kd_jasa' => $kd_jasa 
			);

			$this->M_service->updateservice($where,$data,'jasaservice');

			$this->session->set_flashdata('Msg', 'Update Succes !');

			redirect(base_url('service'));


		}
		
	}

	//delete
	public function delete($id)
	{
		$where = array('kd_jasa' => $id );

		$data = $this->M_service->delete($where,'jasaservice');

		$this->session->set_flashdata('Msg', 'Delete Succes !');

		redirect(base_url('service'));

	}

}

/* End of file User.php */
/* Location: ./application/modules/user/controllers/User.php */