<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('user_model');
	}

	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){
			redirect(base_url('index.php/user/dashboard'));
		} else {
			$this->load->view('login');
		}

	}

	public function dashboard(){
		if($this->session->userdata('logged_in') == TRUE){
			$data['main_view'] = 'dashboard';
			$this->load->view('template', $data);
		} else {
			redirect('user');
		}
	}

	public function masuk()
	{
		if($this->user_model->cek_user() == TRUE)
		{
			redirect(base_url('index.php/user/dashboard'));
		} 
		else 
		{
			$data['notif'] = 'login gagal';
			$this->load->view('login', $data);
		}
	}

	public function logout(){
		$data = array('username' => '', 'logged_in' => FALSE);
		$this->session->sess_destroy();
		$this->load->view('login');
	}
}
