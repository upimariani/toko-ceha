<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mLogin extends CI_Model
{
	public function register($data)
	{
		$this->db->insert('konsumen', $data);
	}
	public function login($username, $password)
	{
		$this->db->select('*');
		$this->db->from('konsumen');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get()->row();
	}
	
}

/* End of file mLogin.php */
