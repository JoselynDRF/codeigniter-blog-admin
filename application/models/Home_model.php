<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function getPosts($dataSearch) {
		$this->db->select('idPost, title, content, date, state.description as state');
		$this->db->from('post');
		$this->db->join('state', 'state.idState = post.idState');
		
		$this->db->like('title', $dataSearch['title']);
		$this->db->like('date', $dataSearch['date']);

		if($dataSearch['state']) {
			$this->db->where('state.description', $dataSearch['state']);
		}

		$query = $this->db->get();
		$result = $query->result();

		return $result;
	}

	public function getStates() {
		$query = $this->db->get('state');
		$result = $query->result();

		return $result;
	}
	
}