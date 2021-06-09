<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class AmbilMk_model extends CI_Model {

	public function view(){
		return $this->db->get('matakuliah_diambil_mahasiswa')->result();
	}

	public function viewMatkulOptions(){
		return $this->db->get('matakuliah')->result();
	}
	
	public function view_by($nim){
		$this->db->where('nim', $nim);
		return $this->db->get('matakuliah_diambil_mahasiswa')->row();
	}

	public function validation($mode){
		$this->load->library('form_validation');
		if($mode == "save")
			$this->form_validation->set_rules('input_kodeMk', 'Kode MK', 'required|max_length[10]');

		if($this->form_validation->run())
			return TRUE;
		else
			return FALSE;
	}

		public function save($nim){
			$data = array(
				"kode_mk" => $this->input->post('input_kodeMk'),
				"nim_mahasiswa" => $nim
			);
			$this->db->insert('mk_diambil', $data);
		}

		public function delete($kode_mk){
			$this->db->where('kode_mk', $kode_mk);
			$this->db->delete('mk_diambil');
		}
	}
?>