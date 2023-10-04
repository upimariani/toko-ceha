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
		$no = 1;
		$variabel = $this->mAnalisis->variabel($date_in);
		foreach ($variabel['all'] as $key => $value) {
			$var_recency[] = $value->recency;
			$var_frequency[] = $value->frequency;
			$var_monetary[] = $value->monetary;
			// echo '<br>' . $value->id_konsumen;
			// echo '<br>' . $no++ . 'Recency: ' . $value->recency;
			// echo '<br>Frequency: ' . $value->frequency;
			// echo '<br>Monetary: ' . $value->monetary;
		}


		//menentukan rumus euclidean Distance
		$e_recency = array();
		$e_frequecy = array();
		$e_monetary = array();
		foreach ($variabel['centroid'] as $key => $value) {
			$e_recency[] = $value->recency;
			$e_frequecy[] = $value->frequency;
			$e_monetary[] = $value->monetary;
		}

		echo '<br>';

		$i1_recency = 0;
		$i2_recency = 0;
		$i3_recency = 0;
		$i1_frequency = 0;
		$i2_frequency = 0;
		$i3_frequency = 0;
		$i1_monetary = 0;
		$i2_monetary = 0;
		$i3_monetary = 0;

		$jml_1 = 0;
		$jml_2 = 0;
		$jml_3 = 0;
		foreach ($variabel['all'] as $key => $value) {
			$centroid_next1 = round(sqrt((pow(($value->recency - $e_recency[0]), 2)) + (pow($value->frequency - $e_frequecy[0], 2)) + (pow($value->monetary - $e_monetary[0], 2))), 3);
			$centroid_next2 = round(sqrt((pow(($value->recency - $e_recency[1]), 2)) + (pow($value->frequency - $e_frequecy[1], 2)) + (pow($value->monetary - $e_monetary[1], 2))), 3);
			$centroid_next3 = round(sqrt((pow(($value->recency - $e_recency[2]), 2)) + (pow($value->frequency - $e_frequecy[2], 2)) + (pow($value->monetary - $e_monetary[2], 2))), 3);

			$min = min($centroid_next1, $centroid_next2, $centroid_next3);
			$nilai_terdekat[] = $min;
			// echo $min;
			// echo '<br>';
			if ($min == $centroid_next1) {
				$status = '1';
				$i1_recency += $value->recency;
				$i1_frequency += $value->frequency;
				$i1_monetary += $value->monetary;

				$jml_1 += 1;

				// echo $n++ . '|' . $value->recency;
				// echo $value->id_konsumen;
				// echo '<br>';
			} else if ($min == $centroid_next2) {
				$status = '2';
				$i2_recency += $value->recency;
				$i2_frequency += $value->frequency;
				$i2_monetary += $value->monetary;

				$jml_2 += 1;
				// echo $o++ . '|' . $value->recency;
				// echo $value->id_konsumen;
				// echo '<br>';
			} else if ($min == $centroid_next3) {
				$status = '3';
				$i3_recency += $value->recency;
				$i3_frequency += $value->frequency;
				$i3_monetary += $value->monetary;

				$jml_3 += 1;
				// echo $n++ . '|' . $value->recency;
				// echo $value->id_konsumen;
				// echo '<br>';
			}
			// echo $status;
			$status_member = array(
				'member' => $status
			);
			$this->db->where('id_konsumen', $value->id_konsumen);
			$this->db->update('konsumen', $status_member);
		}

		//variabel baruu -----------------------------------------------------
		$var_bar_recency1 = round($i1_recency / $jml_1, 2);
		$var_bar_recency2 = round($i1_frequency / $jml_1, 2);
		$var_bar_recency3 = round($i1_monetary / $jml_1, 2);

		$var_bar_frequency1 = round($i2_recency / $jml_2, 2);
		$var_bar_frequency2 = round($i2_frequency / $jml_2, 2);
		$var_bar_frequency3 = round($i2_monetary / $jml_2, 2);

		$var_bar_monetary1 = round($i3_recency / $jml_3, 2);;
		$var_bar_monetary2 = round($i3_frequency / $jml_3, 2);;
		$var_bar_monetary3 = round($i3_monetary / $jml_3, 2);;



		// echo '---------------------------------------<br>';
		//nilai bcv
		for ($bcv = 0; $bcv < sizeof($e_recency); $bcv++) {
			// echo $e_recency[$bcv];
			// echo $e_frequecy[$bcv];
			// echo $e_monetary[$bcv];
			// echo '<br>';
		}
		$d1 = sqrt((pow($e_recency[0] - $e_recency[1], 2)) + (pow($e_frequecy[0] - $e_frequecy[1], 2)) + (pow($e_monetary[0] - $e_monetary[1], 2)));
		$d2 = sqrt((pow($e_recency[0] - $e_recency[2], 2)) + (pow($e_frequecy[0] - $e_frequecy[2], 2)) + (pow($e_monetary[0] - $e_monetary[2], 2)));
		$d3 = sqrt((pow($e_recency[1] - $e_recency[2], 2)) + (pow($e_frequecy[1] - $e_frequecy[2], 2)) + (pow($e_monetary[1] - $e_monetary[2], 2)));

		$bcv = round($d1 + $d2 + $d3);
		// echo 'Nilai Bcv: ' . $bcv;
		// echo '<br>';

		$nilai_wcv = 0;
		for ($kuadrat = 0; $kuadrat < sizeof($nilai_terdekat); $kuadrat++) {
			$nilai_wcv += round((pow($nilai_terdekat[$kuadrat], 2)));
		}
		// echo 'Nilai WCV ' . $nilai_wcv;
		echo '<br>';

		$ratio = round($bcv / $nilai_wcv);
		// echo 'Nilai Ratio:' . $ratio;

		//iterasi --------------------------------------------------------------

		foreach ($variabel['all'] as $key => $value) {
			$centroid_iterasi11 = round(sqrt((pow(($value->recency - $var_bar_recency1), 2)) + (pow($value->frequency - $var_bar_frequency1, 2)) + (pow($value->monetary - 	$var_bar_monetary1, 2))), 3);
			$centroid_iterasi12 = round(sqrt((pow(($value->recency - $var_bar_recency2), 2)) + (pow($value->frequency - $var_bar_frequency2, 2)) + (pow($value->monetary - 	$var_bar_monetary2, 2))), 3);
			$centroid_iterasi13 = round(sqrt((pow(($value->recency - $var_bar_recency3), 2)) + (pow($value->frequency - $var_bar_frequency3, 2)) + (pow($value->monetary - 	$var_bar_monetary3, 2))), 3);


			$min1 = min($centroid_iterasi11, $centroid_iterasi12, $centroid_iterasi13);
			$nilai_terdekat1[] = $min1;
			// echo $min;
			// echo '<br>';
			if ($min1 == $centroid_iterasi11) {
				$status1 = '1';
			} else if ($min1 == $centroid_iterasi12) {
				$status1 = '2';
			} else if ($min1 == $centroid_iterasi13) {
				$status1 = '3';
			}

			// echo  $status1;
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
