<?php 

	class M_user extends CI_model{

		function insert($table,$value){
			return $this->db
						->insert($table,$value);
		}
		function ambil($select,$table,$where = false){
			if ($where) {
				return $this->db
							->select($select)
							->from($table)
							->where($where)
							->get()
							->result();
			}
			else{
				return $this->db
							->select($select)
							->get($table)
							->result();
			}

		}
		function ceklogin($select,$table,$where){
			$user = $this->db
							->select($select)
							->from($table)
							->where($where)
							->get()
							->row();
			if(!$user){
				return false;
			}
			else
				return $user;

		}
		function delete($table,$where){
			return $this->db
						->where($where)
						->delete($table);
		}
		function update($table,$value,$where){
			return $this->db
						->where($where)
						->update($table,$value);
		}


	}

 ?>