<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPelanggan extends CI_Controller
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
		$this->load->view('Admin/Layout/head');
		$this->load->view('Admin/Layout/aside');
		$this->load->view('Admin/Layout/navbar');
		$this->load->view('Admin/Pelanggan/vPelanggan', $data);
		$this->load->view('Admin/Layout/footer');
	}
}

/* End of file cPelanggan.php */
