<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class petugas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('petugas_model');
	}

	public function index()
	{
		$data['petugas'] = $this->petugas_model->get_data_petugas();
		$data['main_view'] = 'petugas_view';
		$this->load->view('template', $data);	
	}

	public function simpan()
	{
		if($this->petugas_model->simpan() == TRUE){
			$this->session->set_flashdata('notif1', 'Petugas Berhasil Ditambahkan');
            redirect('petugas',$data);
		} else {
			$this->session->set_flashdata('notif1', 'Petugas Berhasil Ditambahkan');
            redirect('petugas',$data);
		}
	}

	public function hapus($id)
	{
		if($this->petugas_model->delete($id) == TRUE){
			$this->session->set_flashdata('notif', 'Petugas Berhasil Dihapus');
			redirect('petugas');
		} else {
			$this->session->set_flashdata('notif', 'Petugas Gagal Dihapus');
			redirect('petugas');
		}
	}

	public function edit($id)
	{
		if($this->petugas_model->edit($id) == TRUE){
			$this->session->set_flashdata('notif', 'Edit data berhasil');
			redirect('petugas');
		} else {
			$this->session->set_flashdata('notif', 'Edit data berhasil');
            redirect('petugas');
		}
	}

	public function detil($id)
	{
		$data['detil'] = $this->petugas_model->get_detil_petugas($id)->result_object();
	}

}
