<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model {

        public function view(){
		        return $this->db->get('mahasiswa')->result();
	    }

		public function doLogin(){
            $this->load->library('session');
			$post = $this->input->post();
	
			$this->db->where('nama', $post["input_nama"]);
			$user = $this->db->get("mahasiswa")->row();
	

			if($user){
				if($post["input_nim"] == $user->nim){
					$this->session->set_userdata(['user_logged' => $user->nim]);
					return $user->nama;
				}else{
					echo "Kredensial Salah!";
				}

			}else if($post["input_nim"] == "Admin" && $post["input_nama"] == "Admin"){
				$this->session->set_userdata(['user_logged' => 'Admin']);
				return "Admin";
			}
		}

        public function isNotLogin(){
            return $this->session->userdata('user_logged') === null;
        }

		public function isNotAdmin(){
            return $this->session->userdata('user_logged') !== 'Admin';
        }

		public function getUserData(){
            return $this->session->userdata('user_logged');
        }

		public function getUserName(){
			$this->db->from('mahasiswa');
			$this->db->where('nim', $this->session->userdata('user_logged'));	
            return $this->db->get()->result();
        }
	
	}
?>