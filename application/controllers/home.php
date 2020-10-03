<?php 

	class Home extends CI_controller{
		
		function __construct(){
			parent::__construct();
			if (!$this->session->userdata('username')) {
				redirect('login?m=silahkan login terlebih dahulu');
			}
		}

		function index(){
			$this->load->view('v_home');
		}
	}


 ?>