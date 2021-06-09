<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class KRS extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('AmbilMk_model', 'AmbilMk_model');
		$this->load->model('User_model', 'User_model');
		if($this->User_model->isNotLogin()) redirect(site_url('login'));
	}

	public function index(){
		$data['matakuliah_diambil_mahasiswa'] = $this->AmbilMk_model->view();
		$this->load->view('mahasiswa_views/index', $data);
	}

}


?>
