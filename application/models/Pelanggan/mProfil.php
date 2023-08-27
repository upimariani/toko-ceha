<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mProfil extends CI_Model
{
	public function pelanggan()
	{
		$this->db->select('*');
		$this->db->from('konsumen');
		$this->db->where('id_konsumen', $this->session->userdata('id'));
		return $this->db->get()->row();
	}
	public function update_profil($id, $data)
	{
		$this->db->where('id_konsumen', $id);
		$this->db->update('konsumen', $data);
	}
}

/* End of file mProfil.php */
