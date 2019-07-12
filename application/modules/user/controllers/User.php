<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		date_default_timezone_set('Asia/Jakarta');

		
        if ($this->session->userdata('level') == '' ) {
			# code...
			redirect(base_url('auth/login'));
		}


		$this->load->model('M_user');

	}

	public function index()
	{
		$data['alluser'] = $this->M_user->alluser()->result();

		$this->load->view('template/main-header');
		$this->load->view('template/header-admin');
		$this->load->view('template/main-sidebar');
		$this->load->view('user/main-content',$data);
		$this->load->view('template/footer-admin');
	}


// save data
	public function adduser()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->session->set_flashdata('User', 'wrong');

 			redirect(base_url('user'));

		} else {
			# code...
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$level = $this->input->post('level');

			$data = array(
				'username' => $username, 
				'password' => $password , 
				'level' => $level 
			);

			$this->session->set_flashdata('Msg', 'Data Saved !');			

			$this->M_user->save($data,'tb_user');

			redirect(base_url('user'));

		}
	}


	//  edit
	public function edit($id)
	{
		$where = array('id_user' => $id);

		$data['user'] = $this->M_user->edituser($where,'tb_user')->result();

		$this->load->view('template/main-header');
		$this->load->view('template/header-admin');
		$this->load->view('template/main-sidebar');
		$this->load->view('user/edit',$data);
		$this->load->view('template/footer-admin');

	}

	//update
	public function update()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		$this->form_validation->set_rules('level', 'Level', 'trim|required|xss_clean');

		
		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->session->set_flashdata('Msg', 'Update Failed , Please Cek Again !');

			redirect(base_url('user'));
			
		} else {
			# code...
			$id_user 		= $this->input->post('id');
			$username 		= $this->input->post('username');
			$passwordhash 	= md5($this->input->post('password'));
			$level 			= $this->input->post('level');

			$data = array(
				'username' => $username , 
				'Password' => $passwordhash, 
				'level' =>  $level
			);

			$where = array(
				'id_user' => $id_user 
			);

			$this->M_user->updateuser($where,$data,'user');

			$this->session->set_flashdata('Msg', 'Update Succes !');

			redirect(base_url('user'));


		}
		
	}

	//delete
	public function delete($id)
	{
		$where = array('id_user' => $id );

		$data = $this->M_user->deleteuser($where,'tb_user');

		$this->session->set_flashdata('Msg', 'Delete Succes !');

		redirect(base_url('user'));

	}

}

/* End of file User.php */
/* Location: ./application/modules/user/controllers/User.php */