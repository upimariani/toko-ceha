<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mPelanggan extends CI_Model
{
	public function pelanggan()
	{
		$this->db->select('*');
		$this->db->from('konsumen');
		return $this->db->get()->result();
	}
}

/* End of file mPelanggan.php */
