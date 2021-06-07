<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Matakuliah extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Matakuliah_model', 'Matakuliah_model');
		$this->load->model('User_model', 'User_model');
		if($this->User_model->isNotAdmin()) redirect(site_url('login'));
	}

	public function index(){
		$data['matakuliah'] = $this->Matakuliah_model->view();
		$this->load->view('admin_views/matakuliah/index', $data);
	}

	public function tambah(){
		if($this->input->post('submit')){
			if($this->Matakuliah_model->validation("save")){
				$this->Matakuliah_model->save();
				redirect('admin/matakuliah');
			}
		}

		$this->load->view('admin_views/matakuliah/form_tambah');
	}
	

	public function ubah($kode_mk){
		if($this->input->post('submit')){
			if($this->Matakuliah_model->validation("update")){
				$this->Matakuliah_model->edit($kode_mk);
				redirect('admin/matakuliah');
			}
		}

		$data['matakuliah'] = $this->Matakuliah_model->view_by($kode_mk);
		$this->load->view('admin_views/matakuliah/form_ubah', $data);
	}

	public function hapus($kode_mk){
	$this->Matakuliah_model->delete($kode_mk);
	redirect('admin/matakuliah');
	}
	
	public function search(){
	$keyword = $this->input->post('keyword'); //Meminta Keyword
	$data['matakuliah']=$this->Matakuliah_model->get_product_keyword($keyword);//Meminta Data melalui Matakuliah_model->get_product_keyword
	$this->load->view('admin_views/matakuliah/search',$data);//Berfungsi untuk menampilkan data di view.php
	}

}


?>
