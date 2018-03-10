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
	}
}
