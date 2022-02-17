<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class buku_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function simpan($foto){
		$data = array(
				'judulbuku'	=> $this->input->post('judulbuku'),
				'tahun'		=> $this->input->post('tahun'),
				'kodekategori'=>$this->input->post('kategori'),
				'harga'		=> $this->input->post('harga'),
				'penerbit'	=> $this->input->post('penerbit'),
				'penulis'	=> $this->input->post('penulis'),
				'stok'		=> $this->input->post('stok'),
				'fotocover'	=> $foto['file_name']
			);

		$this->db->insert('buku',$data);

		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function edit($id){
		$data = array(
				'judulbuku'	=> $this->input->post('judulbuku'),
				'tahun'		=> $this->input->post('tahun'),
				'kodekategori'	=> $this->input->post('kategori'),
				'harga'		=> $this->input->post('harga'),
				'penerbit'	=> $this->input->post('penerbit'),
				'penulis'	=> $this->input->post('penulis'),
				'stok'		=> $this->input->post('stok'),
			);

		$this->db->where('kodebuku',$id)->update('buku',$data);

		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}

	}

	public function get_detil_buku($id)
	{
		return $this->db->get_where('buku',array('kodebuku'=>$id));
	}

	public function get_data_buku()
	{
		return $this->db->join('kategori', 'kategori.kodekategori = buku.kodekategori')->get('buku')->result();
	}

	public function delete($id)
	{
		$this->db->where('kodebuku',$id)
				 ->delete('buku');

		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function getKategori()
	{
		return $this->db->get('kategori')->result();
	}

}
