<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	/*
        Controller Details:
            Description: Login page
            Accessible by anon: Yes but not by user
            
	*/

class Login extends CI_Controller {

	var $data = array();

	public function __construct()
	{
			parent::__construct();
			$this->data = array(
				'isLogScreen'=>true,
				'err'=>false
			);
			
			
			$this->load->helper('url');
	}

	public function index()
	{
		if($message = $this->session->flashdata('error_message')){
			$this->data['err'] = $message;
		}
		
		if(isset($this->session->user)){
				redirect('/');
		}


		$this->load->helpers('form');

		$this->load->view('_heading');
		$this->load->view('_navigation-out',$this->data);
		$this->load->view('login',$this->data);
        	$this->load->view('_scripts');
	}

	public function check(){

		if(isset($this->session->user)){
			redirect('/');
		}
		
		$this->load->database();

		$this->load->model('User');
		$count = $this->User->check_login();

		if($count){
			$this->session->isActive = true;
			$this->session->user = $this->input->post('username');
			redirect('/welcome');
		}
		else{
			$this->session->set_flashdata('error_message','Invalid login');
			redirect('/login');
		}
	}

	public function destroy(){
		$this->session->sess_destroy();

		redirect('/');
	}
}
