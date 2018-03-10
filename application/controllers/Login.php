<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		$data['title'] = 'Login'; 
		$this->load->view('common/head', $data);
		$this->load->view('common/navBar');
		$this->load->view('login', $data);
		$this->checkUserSession();
	}

	public function getUser() {
		$dataLogin = [
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		];

		$user = $this->login_model->getUser($dataLogin);
	
		if(!$user) {
			redirect(base_url());
		} else {
			$dataSession = [
				'idUser' => $user->idUser,
				'username' => $user->username,
				'password' => $user->password,
			];

			$this->session->set_userdata($dataSession);
			redirect(base_url('home'));
		}
	}

	private function checkUserSession() {
		if ($this->session->userdata('username')) {
			redirect(base_url('home'));
		}
	}
}
