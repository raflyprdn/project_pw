<?php 


	class Admin extends CI_controller{
		function __construct(){
			parent :: __construct();
			$this->load->model('M_admin','crud');
			if (!$this->session->userdata('username')) {
				redirect('login?m=silahkan login terlebih dahulu');
			}
		}
		function index(){
			$this->load->view('v_admin');
		}
		function inputhotel(){
			if (isset($_POST['submit'])) {
				$nama = $this->input->post('nama');
				$alamat = $this->input->post('alamat');
				$admin = $this->input->post('id');
				$notelp = $this->input->post('notelp');
				$data = array(	
								'nama'=>$nama,
								'alamat'=>$alamat,
								'notelp'=>$notelp,
								'admin'=> $this->session->userdata('id'));
				$result = $this->crud->insert('hotel',$data);
				if ($result) {
					redirect('admin?m=berhasil input hotel');
				}
			}
			$this->load->view('v_inputhotel');
		}
		function lihathotel(){
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$data = array('id'=>$id);
				$result = $this->crud->delete('hotel',$data);
				if ($result) {
					redirect('admin/lihathotel?m=data berhasil dihapus');
				}
				else{
					redirect('admin/lihathotel?m=data gagal dihapus');
				}
			}
			$where = array('admin'=> $this->session->userdata('id'));
			$data['result'] = $this->crud->ambil('*','hotel',$where);
			$this->load->view('v_lihathotel',$data);
		}
		function edithotel(){
			if (isset($_POST['edit'])) {
				$nama = $this->input->post('nama');
				$alamat = $this->input->post('alamat');
				$notelp = $this->input->post('notelp');
				$where = array('id'=>$this->input->post('id'));
				$data = array(	
								'nama'=>$nama,
								'alamat'=>$alamat,
								'notelp'=>$notelp);
				$result = $this->crud->update('hotel',$data,$where);
				if ($result) {
					redirect('admin/lihathotel?m=berhasil update hotel');
				}
				else
					redirect('admin/lihathotel?m=gagal update hotel');
			}
			$id = $_GET['id'];
			$where = array('id'=>$id);
			$data['data'] = $this->crud->ambil('*','hotel',$where);
			$this->load->view('v_edithotel',$data);
		}
		function lihatkamar(){
			if (isset($_GET['hapus'])) {
				$id = $_GET['hapus'];
				$data = array('id'=>$id);
				$result = $this->crud->delete('kamar',$data);
				if ($result) {
					redirect('admin/lihathotel?m=data kamar berhasil dihapus');
				}
				else{
					redirect('admin/lihathotel?m=data kamar gagal dihapus');
				}
			}
			$hotel = $_GET['id'];
			$where = array('hotel'=>$hotel);
			$data['hotel'] = $hotel;
			$data['data'] = $this->crud->ambil('*','kamar',$where);
			$this->load->view('v_lihatkamar',$data);
		}
		function tambahkamar(){
			if (isset($_POST['submit'])) {
				$nama = $this->input->post('nama');
				$fasilitas = $this->input->post('fasilitas');
				$keterangan = $this->input->post('keterangan');
				$hotel = $this->input->post('hotel');
				$admin = $this->session->userdata('id');
				    $config['upload_path'] 	= './image';    
				    $config['allowed_types'] = 'jpg|png|jpeg';    
				    $config['max_size']  = '2048';    
				    $config['remove_space'] = TRUE;     
				    $this->load->library('upload', $config);
				    if (!$this->upload->do_upload('foto')) {
				    	redirect('admin/lihatkamar?id='.$hotel);
				    }
				    else{
				    	$fotoname = $this->upload->data('file_name');
				    	$data = array('nama'=>$nama,
				    				  'fasilitas'=>$fasilitas,
				    				  'foto'=>$fotoname,
				    				  'keterangan'=>$keterangan,
				    				  'hotel'=>$hotel,
				    				  'admin'=>$admin);
						$this->crud->insert('kamar',$data);
						redirect('admin/lihatkamar?id='.$hotel);
				    }
					
			}
			$hotel['hotel'] = $_GET['id'];
			$this->load->view('v_tambahkamar',$hotel);
		}
		function editkamar(){
			if (isset($_POST['edit'])) {
				$nama = $this->input->post('nama');
				$fasilitas = $this->input->post('fasilitas');
				$keterangan = $this->input->post('keterangan');
				// $config['upload_path'] 	= './image';    
				// $config['allowed_types'] = 'jpg|png|jpeg';    
				// $config['max_size']  = '2048';    
				// $config['remove_space'] = TRUE;     
				// $this->load->library('upload', $config);
				// $this->upload->do_upload('foto');
				// $foto = $this->upload->data('file_name');
				$where = array('id'=>$this->input->post('id'));
				$data = array(	
								'nama'=>$nama,
								'fasilitas'=>$fasilitas,
								// 'foto'=>$foto,
								'keterangan'=>$keterangan);
				$result = $this->crud->update('kamar',$data,$where);
				if ($result) {
					redirect('admin/lihathotel?m=berhasil update kamar');
				}
				else
					redirect('admin/lihathotel?m=gagal update kamar');
			}
			$id = $_GET['id'];
			$where = array('id'=>$id);
			$data['data'] = $this->crud->ambil('*','kamar',$where);
			$this->load->view('v_editkamar',$data);
		}
		function lihatpesanan(){
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$where = array('id'=>$id);
				$value = array('keterangan'=>'accept');
				$result = $this->crud->update('pesanan',$value,$where);
				redirect('admin/lihatpesanan');
			}
			if (isset($_GET['hapus'])) {
				$id = $_GET['hapus'];
				$data = array('id'=>$id);
				$result = $this->crud->delete('pesanan',$data);
				if ($result) {
					redirect('admin/lihatpesanan?m=data pesanan berhasil dihapus');
				}
				else{
					redirect('admin/lihatpesanan?m=data pesanan gagal dihapus');
				}

			}
			$where = $this->session->userdata('id');
			$result['data'] = $this->crud->getJoin($where);
			$this->load->view('v_lihatpesananadmin',$result);
		}

	}
 ?>