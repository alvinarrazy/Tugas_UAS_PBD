<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class M_data extends CI_Model {

	public function view(){
		return $this->db->get('mahasiswa')->result();
	}

	public function view_by($nim){
		$this->db->where('nim', $nim);
		return $this->db->get('mahasiswa')->row();
	}

	public function validation($mode){
		$this->load->library('form_validation');
		if($mode == "save")
			$this->form_validation->set_rules('input_nim', 'NIM', 'required|numeric|max_length[15]');

		$this->form_validation->set_rules('input_nama', 'Nama', 'required|max_length[50]');
		$this->form_validation->set_rules('input_jeniskelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('input_telp', 'Telp', 'required|numeric|max_length[15]');
		$this->form_validation->set_rules('input_alamat', 'Alamat', 'required');

		if($this->form_validation->run())
			return TRUE;
		else
			return FALSE;
	}

		public function save(){
			$data = array(
				"nim" => $this->input->post('input_nim'),
				"nama" => $this->input->post('input_nama'),
				"jenis_kelamin" => $this->input->post('input_jeniskelamin'),
				"telp" => $this->input->post('input_telp'),
				"alamat" => $this->input->post('input_alamat')
			);

			$this->db->insert('mahasiswa', $data);
		}

		public function edit($nim){
			$data = array(
				"nama" => $this->input->post('input_nama'),
				"jenis_kelamin" => $this->input->post('input_jeniskelamin'),
				"telp" => $this->input->post('input_telp'),
				"alamat" => $this->input->post('input_alamat')
			);

			$this->db->where('nim', $nim);
			$this->db->update('mahasiswa', $data);
		}

		public function delete($nim){
			$this->db->where('nim', $nim);
			$this->db->delete('mahasiswa');
		}

		public function get_product_keyword($keyword) //Fungsi untuk meminta keyword yang ingin di cari
		{
			$this->db->select('*');
			$this->db->from('mahasiswa'); //Menyortir melalui database mahasiswa
			$this->db->like('nama',$keyword);//Menyortir menurut Nama
			$this->db->or_like('nim',$keyword);//Menyortir menurut NIM
			$this->db->or_like('jenis_kelamin',$keyword);//Menyortir menurut Jenis Kelamin 
			$this->db->or_like('telp',$keyword);//Menyortir menurut Nomor Telp
			$this->db->or_like('alamat',$keyword);//Menyortir menurut Alamat

			return $this->db->get()->result();//Hasil
		}
		public function doLogin(){
			$post = $this->input->post();
	
			$this->db->where('nama', $post["input_nama"]);
			$user = $this->db->get("mahasiswa")->row();
	

			if($user){
				if($post["input_nim"] == $user->nim){
					return $user->nama;
				}else{
					echo "Kredensial Salah!";
				}

			}else if($post["input_nim"] == "Admin" && $post["input_nama"] == "Admin"){
				return "Admin";
			}
		}
	
	}
?>