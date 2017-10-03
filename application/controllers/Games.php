<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller{

	/*
        Controller Details:
            Description: Homepage
            Accessible by anon: Yes
            
    */

    var $data = array();

    public function __construct()
    {
        parent::__construct();
        $this->data = array(
            'isGames'=>true,
            'isLogScreen'=>false,
            'err'=>false
        );

        if($this->session->user){
            redirect('/welcome');
        }
    }

    public function index()
	{
        
        $this->session->set_flashdata('error_message','You need to be logged in first to access this page.');

		$this->load->view('_heading');
		$this->load->view('_navigation-out',$this->data);
        $this->load->view('games');
        $this->load->view('_footer');
		$this->load->view('_scripts');
		
	}
    
}
