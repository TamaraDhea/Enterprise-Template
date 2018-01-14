<?php

class Pengguna extends CI_Controller {

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
		$data['dataPengguna'] = json_decode($this->curl->simple_get($this->API.'/pengguna'));
		$this->load->view('pengguna/list', $data);
	}

	function create()
	{
		if (isset($_POST['submit'])) {
			$data = array(
			'id_pengguna' => $this->input->post('id_pengguna'),
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'alamat' => $this->input->post('alamat')
		);
		$insert = $this->curl->simple_post($this->API.'/pengguna', $data, array(CURLOPT_BUFFERSIZE => 10));
			if ($insert) {
				$this->session->set_flashdata('hasil', 'Insert Data Berhasil');
			} else {
				$this->session->flashdata('hasil', 'Insert Data Gagal');
			}
			redirect('pengguna');
		} else {
			$this->load->view('pengguna/create');
		}		
	}

	function edit()
	{
		if (isset($_POST['submit'])) {
			$data = array(
			'id_pengguna' => $this->input->post('id_pengguna'),
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'alamat' => $this->input->post('alamat')
		);
		$update = $this->curl->simple_put($this->API.'/pengguna', $data, array(CURLOPT_BUFFERSIZE => 10));
			if ($update) {
				$this->session->set_flashdata('hasil', 'Update Data Berhasil');
			} else {
				$this->session->set_flashdata('hasil', 'Update Data Gagal');
			}
			redirect('pengguna');
		} else {
			$params = array('id'=> $this->uri->segment(3));
			$data['dataBid'] = json_decode($this->curl->simple_get($this->API.'/pengguna', $params));
			$this->load->view('pengguna/edit',$data);
		}
		
	}

	function delete($id)
	{
		if (empty($id)) {
			redirect('pengguna');
		} else {
			$delete = $this->curl->simple_delete($this->API.'/bid', array('id'=>$id), array(CURLOPT_BUFFERSIZE => 10));
			if ($delete) {
				$this->session->set_flashdata('hasil', 'Delete Data Berhasil');
			} else {
				$this->session->set_flashdata('hasil', 'Delete Data Gagal');
			}
			redirect('pengguna');
		}
	}

}

/* End of file Kontak.php */
/* Location: ./application/controllers/Kontak.php */