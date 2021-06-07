<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('User_model','User_model');
		$this->load->model('Mahasiswa_model','Mahasiswa_model');

		//if($this->User_model->isNotLogin()) $this->load->view('index');
	}

	public function index(){
		$data['mahasiswa'] = $this->User_model->view();
		if($this->input->post('submit')){
			if($this->User_model->doLogin() && $this->User_model->doLogin()!= "Admin"){
				//echo $this->User_model->doLogin();
				redirect('mahasiswa/KRS');
			}else if($this->User_model->doLogin()=="Admin"){
				redirect('admin/mahasiswa');
			}
		}
		$this->load->view('index');
	}

	public function logout()
    {
        // hancurkan semua sesi
        $this->session->sess_destroy();
        redirect(site_url('login'));
    }
}


?>
