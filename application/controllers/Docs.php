<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Docs extends CI_Controller {

    /*
        Controller Details:
            Description: Betting page of the site
            Accessible by anon: No
            
    */
    
	public function privacy()
	{

		$this->load->view('privacy');
		
    }
    
    public function user_agreement(){
        $this->load->view('user-agreement');
    }
}
