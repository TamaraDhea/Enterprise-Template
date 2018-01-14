<?php

class Kategori extends CI_Controller {

	var $API = "";

	public function __construct()
	{
		parent::__construct();
		ini_set('max_execution_time', 0); ini_set('memory_limit','2048M');
		//Do your magic here
		$this->API="http://localhost/Lelangbang/lelang_server/index.php";
		$this->load->library('session');
		$this->load->library('curl');
		$this->load->helper('form');
		$this->load->helper('url');
	}

	function index()
	{
		$data['dataKategori'] = json_decode($this->curl->simple_get($this->API.'/kategori'));
		$this->load->view('kategori/list', $data);
	}

	function create()
	{
		if (isset($_POST['submit'])) {
			$data = array(
			'id_kategori' => $this->input->post('id_kategori'),
			'nama_kategori' => $this->input->post('nama_kategori'),
			'keterangan' => $this->input->post('keterangan')
		);
		$insert = $this->curl->simple_post($this->API.'/kategori', $data, array(CURLOPT_BUFFERSIZE => 10));
			if ($insert) {
				$this->session->set_flashdata('hasil', 'Insert Data Berhasil');
			} else {
				$this->session->flashdata('hasil', 'Insert Data Gagal');
			}
			redirect('kategori');
		} else {
			$this->load->view('kategori/create');
		}		
	}

	function edit()
	{
		if (isset($_POST['submit'])) {
			$data = array(
			'id_kategori' => $this->input->post('id_kategori'),
			'nama_kategori' => $this->input->post('nama_kategori'),
			'keterangan' => $this->input->post('keterangan') 
		);
		$update = $this->curl->simple_put($this->API.'/kategori', $data, array(CURLOPT_BUFFERSIZE => 10));
			if ($update) {
				$this->session->set_flashdata('hasil', 'Update Data Berhasil');
			} else {
				$this->session->set_flashdata('hasil', 'Update Data Gagal');
			}
			redirect('kategori');
		} else {
			$params = array('id'=> $this->uri->segment(3));
			$data['dataKategori'] = json_decode($this->curl->simple_get($this->API.'/kategori', $params));
			$this->load->view('kategori/edit',$data);
		}
		
	}

	function delete($id)
	{
		if (empty($id)) {
			redirect('kategori');
		} else {
			$delete = $this->curl->simple_delete($this->API.'/kategori', array('id'=>$id), array(CURLOPT_BUFFERSIZE => 10));
			if ($delete) {
				$this->session->set_flashdata('hasil', 'Delete Data Berhasil');
			} else {
				$this->session->set_flashdata('hasil', 'Delete Data Gagal');
			}
			redirect('kategori');
		}
	}

}

/* End of file Kontak.php */
/* Location: ./application/controllers/Kontak.php */