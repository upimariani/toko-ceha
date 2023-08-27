<?php
defined('BASEPATH') or exit('No direct script access allowed');

class claporan_transaksi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pimpinan/mLaporan');
	}


	public function index()
	{

		$this->load->view('Pimpinan/Layout/head');
		$this->load->view('Pimpinan/Layout/aside');
		$this->load->view('Pimpinan/Layout/navbar');
		$this->load->view('Pimpinan/Laporan/lap_transaksi');
		$this->load->view('Pimpinan/Layout/footer');
	}

	public function lap_harian_transaksi()
	{
		$tanggal = $this->input->post('tanggal');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		$data = array(
			'tanggal' => $tanggal,
			'bulan' => $bulan,
			'tahun' => $tahun,
			'laporan' => $this->mLaporan->lap_harian_transaksi($tanggal, $bulan, $tahun)
		);
		$this->load->view('Pimpinan/Layout/head');
		$this->load->view('Pimpinan/Layout/aside');
		$this->load->view('Pimpinan/Layout/navbar');
		$this->load->view('Pimpinan/Laporan/LaporanTransaksi/harian', $data);
		$this->load->view('Pimpinan/Layout/footer');
	}
	public function lap_bulanan_transaksi()
	{
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		$data = array(
			'bulan' => $bulan,
			'tahun' => $tahun,
			'laporan' => $this->mLaporan->lap_bulanan_transaksi($bulan, $tahun)
		);
		$this->load->view('Pimpinan/Layout/head');
		$this->load->view('Pimpinan/Layout/aside');
		$this->load->view('Pimpinan/Layout/navbar');
		$this->load->view('Pimpinan/Laporan/LaporanTransaksi/bulanan', $data);
		$this->load->view('Pimpinan/Layout/footer');
	}
	public function lap_tahunan_transaksi()
	{
		$tahun = $this->input->post('tahun');

		$data = array(
			'tahun' => $tahun,
			'laporan' => $this->mLaporan->lap_tahunan_transaksi($tahun)
		);
		$this->load->view('Pimpinan/Layout/head');
		$this->load->view('Pimpinan/Layout/aside');
		$this->load->view('Pimpinan/Layout/navbar');
		$this->load->view('Pimpinan/Laporan/LaporanTransaksi/tahunan', $data);
		$this->load->view('Pimpinan/Layout/footer');
	}
}

/* End of file claporan.php */
