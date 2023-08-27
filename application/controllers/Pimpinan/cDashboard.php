<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin/mDashboard');
	}

	public function index()
	{
		$data = array(
			'stok' => $this->mDashboard->stok_produk(),
		);
		$this->load->view('Pimpinan/Layout/head');
		$this->load->view('Pimpinan/Layout/aside');
		$this->load->view('Pimpinan/Layout/navbar');
		$this->load->view('Pimpinan/dashboard', $data);
		$this->load->view('Pimpinan/Layout/footer');
	}
}

/* End of file cDashboard.php */
