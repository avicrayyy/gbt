<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller{

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
            'isContact'=>true,
            'isLogScreen'=>false
        );
    }

    public function index()
	{
        $this->load->helpers('form');

		$this->load->view('_heading');
		$this->load->view('_navigation-out',$this->data);
        $this->load->view('contact');
        $this->load->view('_footer');
		$this->load->view('_scripts');
		
    }
    

    public function send(){
        $this->load->library('email');

        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $message = html_escape($this->input->post('message'));
        
        $this->email->from($email, $name);
        $this->email->to('contactus@gameplaytv.net');
        
        $this->email->subject("Message from ".$email." via contact form!");
        $this->email->message($message);
        
        if($this->email->send()){
            $this->data['title'] = "Success!";
            $this->data['subtitle'] = "You have successfully sent your message";
        }
        else{
            $this->data['title'] = "Contact submission failed!";
            $this->data['subtitle'] = "Please contact our web administrator";
        }
        $this->load->view('_heading');
	    $this->load->view('_navigation-out',$this->data);
        $this->load->view('reg_msg',$this->data);
        $this->load->view('_footer');
        $this->load->view('_scripts');
    }
    
}
