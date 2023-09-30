<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mPelanggan extends CI_Model
{
	public function pelanggan($date)
	{
		return $this->db->query("SELECT COUNT(transaksi.id_transaksi) as frequency, DATEDIFF('" . $date . "', MAX(tgl_transaksi)) as recency, SUM(total_bayar) as monetary, transaksi.id_konsumen, nama_konsumen, member, no_hp_konsumen,alamat_konsumen FROM `transaksi` JOIN konsumen ON konsumen.id_konsumen=transaksi.id_konsumen GROUP BY transaksi.id_konsumen")->result();
	}
}

/* End of file mPelanggan.php */
