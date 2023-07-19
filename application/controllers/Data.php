<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ShowData');
		$this->load->model('DeleteData');
	}
	public function index()
	{
		$data['data'] = $this->ShowData->ShowPenerima();
		$this->load->view('data', $data);
	}
	public function deleteAll() {
        $this->DeleteData->deleteAllPenerima();
		$this->session->set_flashdata('success', 'Data berhasil dihapuskan.');
        redirect('data');
    }
}
