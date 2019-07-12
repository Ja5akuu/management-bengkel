<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_Registrasi');

	}

	public function index()
	{
		
		$this->load->view('Registrasi/main-content');
	}


// save data
	public function regis()
	{
		$this->form_validation->set_rules('nisn', 'nisn', 'trim|required|xss_clean');
		$this->form_validation->set_rules('nama', 'nama', 'trim|required|xss_clean');
		$this->form_validation->set_rules('epassword', 'epassword', 'trim|required|xss_clean');
		$this->form_validation->set_rules('dpassword', 'dpassword', 'trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->session->set_flashdata('Msg', 'Something Wrong !');

			redirect(base_url('Registrasi'));

		} else {
			# code...
			$nisn = $this->input->post('nisn');
			$nama = $this->input->post('nama');
			$epassword = md5($this->input->post('epassword'));
			$dpassword = $this->input->post('dpassword');

			$data = array(
				'id_regis' => '',
				'nisn' => $nisn , 
				'nama' => $nama ,
			);

			$user  = array(
				'id_user' => '', 
				'username' => $nisn,
				'epassword' => $epassword ,
				'dpassword' => $dpassword,
				'level'=>'user'
			);

			$this->M_Registrasi->save($data,'tb_Registrasi');
			$this->M_Registrasi->saveuser($user,'tb_user');

			redirect(base_url('Auth'));


		}
	}

}

/* End of file User.php */
/* Location: ./application/modules/user/controllers/User.php */