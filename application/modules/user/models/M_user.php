<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	// view
	public function alluser()
	{
		$query = $this->db->query("select * from tb_user");

		return $query;
	}

	// save
	public function save($data,$tabel)
	{
		$this->db->insert($tabel,$data);
	}

	//edit
	public function edituser($where,$table)
	{
		return $this->db->get_where($table,$where);
	}

	//update user
	public function updateuser($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
		return TRUE;
	}

	//delete
	public function deleteuser($where,$tabel)
	{
		$this->db->where($where);
		$this->db->delete($tabel);
	}


}

/* End of file M_user.php */
/* Location: ./application/modules/user/models/M_user.php */