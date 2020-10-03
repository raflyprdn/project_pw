<?php 

	class member extends CI_controller{
		function __construct(){
			parent :: __construct();
			$this->load->model('M_admin','crud');
			if (!$this->session->userdata('username')) {
				redirect('login?m=silahkan login terlebih dahulu');
			}
		}
		function index(){
			$this->load->view('v_member');
		}
		function daftarmember(){
			if (isset($_POST['submit'])) {
				$nama = $this->input->post('nama');
				$tipe = $this->input->post('tipe');
				$masa_aktif = $this->input->post('masa_aktif');
				$data = array(	
								'nama'=>$nama,
								'tipe'=>$tipe,
								'masa_aktif'=>$masa_aktif);
				$result = $this->crud->insert('member',$data);
				if ($result) {
					redirect('member/daftarmember?m=berhasil input member');
				}
			}
			$this->load->view('v_daftarmember');
		}
        function lihatmember(){
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$where = array('id'=>$id);
				$result = $this->crud->delete('member',$where);
				if ($result) {
					redirect('member/lihatmember?m=data berhasil dihapus');
				}
				else{
					redirect('member/lihatmember?m=data gagal dihapus');
				}
			}
			$data['result'] = $this->crud->ambil('*','member');
			$this->load->view('v_lihatmember',$data);
		}
		function editmember(){
			if (isset($_POST['edit'])) {
				$nama = $this->input->post('nama');
				$tipe = $this->input->post('tipe');
				$masa_aktif = $this->input->post('masa_aktif');
				$where = array('id'=>$this->input->post('id'));
				$data = array(	
								'nama'=>$nama,
								'tipe'=>$tipe,
								'masa_aktif'=>$masa_aktif);
				$result = $this->crud->update('member',$data,$where);
				if ($result) {
					redirect('member/lihatmember?m=berhasil update member');
				}
				else
					redirect('member/lihatmember?m=gagal update member');
			}
			$id = $_GET['id'];
			$where = array('id'=>$id);
			$data['data'] = $this->crud->ambil('*','member',$where);
			$this->load->view('v_editmember',$data);
        }
    }
?>