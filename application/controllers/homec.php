<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginc extends CI_Controller {

    public function index()
	{
		$this->load->database();
		$this->load->view('home');
	}






}