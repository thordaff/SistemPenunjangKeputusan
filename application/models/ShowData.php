<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShowData extends CI_Model {

	public function ShowPenerima()
	{
		$this->db->join('status', 'status.id = penerima.statusPerkawinan');
		return $this->db->get('penerima')->result_array();
	}
	public function ShowStatus()
	{
		return $this->db->get('status')->result_array();
	}
}
