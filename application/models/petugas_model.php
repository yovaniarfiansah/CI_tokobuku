<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class petugas_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function get_data_petugas(){
		return $this->db->order_by('kodeuser','ASC')->get('user')->result();
	}

	public function simpan()
	{
		$data = array(
				'username'		=> $this->input->post('username'),
				'password'		=> $this->input->post('password'),
				'namauser'		=> $this->input->post('namauser'),
				'level'			=> $this->input->post('level')
			);

		$this->db->insert('user',$data);

		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function edit($id)
	{
		$data = array(
				'username'		=> $this->input->post('username'),
				'password'		=> $this->input->post('password'),
				'namauser'		=> $this->input->post('namauser'),
				'level'			=> $this->input->post('level')
			);

		$this->db->where('kodeuser',$id)->update('user',$data);

		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function delete($id)
	{
		$this->db->where('kodeuser',$id)
				 ->delete('user');

		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_detil_petugas($id)
	{
		return $this->db->get_where('user',array('kodeuser'=>$id));
	}

}