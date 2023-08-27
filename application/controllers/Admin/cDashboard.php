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
		$this->load->view('Admin/Layout/head');
		$this->load->view('Admin/Layout/aside');
		$this->load->view('Admin/Layout/navbar');
		$this->load->view('Admin/dashboard', $data);
		$this->load->view('Admin/Layout/footer');
	}
}

/* End of file cDashboard.php */
