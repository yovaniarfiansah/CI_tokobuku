<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	
	public function cek_user(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$query = $this->db->where('username',$username)
						  ->where('password',$password)
						  ->get('user');

		if($query->num_rows() > 0){
			$user = array_shift($query->result_array());
			$data = array('username' => $username, 'logged_in' => TRUE, 'id' => $user['kodeuser'], 'level' => $user['level']);
			$this->session->set_userdata($data);

			return TRUE;
		} else {
			return FALSE;
		}
	}

}
