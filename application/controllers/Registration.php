<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	// public function __construct(){
    //     parent::__construct();
    //     $this->load->model('form_validation');
    // }

	public function index()
	{
		$this->load->view('registration');
	}

    public function add()
	{
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
    
        if($this->form_validation->run()){
            $data1 = [
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'address' => $this->input->post('address'),
                'phone' => $this->input->post('phone')
            ];
    
            $data2 = [
                'user_name' => $this->input->post('first_name') . '' . $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            ];
    
            $this->load->model('UserModel');
            $this->UserModel->insertUser($data1,$data2);
        }
        else{
            $this->index();
        }
	}


}