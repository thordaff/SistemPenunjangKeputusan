<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlgoritmaData extends CI_Model {

    public function Nama()
	{
		$this->db->select('penerima.nama');
        $this->db->order_by('penerima.id', 'ASC');
        return $this->db->get('penerima')->result_array();
	}
	public function Penghasilan()
	{
		$this->db->select('penerima.penghasilan');
        $this->db->order_by('penerima.id', 'ASC');
       return $this->db->get('penerima')->result_array();
	}
    public function statusPerkawinan()
    {
        $this->db->select('penerima.statusPerkawinan');
        $this->db->order_by('penerima.id', 'ASC');
        return $this->db->get('penerima')->result_array();
    }    
    public function Tanggungan()
	{
        $this->db->select('penerima.jumlahTanggungan');
        $this->db->order_by('penerima.id', 'ASC');
        return $this->db->get('penerima')->result_array();
	}
    public function Umur()
	{
        $this->db->select('penerima.umur');
        $this->db->order_by('penerima.id', 'ASC');
        return $this->db->get('penerima')->result_array();
	}
}
