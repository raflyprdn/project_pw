<?php 

	class User extends CI_controller{

		function __construct(){
			parent :: __construct();
			$this->load->model('M_user','crud');
			if (!$this->session->userdata('username')) {
				redirect('login?m=silahkan login terlebih dahulu');
			}
		}

		function sewakamar(){
			
			$hotel = $_GET['idhotel'];
			$where = array('keterangan'=>'tersedia','hotel'=>$hotel);
			$result['data'] = $this->crud->ambil('*','kamar',$where);
			$this->load->view('v_sewakamar',$result);
		}
		function hotelsewa(){
			$result['data'] = $this->crud->ambil('*','hotel');
			$this->load->view('v_hotelsewa',$result);
		}
		function pesan(){
			if (isset($_POST['submit'])) {
				$kamar = $this->input->post('idkamar');
				$user = $this->session->userdata('id');
				$keterangan = 'belum di konfirmasi';
				$in = $this->input->post('in');
				$out = $this->input->post('out');
				$data = array('id'=>'','user'=>$user,'kamar'=>$kamar,'keterangan'=>$keterangan,'checkin'=>$in,'checkout'=>$out);
				$result = $this->crud->insert('pesanan',$data);
				if ($result) {
					redirect('user/hotelsewa?m=data berhasil diinput');
				}
				else{
					redirect('user/hotelsewa?m=data gagal diinput');
				}
			}
			$idkamar['idkamar'] = $_GET['idkamar'];
			$this->load->view('v_pesan',$idkamar);
		}
		function lihathotel(){
			$where = array('id'=>$_GET['id']);
			$result['data'] = $this->crud->ambil('*','hotel',$where);
			$this->load->view('v_lihathoteluser',$result);

		}
		function lihatpesanan(){
			$where = array('user' => $this->session->userdata('id'));
			$data['data'] = $this->crud->ambil('*','pesanan',$where);
			$this->load->view('v_lihatpesanan',$data);
		}
		function editbiodata(){
			if (isset($_POST['edit'])) {
				$nama = $this->input->post('nama');
				$alamat = $this->input->post('alamat');
				$date = $this->input->post('tgl_lahir');
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$where = array('id'=>$this->session->userdata('id'));
				$data = array(	
								'nama'=>$nama,
								'alamat'=>$alamat,
								'tgl_lahir'=>$date,
								'username'=>$username,
								'password'=>$password);
				$result = $this->crud->update('user',$data,$where);
				if ($result) {
					redirect('home?m=berhasil update user');
				}
				else
					redirect('home?m=gagal update user');
			}
			$id = $this->session->userdata('id');
			$where = array('id'=>$id);
			$data['data'] = $this->crud->ambil('*','user',$where);
			$this->load->view('v_editbiodata',$data);
		}
	}


 ?>