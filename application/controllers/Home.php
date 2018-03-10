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
		
		$data['description'] = 'Welcome to CodeIgniter';

		// Load data from Model
		$posts = $this->home_model->getPosts();
		$states = $this->home_model->getStates();
		
		// Send to View
		$data['posts'] = $posts;
		$data['states'] = $states;
		$this->load->view('home', $data);
	}
}
