<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	/*
        Controller Details:
            Description: Login page
            Accessible by anon: Yes but not by user
            
	*/

class Register extends CI_Controller {

	var $data = array();

	public function __construct()
	{
			parent::__construct();
			$this->data = array(
                'isRegister'=>true,
				'isLogScreen'=>true,
				'err'=>false
            );
            
            if($this->session->user){
                redirect('/welcome');
            }

			$this->load->helper('url');
	}

	public function index()
	{
		if($message = $this->session->flashdata('error_message')){
			$this->data['err'] = $message;
		}

		$this->load->helpers('form');

		$this->load->view('_heading');
		$this->load->view('_navigation-out',$this->data);
		$this->load->view('register',$this->data);
        $this->load->view('_scripts',$this->data);
    }
    
    public function validate(){
        $this->load->database();

        $name = $this->input->post('name');

        $this->load->model('User');

        if($name == 'username'){
           $count = $this->User->check_if_user_exists();


           if($count){
               echo "Username is already taken";
           }
           else{
               echo "okay";
           }
        }
        else{
            $count = $this->User->check_if_email_exists();

            if($count){
                echo "Email is already in use";
            }
            else{
                echo "okay";
            }
        }
    }

    public function submit(){
        $this->load->database();

        $this->load->model('User');
        
        $this->load->view('_heading');
		$this->load->view('_navigation-out',$this->data);
        if($this->User->add_new_user()){
            $this->data['title'] = "Success!";
            $this->data['subtitle'] = "You have successfully created your account";
            $this->load->view('reg_msg',$this->data);
        }
        else{
            $this->data['title'] = "Account creation failed!";
            $this->data['subtitle'] = "Please contact our web administrator";
            $this->load->view('reg_msg',$this->data);
        }
        $this->load->view('_footer');
        $this->load->view('_scripts');
    }
}
