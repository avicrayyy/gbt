<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/*
        Controller Details:
            Description: Homepage
            Accessible by anon: Yes
            
	*/
	
	public function index()
	{

		$data = array(
			'isHome'=>true,
			'isLogScreen'=>false
		);

		if($this->session->user){
			redirect('/welcome');
		}

		$this->load->view('_heading');
		$this->load->view('_navigation-out',$data);
		$this->load->view('index');
		$this->load->view('_footer');
		$this->load->view('_scripts');

		
	}
}
