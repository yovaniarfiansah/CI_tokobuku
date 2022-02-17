<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kategori extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->load->model('kategori_model','kat');
	}
	public function index()
	{
		$data['tampil_kategori']=$this->kat->tampil_kat();
		$data['main_view']="kategori_view";
		$data['judul']="Kategori";
		$this->load->view('template', $data);
	}
	public function edit_kategori($id)
	{
		$data=$this->kat->detail($id);
		echo json_encode($data);
	}
	public function tambah()
	{
			if($this->kat->simpan_kat()){
				$this->session->set_flashdata('notif', 'Menambah Kategori');
				redirect('kategori');
			} else {
				$this->session->set_flashdata('notif', 'Gagal Menambah Kategori');
				redirect('kategori');
			}
	}
	public function hapus($id='')
	{
		if($this->kat->hapus_kat($id)){
			$this->session->set_flashdata('notif', 'Sukses Hapus Kategori');
			redirect('kategori');
		} else {
			$this->session->set_flashdata('notif', 'Gagal Hapus Kategori');
			redirect('kategori');	
		}
	}
	public function kategori_update()
	{
			if($this->kat->edit_kat()){
			$this->session->set_flashdata('notif', 'Sukses Edit Kategori');
			redirect('kategori');
		} else {
			$this->session->set_flashdata('notif', 'Gagal Hapus Kategori');
			redirect('kategori');	
		}
	}
}
