<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cViewAnalisis extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pelanggan/mAnalisis');
	}

	public function index()
	{
		$this->load->view('Admin/Layout/head');
		$this->load->view('Admin/Layout/aside');
		$this->load->view('Admin/Layout/navbar');
		$this->load->view('Admin/vViewAnalisis');
		$this->load->view('Admin/Layout/footer');
	}
}

/* End of file cViewAnalisis.php */
