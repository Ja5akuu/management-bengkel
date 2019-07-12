<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		date_default_timezone_set('Asia/Jakarta');

		 if ($this->session->userdata('level') == '' ) {
			# code...
			redirect(base_url('auth/login'));
		}



		$this->load->model('M_kategori');

	}

	public function index()
	{
		$data['allkategori'] 	= $this->M_kategori->allkategori()->result();
		$data['kodeotomatis'] = $this->M_kategori->kodeotomatis();

		$this->load->view('template/main-header');
		$this->load->view('template/header-admin');
		$this->load->view('template/main-sidebar');
		$this->load->view('kategori/main-content',$data);
		$this->load->view('template/footer-admin');
	}


// save data
	public function addkategori()
	{
		$this->form_validation->set_rules('id_kategori', 'id_kategori', 'trim|required|xss_clean');
		$this->form_validation->set_rules('kategori', 'kategori', 'trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->session->set_flashdata('Msg', 'Something Wrong !');

			redirect(base_url('barang'));

		} else {
			# code...
			$id_kategori = $this->input->post('id_kategori');
			$kategori = $this->input->post('kategori');

			$data = array(
				'id_kategori' => $id_kategori , 
				'kategori' => $kategori 
			);

			$this->M_kategori->save($data,'tb_kategori');

			redirect(base_url('kategori'));


		}
	}


	//  edit
	public function edit($id)
	{
		$where = array('id_kategori' => $id);

		$data['kategori'] = $this->M_kategori->editbarang($where,'tb_kategori')->result();

		$this->load->view('template/main-header');
		$this->load->view('template/header-admin');
		$this->load->view('template/main-sidebar');
		$this->load->view('kategori/edit',$data);
		$this->load->view('template/footer-admin');

	}

	//update
	public function update()
	{
		$this->form_validation->set_rules('id_kategori', 'id_kategori', 'trim|required|xss_clean');
		$this->form_validation->set_rules('kategori', 'kategori', 'trim|required|xss_clean');

		
		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->session->set_flashdata('Msg', 'Update Failed , Please Cek Again !');

			redirect(base_url('user'));
			
		} else {
			# code...
			$id_kategori = $this->input->post('id_kategori');
			$kategori = $this->input->post('kategori');

			$data = array(
				'id_kategori' => $id_kategori , 
				'kategori' => $kategori 
			);

			$where = array(
				'id_kategori' => $id_kategori 
			);

			$this->M_kategori->updatebarang($where,$data,'tb_kategori');

			$this->session->set_flashdata('Msg', 'Update Succes !');

			redirect(base_url('kategori'));


		}
		
	}

	//delete
	public function delete($id)
	{
		$where = array('id_kategori' => $id );

		$data = $this->M_kategori->delete($where,'tb_kategori');

		$this->session->set_flashdata('Msg', 'Delete Succes !');

		redirect(base_url('kategori'));

	}

}

/* End of file User.php */
/* Location: ./application/modules/user/controllers/User.php */