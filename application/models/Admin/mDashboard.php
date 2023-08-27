<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mDashboard extends CI_Model
{
	public function stok_produk()
	{
		$this->db->select('*');
		$this->db->from('produk');
		return $this->db->get()->result();
	}
}

/* End of file mDashboard.php */
