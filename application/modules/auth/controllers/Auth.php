 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 class Auth extends CI_Controller {

 	public function __construct()
 	{
 		parent::__construct();
		//Do your magic here
 		$this->load->model('M_auth');
 	}

 	public function index()
 	{
 		$this->load->view('login');

 	}

 	public function login()
 	{
 		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
 		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

 		if ($this->form_validation->run() == FALSE) {
			# code...
 			$this->session->set_flashdata('Error', 'Something Wrong, Please Check Username or Password');

 			redirect(base_url('auth'));
 			
 		} else {
			# code...
 			$username = $this->input->post('username');
 			$password = md5($this->input->post('password'));

 			$cek = $this->M_auth->cek_user($username,$password);

 			if ($cek->num_rows() > 0 ) {
				# code...
 				foreach ($cek->result() as $data) {
					# code...
 					$sess_data = array(
 						'user1' => $data->user ,
 						'username1' => $data->username ,
 						'level' => $data->level
 					);

 					$this->session->set_userdata($sess_data);

 				}
 				redirect(base_url('beranda'));
 			} else {
				# code...
 				$this->session->set_flashdata('Error', 'Something Wrong, Please Check Username or Password');

 				redirect(base_url('auth'));

 			}
 		}

 	}

 	public function logout()
 	{
 		$this->session->sess_destroy();
 		redirect(base_url('auth'));
 	}
 }

 /* End of file login.php */
/* Location: ./application/modules/auth/controllers/login.php */