<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {

        parent::__construct();
        $this->load->model('Auth_model','',true);
        
    }

	public function index()
	{
		$this->load->view('login');
	}

	public function LoginUser()
	{
		$email=$this->input->post('email');
		$password=$this->input->post('password');

		$loggedHRAdmin = $this->Auth_model->checkHRAdmin($email,$password);
		$loggedHRExecutive= $this->Auth_model->checkHRExecutive($email,$password);
		$loggedHRUser = $this->Auth_model->checkHRUser($email,$password);

		if(count($loggedHRAdmin)>0){

            $this->session->set_userdata('loggedHRAdmin',$loggedHRAdmin);

            redirect('Admin');

        }elseif(count($loggedHRExecutive)>0){

            $this->session->set_userdata('loggedHRExecutive',$loggedHRExecutive);

            redirect('HrExecutive');

        }elseif(count($loggedHRUser)>0){

            $this->session->set_userdata('loggedHRUser',$loggedHRUser);

            redirect('HrUser');

        }else{
        	 redirect('Login');
        }
	}



	public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }


}

