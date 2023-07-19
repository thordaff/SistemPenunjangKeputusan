<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TambahData extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('AddData');
	}
	public function input()
	{
        $nama = $this->input->post('nama');
        $penghasilan = $this->input->post('penghasilan');
        $statusPerkawinan = $this->input->post('statusPerkawinan');
        $jumlahTanggungan = $this->input->post('jumlahTanggungan');
        $umur = $this->input->post('umur');

        $data = Array 
        (
            'nama' => $nama,
            'penghasilan' => $penghasilan,
            'statusPerkawinan' => $statusPerkawinan,
            'jumlahTanggungan' => $jumlahTanggungan,
            'umur' => $umur,
        );
        $this->AddData->input($data);
        $this->session->set_flashdata('success', 'Data berhasil ditambahkan.');
        redirect('penerima');
	}
}
