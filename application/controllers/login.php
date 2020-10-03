<?php 
	
	/**
	 * 
	 */
	class Login extends CI_controller
	{
		function __construct(){
			parent :: __construct();
			$this->load->model('M_user','crud');
			$this->load->model('M_admin','crudadmin');
		}
		function index(){
			$this->load->view('v_login');
		}
		function cek(){
			if (isset($_POST['login'])) {
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$data = array('username'=>$username,'password'=>$password);
				$result = $this->crud->ceklogin('username,password,id','user',$data);
				$resultadmin = $this->crudadmin->ceklogin('username,password,id','admin',$data);
				if ($result) {
					$this->session->set_userdata(array('username'=>$username,'id'=>$result->id));
					redirect('home');
				}
				else if($resultadmin){
					$this->session->set_userdata(array('username'=>$username,'id'=>$resultadmin->id));
					redirect('admin');
				}
				else{
					redirect('login?m=Username atau Password salah');
				}
			}	

		}
		function buatakun(){
			if (isset($_POST['submit'])) {
				$nama = $this->input->post('nama');
				$alamat = $this->input->post('alamat');
				$date = $this->input->post('date');
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$data = array(	
								'nama'=>$nama,
								'alamat'=>$alamat,
								'tgl_lahir'=>$date,
								'username'=>$username,
								'password'=>$password);
				$result = $this->crud->insert('user',$data);
				if ($result) {
					redirect('login?m=berhasil buat akun');
				}
			}
			$this->load->view('v_buatakun');
		}
		function buatakunadmin(){
			if (isset($_POST['submit'])) {
				$nama = $this->input->post('nama');
				$alamat = $this->input->post('alamat');
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$data = array(	
								'nama'=>$nama,
								'alamat'=>$alamat,
								'username'=>$username,
								'password'=>$password);
				$result = $this->crud->insert('admin',$data);
				if ($result) {
					redirect('login?m=berhasil buat akun');
				}
			}
			$this->load->view('v_buatakunadmin');
		}
		function out(){
			$this->session->unset_userdata('username','id');
			redirect('login?m=berhasil log out');
		}
		
	}


 ?>