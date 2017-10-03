<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Learn extends CI_Controller {

	/*
        Controller Details:
            Description: Homepage
            Accessible by anon: Yes
            
	*/
	
	public function index()
	{

		$data = array(
			'isLearn'=>true,
			'isLogScreen'=>false
		);

		$this->load->view('_heading');
		$this->load->view('_navigation-out',$data);
		$this->load->view('learn');
		$this->load->view('_footer');
		$this->load->view('_scripts');

		
	}
}
