<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Watch extends CI_Controller {

    /*
        Controller Details:
            Description: 
            Accessible by anon: No
            
    */
    public function __construct()
	{
			parent::__construct();
			if(!$this->session->user){
				redirect('/');
			}
	
    }
    
	public function index()
	{

		$data = array(
            'isWatch'=>true,
            'title'=>'Watch',
            'subtitle'=>'Take a peek at the games your betting on!',
			'userName'=>$this->session->user
		);

		$this->load->view('_heading');
		$this->load->view('_navigation-in',$data);
		$this->load->view('_placeholder',$data);
		$this->load->view('_footer');
		$this->load->view('_scripts');

		
	}
}
