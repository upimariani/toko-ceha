<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mCheckout extends CI_Model
{
	public function kecamatan()
	{
		$this->db->select('*');
		$this->db->from('ongkir');
		return $this->db->get()->result();
	}
	public function detail_transaksi($data)
	{
		$this->db->insert('pesanan', $data);
	}
	public function transaksi($data)
	{
		$this->db->insert('transaksi', $data);
	}
	public function stok($id, $data)
	{
		$this->db->where('id_produk', $id);
		$this->db->update('produk', $data);
	}
}

/* End of file mCheckout.php */
