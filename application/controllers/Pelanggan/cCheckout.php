<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cCheckout extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pelanggan/mAlamat');
		$this->load->model('Pelanggan/mCheckout');
	}

	public function index()
	{
		$this->protect->protect();
		$data = array(
			'kecamatan' => $this->mCheckout->kecamatan()
		);
		$this->load->view('Pelanggan/Layout/head');
		$this->load->view('Pelanggan/Layout/header');
		$this->load->view('Pelanggan/checkout', $data);
		$this->load->view('Pelanggan/Layout/footer');
	}

	public function pesan()
	{
		$this->protect->protect();
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');


		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'kecamatan' => $this->mCheckout->kecamatan()
			);
			$this->load->view('Pelanggan/Layout/head');
			$this->load->view('Pelanggan/Layout/header');
			$this->load->view('Pelanggan/checkout', $data);
			$this->load->view('Pelanggan/Layout/footer');
		} else {
			//menyimpan tabel trasnsaksi
			$data = array(
				'id_konsumen' => $this->session->userdata('id'),
				'id_kecamatan' => $this->input->post('kecamatan'),
				'tgl_transaksi' => date('Y-m-d'),
				'total_bayar' => $this->input->post('total'),
				'status_order' => '0',
				'bukti_pembayaran' => '0'
			);
			$this->mCheckout->transaksi($data);

			//menyimpan pesanan ke detail transaksi
			$id_transaksi = $this->db->query("SELECT MAX(id_transaksi) as id FROM `transaksi`")->row();
			foreach ($this->cart->contents() as $item) {
				$data_rinci = array(
					'id_transaksi' => $id_transaksi->id,
					'id_produk' => $item['id'],
					'quantity' => $item['qty']
				);
				$this->mCheckout->detail_transaksi($data_rinci);
			}

			//mengurangi jumlah stok
			$kstok = 0;
			foreach ($this->cart->contents() as $key => $value) {
				$id = $value['id'];
				$kstok = $value['stok'] - $value['qty'];
				$data = array(
					'stok' => $kstok
				);
				$this->mCheckout->stok($id, $data);
			}


			$this->cart->destroy();
			redirect('Pelanggan/cStatusOrder');
		}
	}
}

/* End of file cCheckout.php */
