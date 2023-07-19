<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ranking extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('AlgoritmaData');
	}
	
	function index()
	{   
		// Variables
		$C1 = '0.3';
		$C2 = '0.2';
		$C3 = '0.3';
		$C4 = '0.2';

		// Nama
		$data['nama'] = $this->AlgoritmaData->Nama();
		
		$data['kumpulan'] = array();

		// Penghasilan
		$data['penghasilan'] = $this->AlgoritmaData->Penghasilan();
		$data['minimal_penghasilan'] = min(array_column($data['penghasilan'], 'penghasilan'));
		foreach ($data['penghasilan'] as $penghasilan) {
			$hasilPenghasilan = ($data['minimal_penghasilan'] / $penghasilan['penghasilan']) * $C1;
			$data['hasilPenghasilan'][] = number_format($hasilPenghasilan, 2);
		}
		
		// Status Perkawinan
		$data['status'] = $this->AlgoritmaData->statusPerkawinan();
		$data['minimal_status'] = min(array_column($data['status'], 'statusPerkawinan'));
		foreach ($data['status'] as $status) {
			$hasilStatus = ($data['minimal_status'] / $status['statusPerkawinan']) * $C2;
			$data['hasilStatus'][] = number_format($hasilStatus, 2);
		}
		
		// Tanggungan
		$data['tanggungan'] = $this->AlgoritmaData->Tanggungan();
		$data['maximal_tanggungan'] = max(array_column($data['tanggungan'], 'jumlahTanggungan'));
		foreach ($data['tanggungan'] as $tanggungan) {
			$hasilTanggungan = ($tanggungan['jumlahTanggungan'] / $data['maximal_tanggungan']) * $C3;
			$data['hasilTanggungan'][] = number_format($hasilTanggungan, 2);
		}
		
		// Umur
		$data['umur'] = $this->AlgoritmaData->Umur();
		$data['maximal_umur'] = max(array_column($data['umur'], 'umur'));
		foreach ($data['umur'] as $umur) {
			$hasilUmur = ($umur['umur'] / $data['maximal_umur']) * $C4;
			$data['hasilUmur'][] = number_format($hasilUmur, 2);
		}
		
		for ($i = 0; $i < count($data['penghasilan']); $i++) {
			$hasilPenghasilan = $data['hasilPenghasilan'][$i];
			$hasilStatus = $data['hasilStatus'][$i];
			$hasilTanggungan = $data['hasilTanggungan'][$i];
			$hasilUmur = $data['hasilUmur'][$i];
		
			$total = $hasilPenghasilan + $hasilStatus + $hasilTanggungan + $hasilUmur;
		
			$row = array(
				'hasilPenghasilan' => $hasilPenghasilan,
				'hasilStatus' => $hasilStatus,
				'hasilTanggungan' => $hasilTanggungan,
				'hasilUmur' => $hasilUmur,
				'total' => $total
			);
			$data['kumpulan'][] = $row;
		
			// Mengakumulasi hasil penjumlahan ke samping kanan
			if (isset($data['totalSamping'][$i])) {
				$data['totalSamping'][$i] += $total;
			} else {
				$data['totalSamping'][$i] = $total;
			}
		}		

		$this->load->view('ranking', $data);
	}
}
