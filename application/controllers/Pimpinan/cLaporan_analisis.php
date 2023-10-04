<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLaporan_analisis extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin/mPelanggan');
	}
	public function index()
	{
		$date = date('Y-m-d');
		$data = array(
			'lap' => $this->mPelanggan->pelanggan($date)
		);
		$this->load->view('Pimpinan/Layout/head');
		$this->load->view('Pimpinan/Layout/aside');
		$this->load->view('Pimpinan/Layout/navbar');
		$this->load->view('Pimpinan/Laporan/lap_pelanggan', $data);
		$this->load->view('Pimpinan/Layout/footer');
	}
	public function cetak()
	{
		// memanggil library FPDF
		require('asset/fpdf/fpdf.php');

		// intance object dan memberikan pengaturan halaman PDF
		$pdf = new FPDF('P', 'mm', 'A4');
		$pdf->AddPage();

		$pdf->SetFont('Times', 'B', 14);

		$pdf->Cell(200, 40, 'LAPORAN HASIL ANALISIS PELANGGAN', 0, 0, 'C');
		$pdf->SetLineWidth(0);
		$pdf->Cell(10, 30, '', 0, 1);
		$pdf->SetFont('Times', 'B', 9);
		$pdf->Cell(10, 7, 'No', 1, 0, 'C');
		$pdf->Cell(50, 7, 'Nama Pelanggan', 1, 0, 'C');
		$pdf->Cell(50, 7, '	No Telepon', 1, 0, 'C');
		$pdf->Cell(40, 7, 'Level Member', 1, 0, 'C');


		$pdf->Cell(10, 7, '', 0, 1);
		$pdf->SetFont('Times', '', 10);
		$no = 1;


		$date = date('Y-m-d');
		$data = $this->mPelanggan->pelanggan($date);
		foreach ($data as $key => $value) {
			if ($value->member == '3') {
				$status = 'Gold';
			} else if ($value->member == '2') {
				$status = 'Silver';
			} else {
				$status = 'Clasic';
			}
			$pdf->Cell(10, 6, $no++, 1, 0, 'C');
			$pdf->Cell(50, 6, $value->nama_konsumen, 1, 0);
			$pdf->Cell(50, 6, $value->no_hp_konsumen, 1, 0);
			$pdf->Cell(40, 6, $status, 1, 1);
		}
		$pdf->Output();
	}
}

/* End of file cLaporan_analisis.php */
