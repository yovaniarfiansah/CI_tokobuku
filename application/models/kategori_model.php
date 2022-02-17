<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kategori_model extends CI_Model {

	public function tampil_kat()
		{
			$tm_kategori=$this->db
					  ->get('kategori')->result();
		return $tm_kategori;
		}	
	public function detail($a)
		{
			return $this->db->where('kodekategori',$a)
						  ->get('kategori')
						  ->row();
		}
	public function simpan_kat(){
		$object=array(
			'kodekategori'=>$this->input->post('kodekategori'),
			'namakategori'=>$this->input->post('namakategori'),
		);
		return $this->db->insert('kategori', $object);
	}
	public function hapus_kat($id='')
	{
		return $this->db->where('kodekategori',$id)->delete('kategori');
	}
	public function edit_kat()
	{
		$object=array(
			'namakategori'=>$this->input->post('namakategori')
		);
		return $this->db->where('kodekategori',$this->input->post('id_kategori_lama'))->update('kategori', $object);
	}

}