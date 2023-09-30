<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mAnalisis extends CI_Model
{
	public function variabel($date)
	{
		$data['all'] = $this->db->query("SELECT COUNT(transaksi.id_transaksi) as frequency, DATEDIFF('" . $date . "', MAX(tgl_transaksi)) as recency, SUM(total_bayar) as monetary, transaksi.id_konsumen, nama_konsumen, alamat_konsumen FROM `transaksi` JOIN konsumen ON konsumen.id_konsumen=transaksi.id_konsumen GROUP BY transaksi.id_konsumen")->result();
		// $data['limit'] = $this->db->query("SELECT COUNT(id_transaksi) as frequency, DATEDIFF('" . $date . "', MAX(tgl_transaksi)) as recency, SUM(total_bayar) as monetary, id_konsumen FROM `transaksi`GROUP BY id_konsumen LIMIT 3")->result();
		$data['centroid'] = $this->db->query("SELECT COUNT(id_transaksi) as frequency, DATEDIFF('" . $date . "', MAX(tgl_transaksi)) as recency, SUM(total_bayar) as monetary, id_konsumen FROM `transaksi`GROUP BY id_konsumen LIMIT 3")->result();
		return $data;
	}
}

/* End of file mAnalisis.php */
