<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model{

    public function check_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $query = $this->db->from('users')
                            ->where('username',$username)
                        ->count_all_results();

        if($query){
            $pwquery = $this->db->from('users')
                                    ->select('password')
                                    ->where('username',$username)
                                    ->get();

            foreach($pwquery->result() as $row){
                return password_verify($password, $row->password);
            }
            
        }

        return false;
    }

    public function check_if_user_exists(){
        $username = $this->input->post('value');

        $query = $this->db->from('users')
                            ->where('username',$username)
                        ->count_all_results();

        return $query;
    }

    public function check_if_email_exists(){
        $email = $this->input->post('value');

        $query = $this->db->from('users')
                            ->where('email',$email)
                        ->count_all_results();

        return $query;
    }

    public function add_new_user(){
        $username = $this->input->post('username');
        $password = password_hash($this->input->post('password'),PASSWORD_DEFAULT);
        $email = $this->input->post('email');

        $data = array(
            "username"=>$username,
            "password"=>$password,
            "email"=>$email
        );

        $query = $this->db->insert('users',$data);

        return $query;

    }
}

