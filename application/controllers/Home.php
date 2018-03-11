<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('home_model');
	}

	public function index()
	{
		$data['title'] = 'My Blog'; 
		$this->load->view('common/head', $data);
		$this->load->view('common/navBar');

		// Load data from Model
		$posts = $this->home_model->getPosts();
		$states = $this->home_model->getStates();
		
		// Send to View
		$data = [
			'posts' => $posts,
			'states' => $states
		];

		$this->load->view('home', $data);
		$this->checkUserSession();
	}

	// Load Posts with Ajax
	public function searchPosts() {
		$dataSearch = [
			'title' => $this->input->post('title'),
			'date' => $this->input->post('date'),
			'state' => $this->input->post('state'),
		];

		$posts = $this->home_model->getPostsSearched($dataSearch);
		$data['posts'] = $posts;
		$this->load->view('tablePosts', $data);
	}

	// Add new Post
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

	// Logout
	public function logout() {
		$this->session->sess_destroy();
		redirect(base_url());
	}

	// Check session
	private function checkUserSession() {
		if (!$this->session->userdata('username')) {
			redirect();
		}
	}
}
