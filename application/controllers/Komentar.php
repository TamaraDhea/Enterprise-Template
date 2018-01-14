<?php

class Komentar extends CI_Controller {

	var $API = "";

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->API="http://localhost/Lelangbang/lelang_server/index.php";
		$this->load->library('session');
		$this->load->library('curl');
		$this->load->helper('form');
		$this->load->helper('url');
	}

	function index()
	{
		$data['dataKomentar'] = json_decode($this->curl->simple_get($this->API.'/komentar'));
		$this->load->view('komentar/list', $data);
	}

	function create()
	{
		if (isset($_POST['submit'])) {
			$data = array(
			'id_komentar' => $this->input->post('id_komentar'),
			'id_pelelang' => $this->input->post('id_pelelang'),
			'fkk_barang' => $this->input->post('fkk_barang'),
			'komentar' => $this->input->post('komentar')
		);
		$insert = $this->curl->simple_post($this->API.'/komentar', $data, array(CURLOPT_BUFFERSIZE => 10));
			if ($insert) {
				$this->session->set_flashdata('hasil', 'Insert Data Berhasil');
			} else {
				$this->session->flashdata('hasil', 'Insert Data Gagal');
			}
			redirect('komentar');
		} else {
			$this->load->view('komentar/create');
		}		
	}

	function edit()
	{
		if (isset($_POST['submit'])) {
			$data = array(
			'id_komentar' => $this->input->post('id_komentar'),
			'id_pelelang' => $this->input->post('id_pelelang'),
			'fkk_barang' => $this->input->post('fkk_barang'),
			'komentar' => $this->input->post('komentar')
		);
		$update = $this->curl->simple_put($this->API.'/komentar', $data, array(CURLOPT_BUFFERSIZE => 10));
			if ($update) {
				$this->session->set_flashdata('hasil', 'Update Data Berhasil');
			} else {
				$this->session->set_flashdata('hasil', 'Update Data Gagal');
			}
			redirect('komentar');
		} else {
			$params = array('id'=> $this->uri->segment(3));
			$data['dataBid'] = json_decode($this->curl->simple_get($this->API.'/komentar', $params));
			$this->load->view('komentar/edit',$data);
		}
		
	}

	function delete($id)
	{
		if (empty($id)) {
			redirect('komentar');
		} else {
			$delete = $this->curl->simple_delete($this->API.'/bid', array('id'=>$id), array(CURLOPT_BUFFERSIZE => 10));
			if ($delete) {
				$this->session->set_flashdata('hasil', 'Delete Data Berhasil');
			} else {
				$this->session->set_flashdata('hasil', 'Delete Data Gagal');
			}
			redirect('komentar');
		}
	}

}

/* End of file Kontak.php */
/* Location: ./application/controllers/Kontak.php */