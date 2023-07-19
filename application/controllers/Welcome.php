<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ShowData');
	}
	public function index()
	{
		$data['statusKawin'] = $this->ShowData->ShowStatus();
		$this->load->view('welcome_message', $data);
	}
}
