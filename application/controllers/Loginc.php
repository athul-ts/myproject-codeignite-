<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginc extends CI_Controller {

	
	
	// public function __construct(){

    //     parent::__construct();
	// 	$this->load->model('form');
    //     $this->load->model('form_validation');
	// 	$this->load->model('UserModel');

    // }


	public function index()
	{
		$this->load->database();
		$this->load->view('login');
	}

	public function flogin(){


		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == false)
		{
			$this->load->view('login');

		}
		else
		{
			echo "I'm here";
			// $this->load->view('login');


			$data = [
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password')
			];

			$this->load->model('UserModel');
			$result = $this->UserModel->loginUser($data);

			// $user = new UserModel;
			// $result = $user -> loginUser($data);

			if($result != false){

				$auth_userdetails = [
					'user_name' => $result->user_name,
					'email' => $result->email
				];

				$this->session->set_userdata('authenticated','1');
				$this->session->set_userdata('authenticated',$auth_userdetails);
				
				$this->session->set_flashdata('status','you are logged in');
				redirect(base_url('welcome'));

			}
			else
			{
				$this->session->set_flashdata('status','invalid email or username or password');
				redirect(base_url('login'));
			}


		}


	}


}



