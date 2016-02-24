<?php

class Contacts_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		
	}

	public function get_all(){

		$query = $this->db->get('contacts');
		return $query->result();
	}
}