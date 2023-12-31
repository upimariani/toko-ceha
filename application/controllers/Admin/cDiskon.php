<?php

defined('BASEPATH') or exit('No direct script access allowed');

class cDiskon extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin/mDiskon');
		$this->load->model('Admin/mProduk');
	}


	public function index()
	{
		$data = array(
			'diskon' => $this->mDiskon->select()
		);
		$this->load->view('Admin/Layout/head');
		$this->load->view('Admin/Layout/aside');
		$this->load->view('Admin/Layout/navbar');
		$this->load->view('Admin/Diskon/diskon', $data);
		$this->load->view('Admin/Layout/footer');
	}
	public function createDiskon()
	{
		$this->form_validation->set_rules('produk', 'Produk', 'required');
		$this->form_validation->set_rules('harga', 'Harga Sebelumnya', 'required');
		$this->form_validation->set_rules('nama_diskon', 'Nama Diskon', 'required');
		$this->form_validation->set_rules('diskon', 'Besar Diskon', 'required');
		$this->form_validation->set_rules('tgl', 'Tanggal Selesai', 'required');
		$this->form_validation->set_rules('level_member', 'Level Member', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'produk' => $this->mProduk->select()
			);
			$this->load->view('Admin/Layout/head');
			$this->load->view('Admin/Layout/aside');
			$this->load->view('Admin/Layout/navbar');
			$this->load->view('Admin/Diskon/createDiskon', $data);
			$this->load->view('Admin/Layout/footer');
		} else {
			$data = array(
				'id_produk' => $this->input->post('produk'),
				'nama_diskon' => $this->input->post('nama_diskon'),
				'tgl_selesai' => $this->input->post('tgl'),
				'besar_diskon' => $this->input->post('diskon'),
				'member' => $this->input->post('level_member')
			);
			$this->mDiskon->insert($data);
			$this->session->set_flashdata('success', 'Data Diskon Berhasil Ditambahkan!');
			redirect('Admin/cDiskon');
		}
	}
	public function update($id)
	{
		$this->form_validation->set_rules('produk', 'Produk', 'required');
		$this->form_validation->set_rules('harga', 'Harga Sebelumnya', 'required');
		$this->form_validation->set_rules('nama_diskon', 'Nama Diskon', 'required');
		$this->form_validation->set_rules('diskon', 'Besar Diskon', 'required');
		$this->form_validation->set_rules('tgl', 'Tanggal Selesai', 'required');
		$this->form_validation->set_rules('level_member', 'Level Member', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'produk' => $this->mProduk->select(),
				'diskon' => $this->mDiskon->edit($id)
			);
			$this->load->view('Admin/Layout/head');
			$this->load->view('Admin/Layout/aside');
			$this->load->view('Admin/Layout/navbar');
			$this->load->view('Admin/Diskon/updateDiskon', $data);
			$this->load->view('Admin/Layout/footer');
		} else {
			$data = array(
				'id_produk' => $this->input->post('produk'),
				'nama_diskon' => $this->input->post('nama_diskon'),
				'tgl_selesai' => $this->input->post('tgl'),
				'besar_diskon' => $this->input->post('diskon'),
				'member' => $this->input->post('level_member')
			);
			$this->mDiskon->update($id, $data);
			$this->session->set_flashdata('success', 'Data Diskon Berhasil Ditambahkan!');
			redirect('Admin/cDiskon');
		}
	}
	public function delete($id)
	{
		$this->mDiskon->delete($id);
		$this->session->set_flashdata('success', 'Data Diskon Berhasil Dihapus!');
		redirect('Admin/cDiskon');
	}
}

/* End of file cDiskon.php */
