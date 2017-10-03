<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/*
        Controller Details:
            Description: Login Homescreen
            Accessible by anon: No
            
	*/
	public function __construct()
	{
			parent::__construct();
			if(!$this->session->user){
				$this->session->set_flashdata('error_message','You need to be logged in first to access this page.');
				redirect('/login');
			}
	
	}

	public function index()
	{

		$data = array(
			'isHome'=>true,
			'userName'=>$this->session->user
		);

		$this->load->view('_heading');
		$this->load->view('_navigation-in',$data);
		$this->load->view('home',$data);
		$this->load->view('_footer');
		$this->load->view('_scripts');
		
	}
}
