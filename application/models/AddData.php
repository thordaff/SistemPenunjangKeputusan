<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddData extends CI_Model {

	public function input($data)
	{
		$this->db->insert('penerima',$data);
	}
}
