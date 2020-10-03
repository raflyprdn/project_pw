<?php 

	class M_admin extends CI_model{

		function ceklogin($select,$table,$where){
			$admin = $this->db
						   ->select($select)
						   ->from($table)
						   ->where($where)
						   ->get()
						   ->row();
			if (!$admin) {
				return false;
			}
			else{
				return $admin;
			}

		}
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
		function getJoin($syarat){
			return $this->db
						->query("SELECT p.*,k.hotel FROM pesanan p INNER JOIN kamar k ON k.id=p.kamar WHERE k.admin = '$syarat' ")
						->result();

		}
	}
 ?>