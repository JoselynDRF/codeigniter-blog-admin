<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('home_model');
	}

	public function index()
	{
		$data['title'] = 'CodeIgniter - Template'; 
		$this->load->view('common/head', $data);
		$this->load->view('common/navBar');

		$data['description'] = 'Welcome to CodeIgniter';

		// Data from search form
		$dataSearch = [
			'title' => $this->input->post('title'),
			'date' => $this->input->post('date'),
			'state' => $this->input->post('state'),
		];

		// Load data from Model
		$posts = $this->home_model->getPosts($dataSearch);
		$states = $this->home_model->getStates();
		
		// Send to View
		$data['posts'] = $posts;
		$data['states'] = $states;
		$this->load->view('home', $data);

		$this->checkUserSession();
	}

	public function addPost() {
		$newPost = [
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'date' => date('Y-m-d'),

			'isDeleted' => false,
			'idState' => $this->input->post('state'),
			'idUser' => 1
		];

		$this->home_model->insertPost($newPost);
		redirect(base_url('home'));
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect(base_url());
	}

	private function checkUserSession() {
		if (!$this->session->userdata('username')) {
			redirect();
		}
	}
}
