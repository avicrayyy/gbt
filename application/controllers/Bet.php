<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bet extends CI_Controller {

    /*
        Controller Details:
            Description: Betting page of the site
			Accessible by anon: No
			
			Test
            
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
			'isBet'=>true,
            'title'=>'Bets',
            'subtitle'=>'Start placing your bets!',
			'userName'=>$this->session->user
		);

		$this->load->view('_heading');
		$this->load->view('_navigation-in',$data);
		$this->load->view('_placeholder',$data);
		$this->load->view('_footer');
		$this->load->view('_scripts');

		
	}
}
