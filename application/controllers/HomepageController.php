<?php
	
	class HomepageController extends CI_Controller{

		public function index() {
			$this->load->view('homepage/landing');
		}

		public function home(){
			$this->load->view('homepage/header');
		
		}
		
	}


?>