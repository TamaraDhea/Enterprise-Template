<?php

class Admin extends CI_Controller {

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
		$data['dataAdmin'] = json_decode($this->curl->simple_get($this->API.'/admin'));
		$this->load->view('admin/list', $data);
	}

	function create()
	{
		if (isset($_POST['submit'])) {
			$data = array(
			'id_admin' => $this->input->post('id_admin'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'email' => $this->input->post('email'), 
			'alamat' => $this->input->post('alamat')
		);
		$insert = $this->curl->simple_post($this->API.'/admin', $data, array(CURLOPT_BUFFERSIZE => 10));
			if ($insert) {
				$this->session->set_flashdata('hasil', 'Insert Data Berhasil');
			} else {
				$this->session->flashdata('hasil', 'Insert Data Gagal');
			}
			redirect('admin');
		} else {
			$this->load->view('admin/create');
		}		
	}

	function edit()
	{
		if (isset($_POST['submit'])) {
			$data = array(
			'id_admin' => $this->input->post('id_admin'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'email' => $this->input->post('email'), 
			'alamat' => $this->input->post('alamat')
		);
		$update = $this->curl->simple_put($this->API.'/admin', $data, array(CURLOPT_BUFFERSIZE => 10));
			if ($update) {
				$this->session->set_flashdata('hasil', 'Update Data Berhasil');
			} else {
				$this->session->set_flashdata('hasil', 'Update Data Gagal');
			}
			redirect('admin');
		} else {
			$params = array('id'=> $this->uri->segment(3));
			$data['dataAdmin'] = json_decode($this->curl->simple_get($this->API.'/admin', $params));
			$this->load->view('admin/edit',$data);
		}
		
	}

	function delete($id)
	{
		if (empty($id)) {
			redirect('admin');
		} else {
			$delete = $this->curl->simple_delete($this->API.'/admin', array('id'=>$id), array(CURLOPT_BUFFERSIZE => 10));
			if ($delete) {
				$this->session->set_flashdata('hasil', 'Delete Data Berhasil');
			} else {
				$this->session->set_flashdata('hasil', 'Delete Data Gagal');
			}
			redirect('admin');
		}
	}

}

/* End of file Kontak.php */
/* Location: ./application/controllers/Kontak.php */