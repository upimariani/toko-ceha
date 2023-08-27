<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cStatusOrder extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pelanggan/mStatusOrder');
		$this->load->model('Pelanggan/mAnalisis');
	}


	public function index()
	{
		$this->protect->protect();
		$data = array(
			'status' => $this->mStatusOrder->pesanan()
		);
		$this->load->view('Pelanggan/Layout/head');
		$this->load->view('Pelanggan/Layout/header');
		$this->load->view('Pelanggan/status_order', $data);
		$this->load->view('Pelanggan/Layout/footer');
	}
	public function detail_pesanan($id)
	{
		$data = array(
			'detail' => $this->mStatusOrder->detail_pesanan($id)
		);
		$this->load->view('Pelanggan/Layout/head');
		$this->load->view('Pelanggan/Layout/header');
		$this->load->view('Pelanggan/detail_pesanan', $data);
		$this->load->view('Pelanggan/Layout/footer');
	}
	public function pembayaran($id)
	{
		$config['upload_path']          = './asset/bukti-pembayaran';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 500000;
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('gambar')) {
			$data = array(
				'detail' => $this->mStatusOrder->detail_pesanan($id),
				'error' => $this->upload->display_errors()
			);
			$this->load->view('Pelanggan/Layout/head');
			$this->load->view('Pelanggan/Layout/header');
			$this->load->view('Pelanggan/detail_pesanan', $data);
			$this->load->view('Pelanggan/Layout/footer');
		} else {
			$upload_data = $this->upload->data();
			$data = array(
				'status_order' => '1',
				'bukti_pembayaran' => $upload_data['file_name']
			);
			$this->mStatusOrder->pembayaran($id, $data);
			$this->session->set_flashdata('success', 'Pembayaran Berhasil Dikirim!');
			redirect('pelanggan/cStatusOrder/detail_pesanan/' . $id);
		}
	}
	public function diterima($id)
	{
		$var_recency = array();
		$var_frequency = array();
		$var_monetary = array();
		$date_in = date('Y-m-d');
		$variabel = $this->mAnalisis->variabel($date_in);
		foreach ($variabel['all'] as $key => $value) {
			$var_recency[] = $value->recency;
			$var_frequency[] = $value->frequency;
			$var_monetary[] = $value->monetary;
			// echo '<br>Recency: ' . $value->recency;
			// echo '<br>Frequency: ' . $value->frequency;
			// echo '<br>Monetary: ' . $value->monetary;
		}

		// echo '<br>';
		$max_recency = max($var_recency);
		$max_frequency = max($var_frequency);
		$max_monetary = max($var_monetary);
		// echo $max_recency . '<br>';
		// echo $max_frequency . '<br>';
		// echo $max_monetary . '<br>';

		// echo '<br>';
		$rn = $var_recency[0] / $max_recency;
		$fn = $var_frequency[0] / $max_frequency;
		$mn = $var_monetary[0] / $max_monetary;
		// echo $var_recency[0] . '|' . $rn . '<br>';
		// echo $var_frequency[0] . '|' . $fn . '<br>';
		// echo $var_monetary[0] . '|' . $mn . '<br>';


		//menentukan rumus euclidean Distance
		$e_recency = array();
		$e_frequecy = array();
		$e_monetary = array();
		foreach ($variabel['limit'] as $key => $value) {
			$e_recency[] = $value->recency;
			$e_frequecy[] = $value->frequency;
			$e_monetary[] = $value->monetary;
		}

		$centroid1 = round(sqrt((pow(($e_recency[1] - $e_recency[0]), 2)) + (pow($e_frequecy[1] - $e_frequecy[0], 2)) + (pow($e_monetary[1] - $e_monetary[0], 2))), 3);
		$centroid2 = round(sqrt((pow(($e_recency[0] - $e_recency[1]), 2)) + (pow($e_frequecy[0] - $e_frequecy[1], 2)) + (pow($e_monetary[0] - $e_monetary[1], 2))), 3);
		// echo '<br>' . $centroid1;
		// echo '<br>' . $centroid2;


		foreach ($variabel['all'] as $key => $value) {
			$centroid_next1 = round(sqrt((pow(($value->recency - $e_recency[0]), 2)) + (pow($value->frequency - $e_frequecy[0], 2)) + (pow($value->monetary - $e_monetary[0], 2))), 3);
			$centroid_next2 = round(sqrt((pow(($value->recency - $e_recency[1]), 2)) + (pow($value->frequency - $e_frequecy[1], 2)) + (pow($value->monetary - $e_monetary[1], 2))), 3);

			if ($centroid1 >= $centroid_next1) {
				$status = 0;
			}
			if ($centroid2 >= $centroid_next2) {
				$status = 1;
			}
			$status_member = array(
				'member' => $status
			);
			$this->db->where('id_konsumen', $value->id_konsumen);
			$this->db->update('konsumen', $status_member);
		}

		$status_order = array(
			'status_order' => '4'
		);
		$this->db->where('id_transaksi', $id);
		$this->db->update('transaksi', $status_order);
		$this->session->set_flashdata('success', 'Pesanan Sudah Diterima');
		redirect('pelanggan/cStatusOrder');
	}
}

/* End of file cStatusOrder.php */
