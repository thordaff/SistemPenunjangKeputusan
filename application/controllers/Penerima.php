<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penerima extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ShowData');
	}
	public function index()
	{
		$data['statusKawin'] = $this->ShowData->ShowStatus();
		$this->load->view('AddData', $data);
	}
}
