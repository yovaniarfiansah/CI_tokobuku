<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class buku extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('user_model');
		$this->load->model('buku_model');
	}

	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$data['buku'] = $this->buku_model->get_data_buku();
			$data['kategori'] = $this->buku_model->getKategori();
			$data['main_view'] = 'buku_view';
			$this->load->view('template', $data);
		} else {
			redirect('user');
		}
		//$this->output->enable_profiler(TRUE);
	}

	public function simpan()
	{
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']  = '2000';
			
			$this->load->library('upload', $config);
			
			if ($this->upload->do_upload('fotocover')){
				if ($this->buku_model->simpan($this->upload->data()) == TRUE) {
					$data['buku'] = $this->buku_model->get_data_buku();
					$data['main_view'] = 'buku_view';
					$this->session->set_flashdata('notif', 'Tambah buku berhasil');
					$this->load->view('template', $data);
				}else{
					$data['buku'] = $this->buku_model->get_data_buku();
					$data['main_view'] = 'buku_view';
					$this->session->set_flashdata('notif', 'Tambah buku gagal');
					$this->load->view('template', $data);
				}
			}
			else{
				$data['buku'] = $this->buku_model->get_data_buku();
				$data['main_view'] = 'buku_view';
				$data['notif'] = $this->upload->display_errors();
				$this->load->view('template', $data);
			}
	}

	public function hapus($id)
	{
		if($this->buku_model->delete($id) == TRUE){
			$this->session->set_flashdata('notif', 'Buku Berhasil Dihapus');
			redirect('buku');
		} else {
			$this->session->set_flashdata('notif', 'Buku Gagal Dihapus');
			redirect('buku');
		}
	}

	public function edit($id)
	{
		if($this->buku_model->edit($id) == TRUE){
			$this->session->set_flashdata('notif', 'Edit data berhasil');
			redirect('buku');
		} else {
			$this->session->set_flashdata('notif', 'Edit data berhasil');
            redirect('buku');
		}
	}

	public function detil($id)
	{
		$data['detil'] = $this->buku_model->get_detil_buku($id)->result_object();
	}

}
