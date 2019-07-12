<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Registrasi extends CI_Model {


	// save
	public function save($data,$tabel)
	{
		$this->db->insert($tabel,$data);
	}

	// save
	public function saveuser($user,$tabel)
	{
		$this->db->insert($tabel,$user);
	}


}

/* End of file M_user.php */
/* Location: ./application/modules/user/models/M_user.php */