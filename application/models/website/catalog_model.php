<?php

class Catalog_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}
	private $table = 'products';

	public function get_all($limit = 4){
		$this->db->order_by("id",'desc');
		$offset = $this->uri->segment(4);
		$query = $this->db->limit($limit,$offset)
						  ->get($this->table);
		return $query->result();
	}

	public function count_all(){
		return $this->db->count_all_results($this->table);
	}

	public function get($id){
		$this->db->where('id',$id);
		$query = $this->db->get('products');
		return $query->row();
	}

	function get_where($id){
		$table = $this->get_table();
		$this->db->where('id', $id);
		$query = $this->db->get($table);
		return $query;
	}

	
}
