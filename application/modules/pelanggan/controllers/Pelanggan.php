<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		date_default_timezone_set('Asia/Jakarta');

		 if ($this->session->userdata('level') == '' ) {
			# code...
			redirect(base_url('auth/login'));
		}



		$this->load->model('M_pelanggan');

	}

	public function index()
	{
		$data['allpelanggan'] 	= $this->M_pelanggan->allpelanggan()->result();
		$data['kodeotomatis'] = $this->M_pelanggan->kodeotomatis();

		$this->load->view('template/main-header');
		$this->load->view('template/header-admin');
		$this->load->view('template/main-sidebar');
		$this->load->view('pelanggan/main-content',$data);
		$this->load->view('template/footer-admin');
	}


// save data
	public function addpelanggan()
	{
		$this->form_validation->set_rules('id_pelanggan', 'id_pelanggan', 'trim|required|xss_clean');
		$this->form_validation->set_rules('no_polisi', 'no_polisi', 'trim|required|xss_clean');
		$this->form_validation->set_rules('nm_pelanggan', 'nm_pelanggan', 'trim|required|xss_clean');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required|xss_clean');
		$this->form_validation->set_rules('kota', 'kota', 'trim|required|xss_clean');
		$this->form_validation->set_rules('telp', 'telp', 'trim|required|xss_clean');
		$this->form_validation->set_rules('tipe_kendaraan', 'tipe_kendaraan', 'trim|required|xss_clean');
		$this->form_validation->set_rules('no_rangka', 'no_rangka', 'trim|required|xss_clean');
		$this->form_validation->set_rules('no_mesin', 'no_mesin', 'trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->session->set_flashdata('Msg', 'Something Wrong !');

			redirect(base_url('pelanggan'));

		} else {
			# code...
			$id_pelanggan = $this->input->post('id_pelanggan');
			$no_polisi = $this->input->post('no_polisi');
			$nm_pelanggan = $this->input->post('nm_pelanggan');
			$alamat = $this->input->post('alamat');
			$kota = $this->input->post('kota');
			$telp = $this->input->post('telp');
			$tipe_kendaraan = $this->input->post('tipe_kendaraan');
			$no_rangka = $this->input->post('no_rangka');
			$no_mesin = $this->input->post('no_mesin');

			$data = array(
				'id_pelanggan' => $id_pelanggan , 
				'no_polisi' => $no_polisi , 
				'nm_pelanggan' => $nm_pelanggan , 
				'alamat' => $alamat , 
				'kota' => $kota , 
				'telp' => $telp , 
				'tipe_kendaraan' => $tipe_kendaraan , 
				'no_rangka' => $no_rangka , 
				'no_mesin' => $no_mesin  
			);

			$this->M_pelanggan->save($data,'pelanggan');

			$this->session->set_flashdata('Msg', 'Data Succes !');

			redirect(base_url('pelanggan'));


		}
	}


	//  edit
	public function edit($id)
	{
		$where = array('id_pelanggan' => $id);

		$data['pelanggan'] = $this->M_pelanggan->editbarang($where,'pelanggan')->result();

		$this->load->view('template/main-header');
		$this->load->view('template/header-admin');
		$this->load->view('template/main-sidebar');
		$this->load->view('pelanggan/edit',$data);
		$this->load->view('template/footer-admin');

	}

	//update
	public function update()
	{
		$this->form_validation->set_rules('id_pelanggan', 'id_pelanggan', 'trim|required|xss_clean');
		$this->form_validation->set_rules('no_polisi', 'no_polisi', 'trim|required|xss_clean');
		$this->form_validation->set_rules('nm_pelanggan', 'nm_pelanggan', 'trim|required|xss_clean');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required|xss_clean');
		$this->form_validation->set_rules('kota', 'kota', 'trim|required|xss_clean');
		$this->form_validation->set_rules('telp', 'telp', 'trim|required|xss_clean');
		$this->form_validation->set_rules('tipe_kendaraan', 'tipe_kendaraan', 'trim|required|xss_clean');
		$this->form_validation->set_rules('no_rangka', 'no_rangka', 'trim|required|xss_clean');
		$this->form_validation->set_rules('no_mesin', 'no_mesin', 'trim|required|xss_clean');

		
		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->session->set_flashdata('Msg', 'Update Failed , Please Cek Again !');

			redirect(base_url('user'));
			
		} else {
			# code...
			$id_pelanggan = $this->input->post('id_pelanggan');
			$no_polisi = $this->input->post('no_polisi');
			$nm_pelanggan = $this->input->post('nm_pelanggan');
			$alamat = $this->input->post('alamat');
			$kota = $this->input->post('kota');
			$telp = $this->input->post('telp');
			$tipe_kendaraan = $this->input->post('tipe_kendaraan');
			$no_rangka = $this->input->post('no_rangka');
			$no_mesin = $this->input->post('no_mesin');

			$data = array(
				'id_pelanggan' => $id_pelanggan , 
				'no_polisi' => $no_polisi , 
				'nm_pelanggan' => $nm_pelanggan , 
				'alamat' => $alamat , 
				'kota' => $kota , 
				'telp' => $telp , 
				'tipe_kendaraan' => $tipe_kendaraan , 
				'no_rangka' => $no_rangka , 
				'no_mesin' => $no_mesin  
			);

			$where = array(
				'id_pelanggan' => $id_pelanggan 
			);

			$this->M_pelanggan->updatebarang($where,$data,'pelanggan');

			$this->session->set_flashdata('Msg', 'Update Succes !');

			redirect(base_url('pelanggan'));


		}
		
	}

	//delete
	public function delete($id)
	{
		$where = array('id_pelanggan' => $id );

		$data = $this->M_pelanggan->delete($where,'pelanggan');

		$this->session->set_flashdata('Msg', 'Delete Succes !');

		redirect(base_url('pelanggan'));

	}

}

/* End of file User.php */
/* Location: ./application/modules/user/controllers/User.php */