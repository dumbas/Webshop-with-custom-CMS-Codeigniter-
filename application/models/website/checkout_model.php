<?php

class Checkout_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		
	}


	public function get_all(){
		
		$query = $this->db->get('costumers');
		
		return $query->result();
	}

	public function get($id){
		
		$this->db->where('id',$id);
		$query = $this->db->get('costumers');
		return $query->row();
	}

	function get_where($id){
		$table = $this->get_table();
		$this->db->where('id', $id);
		$query = $this->db->get($table);
		return $query;
	}
}