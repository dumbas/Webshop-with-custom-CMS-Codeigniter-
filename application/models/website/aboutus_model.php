<?php

class Aboutus_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		
	}

	function get_table(){
		$table = "aboutus";
		return $table;
	}


	public function get_all(){
		$this->db->order_by("date", "desc");
		$query = $this->db->get('aboutus');
		
		return $query->result();
	}

	public function get($id){

		$this->db->where('id',$id);
		$query = $this->db->get('aboutus');
		return $query->row();
	}

	function get_where($id){
		$table = $this->get_table();
		$this->db->where('id', $id);
		$query = $this->db->get($table);
		return $query;
	}
}