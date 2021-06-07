<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Mahasiswa_model', 'Mahasiswa_model');
		$this->load->model('User_model', 'User_model');
		if($this->User_model->isNotLogin()) redirect(site_url('login'));
	}

	public function index(){
		$data['mahasiswa'] = $this->Mahasiswa_model->view();
		$this->load->view('mahasiswa_views/form_tambah', $data);
	}

}


?>
