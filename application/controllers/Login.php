<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	// function __construct() {
	// 	parent::__construct();
	// 	$this->load->model('login_model');
	// }

	public function index()
	{
		$data['title'] = 'Login'; 
		$this->load->view('common/head', $data);
		
		$data['description'] = 'Login';
		$this->load->view('login', $data);
	}
}
