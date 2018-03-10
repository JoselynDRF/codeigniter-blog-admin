<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function getUser($dataUser) {
		$this->db->select('*');
		$this->db->from('user');
    $this->db->where('username', $dataUser['username']);
    $this->db->where('password', $dataUser['password']);
    $this->db->limit(1);
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      $result = $query->row();
      return $result;
	  } else {
      return false;
    }
  }
}