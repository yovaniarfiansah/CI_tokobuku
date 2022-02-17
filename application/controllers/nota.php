<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class nota extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('nota_model','nota');
	}
	public function index()
	{
		
	}
	public function cetak($id)
	{
		$data['tampil_nota']=$this->nota->getDataNota($id)->row();
		$data['detail_nota']=$this->nota->getDataNota($id)->result();
		$data['tampil_transaksi']=$this->nota->getDataTransaksi($id);
		$this->load->view('nota_view', $data);
	}

}
