<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Matakuliah_model extends CI_Model {

	public function view(){
		return $this->db->get('matakuliah')->result();
	}
	
	public function view_by($kode_mk){
		$this->db->where('kode_mk', $kode_mk);
		return $this->db->get('matakuliah')->row();
	}

	public function validation($mode){
		$this->load->library('form_validation');
		if($mode == "save")
			$this->form_validation->set_rules('input_kodeMk', 'Kode MK', 'required|max_length[10]');

		$this->form_validation->set_rules('input_namaMk', 'Nama MK', 'required|max_length[20]');
		$this->form_validation->set_rules('input_sksMk', 'SKS MK', 'required|numeric|max_length[10]');
		$this->form_validation->set_rules('input_semesterMk', 'Semester MK', 'required|numeric|max_length[10]');

		if($this->form_validation->run())
			return TRUE;
		else
			return FALSE;
	}

		public function save(){
			$data = array(
				"kode_mk" => $this->input->post('input_kodeMk'),
				"nama_mk" => $this->input->post('input_namaMk'),
				"sks_mk" => $this->input->post('input_sksMk'),
				"semester_mk" => $this->input->post('input_semesterMk')
			);

			$this->db->insert('matakuliah', $data);
		}

		public function edit($kode_mk){
			$data = array(
				"kode_mk" => $this->input->post('input_kodeMk'),
				"nama_mk" => $this->input->post('input_namaMk'),
				"sks_mk" => $this->input->post('input_sksMk'),
				"semester_mk" => $this->input->post('input_semesterMk')
			);

			$this->db->where('kode_mk', $kode_mk);
			$this->db->update('matakuliah', $data);
		}

		public function delete($kode_mk){
			$this->db->where('kode_mk', $kode_mk);
			$this->db->delete('matakuliah');
		}

		public function get_product_keyword($keyword) //Fungsi untuk meminta keyword yang ingin di cari
		{
			$this->db->select('*');
			$this->db->from('matakuliah'); 
			$this->db->like('nama_mk',$keyword);
			$this->db->or_like('kode_mk',$keyword);
			$this->db->or_like('sks_mk',$keyword);
			$this->db->or_like('semester_mk',$keyword);

			return $this->db->get()->result();//Hasil
		}	
		
	}
?>