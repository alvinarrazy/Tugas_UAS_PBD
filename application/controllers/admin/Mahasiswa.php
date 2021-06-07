<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Mahasiswa_model', 'Mahasiswa_model');
		$this->load->model('User_model', 'User_model');
		if($this->User_model->isNotAdmin()) redirect(site_url('login'));
	}

	public function index(){
		$data['mahasiswa'] = $this->Mahasiswa_model->view();
		$this->load->view('admin_views/mahasiswa/index', $data);
	}

	public function tambah(){
		if($this->input->post('submit')){
			if($this->Mahasiswa_model->validation("save")){
				$this->Mahasiswa_model->save();
				redirect('admin/mahasiswa/mahasiswa');
			}
		}

		$this->load->view('admin_views/mahasiswa/form_tambah');
	}
	

	public function ubah($nim){
		if($this->input->post('submit')){
			if($this->Mahasiswa_model->validation("update")){
				$this->Mahasiswa_model->edit($nim);
				redirect('admin/mahasiswa');
			}
		}

		$data['mahasiswa'] = $this->Mahasiswa_model->view_by($nim);
		$this->load->view('admin_views/mahasiswa/form_ubah', $data);
	}

	public function hapus($nim){
	$this->Mahasiswa_model->delete($nim);
	redirect('admin/mahasiswa');
	}
	
	public function search(){
	$keyword = $this->input->post('keyword'); //Meminta Keyword
	$data['mahasiswa']=$this->Mahasiswa_model->get_product_keyword($keyword);//Meminta Data melalui Mahasiswa_model->get_product_keyword
	$this->load->view('admin_views/mahasiswa/search',$data);//Berfungsi untuk menampilkan data di view.php
	}

}


?>
