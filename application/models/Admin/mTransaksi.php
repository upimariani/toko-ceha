<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mTransaksi extends CI_Model
{
	public function transaksi()
	{
		$data['pesanan_masuk'] = $this->db->query("SELECT * FROM `transaksi` JOIN konsumen ON transaksi.id_konsumen = konsumen.id_konsumen WHERE status_order='0'")->result();
		$data['konfirmasi'] = $this->db->query("SELECT * FROM `transaksi` JOIN konsumen ON transaksi.id_konsumen = konsumen.id_konsumen WHERE status_order='1'")->result();
		$data['diproses'] = $this->db->query("SELECT * FROM `transaksi` JOIN konsumen ON transaksi.id_konsumen = konsumen.id_konsumen WHERE status_order='2'")->result();
		$data['dikirim'] = $this->db->query("SELECT * FROM `transaksi` JOIN konsumen ON transaksi.id_konsumen = konsumen.id_konsumen WHERE status_order='3'")->result();
		$data['selesai'] = $this->db->query("SELECT * FROM `transaksi` JOIN konsumen ON transaksi.id_konsumen = konsumen.id_konsumen WHERE status_order='4'")->result();
		return $data;
	}
	public function detail_pesanan($id)
	{
		$data['pesanan'] = $this->db->query("SELECT * FROM pesanan JOIN transaksi ON pesanan.id_transaksi=transaksi.id_transaksi JOIN produk ON pesanan.id_produk=produk.id_produk LEFT JOIN diskon ON diskon.id_produk=produk.id_produk WHERE transaksi.id_transaksi='" . $id . "';")->result();
		$data['transaksi'] = $this->db->query("SELECT * FROM `transaksi` JOIN konsumen ON konsumen.id_konsumen=transaksi.id_konsumen JOIN ongkir ON ongkir.id_kecamatan = transaksi.id_kecamatan WHERE transaksi.id_transaksi='" . $id . "';")->row();
		return $data;
	}
}

/* End of file mTransaksi.php */
