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
		$data['matakuliah_diambil_mahasiswa'] = $this->AmbilMk_model->view($this->session->userdata('user_logged'));
		$this->load->view('mahasiswa_views/index', $data);
	}

	public function tambah(){
		$this->load->library('session');
		if($this->input->post('submit')){
			if(!$this->AmbilMk_model->checkSameMatkul($this->input->post('input_kodeMk') ,$this->session->userdata('user_logged'))){
				if($this->AmbilMk_model->validation("save")){
					$this->AmbilMk_model->save($this->session->userdata('user_logged'));
					redirect('mahasiswa/KRS');
				}
			}else{
				echo "Tidak bisa memasukkan matkul yang sama";
			}
		}
		$data['matakuliah'] = $this->AmbilMk_model->viewMatkulOptions();
		$this->load->view('mahasiswa_views/form_tambah', $data);
	}

	public function hapus($kode_mk){
		$this->AmbilMk_model->delete($kode_mk);
		redirect('mahasiswa/KRS');
		}

}


?>
