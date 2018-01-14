<?php

class Bid extends CI_Controller {

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
		$data['dataBid'] = json_decode($this->curl->simple_get($this->API.'/bid'));
		$this->load->view('bid/list', $data);
	}

	function create()
	{
		if (isset($_POST['submit'])) {
			$data = array(
			'id_bid' => $this->input->post('id_bid'),
			'up_bid' => $this->input->post('up_bid'),
			'fk_pengguna' => $this->input->post('fk_pengguna'),
			'tanggal' => $this->input->post('tanggal'), 
			'barang' => $this->input->post('barang')
		);
		$insert = $this->curl->simple_post($this->API.'/bid', $data, array(CURLOPT_BUFFERSIZE => 10));
			if ($insert) {
				$this->session->set_flashdata('hasil', 'Insert Data Berhasil');
			} else {
				$this->session->flashdata('hasil', 'Insert Data Gagal');
			}
			redirect('bid');
		} else {
			$this->load->view('bid/create');
		}		
	}

	function edit()
	{
		if (isset($_POST['submit'])) {
			$data = array(
			'id_bid' => $this->input->post('id_bid'),
			'up_bid' => $this->input->post('up_bid'),
			'fk_pengguna' => $this->input->post('fk_pengguna'),
			'tanggal' => $this->input->post('tanggal'), 
			'barang' => $this->input->post('barang')
		);
		$update = $this->curl->simple_put($this->API.'/bid', $data, array(CURLOPT_BUFFERSIZE => 10));
			if ($update) {
				$this->session->set_flashdata('hasil', 'Update Data Berhasil');
			} else {
				$this->session->set_flashdata('hasil', 'Update Data Gagal');
			}
			redirect('bid');
		} else {
			$params = array('id'=> $this->uri->segment(3));
			$data['dataBid'] = json_decode($this->curl->simple_get($this->API.'/bid', $params));
			$this->load->view('bid/edit',$data);
		}
		
	}

	function delete($id)
	{
		if (empty($id)) {
			redirect('bid');
		} else {
			$delete = $this->curl->simple_delete($this->API.'/bid', array('id'=>$id), array(CURLOPT_BUFFERSIZE => 10));
			if ($delete) {
				$this->session->set_flashdata('hasil', 'Delete Data Berhasil');
			} else {
				$this->session->set_flashdata('hasil', 'Delete Data Gagal');
			}
			redirect('bid');
		}
	}

}

/* End of file Kontak.php */
/* Location: ./application/controllers/Kontak.php */