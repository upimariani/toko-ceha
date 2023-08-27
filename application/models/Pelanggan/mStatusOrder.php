<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mStatusOrder extends CI_Model
{
	public function pesanan()
	{
		$data['deliv'] = $this->db->query("SELECT * FROM `transaksi` JOIN konsumen ON transaksi.id_konsumen=konsumen.id_konsumen WHERE konsumen.id_konsumen=" . $this->session->userdata('id'))->result();
		return $data;
	}
	public function detail_pesanan($id)
	{
		$data['pesanan'] = $this->db->query("SELECT * FROM transaksi JOIN pesanan ON transaksi.id_transaksi = pesanan.id_transaksi JOIN produk ON pesanan.id_produk = produk.id_produk LEFT JOIN diskon ON diskon.id_produk=produk.id_produk WHERE transaksi.id_transaksi='" . $id . "'")->result();
		$data['transaksi'] = $this->db->query("SELECT * FROM transaksi JOIN konsumen ON transaksi.id_konsumen = konsumen.id_konsumen JOIN ongkir ON transaksi.id_kecamatan = ongkir.id_kecamatan WHERE transaksi.id_transaksi='" . $id . "'")->row();
		return $data;
	}
	public function pembayaran($id, $data)
	{
		$this->db->where('id_transaksi', $id);
		$this->db->update('transaksi', $data);
	}
	public function konsumen($id)
	{
		$this->db->select('*');
		$this->db->from('konsumen');
		$this->db->where('id_konsumen', $id);
		return $this->db->get()->row();
	}
	public function update_point($id, $data)
	{
		$this->db->where('id_konsumen', $id);
		$this->db->update('konsumen', $data);
	}
	public function kritik_saran($data)
	{
		$this->db->insert('kritik_saran', $data);
	}
	public function review_all()
	{
		$this->db->select('*');
		$this->db->from('kritik_saran');
		$this->db->join('konsumen', 'kritik_saran.id_konsumen = konsumen.id_konsumen', 'left');
		return $this->db->get()->result();
	}
}

/* End of file mStatusOrder.php */
