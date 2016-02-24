<?php

class Products_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}
	function get_table(){
		$table = "products";
		return $table;
	}

	public function get_all(){
		$cat_id = $this->uri->segment(4);
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('cat_id',$cat_id);
		$this->db->order_by("id",'desc');
		$query = $this->db->get(); 
		return $query->result();
	}

	public function get($id){
		$this->db->where('id',$id);
		$query = $this->db->get('products');
		return $query->row();
	}

	function insert($data){
		$table = $this->get_table();
		$this->db->insert($table,$data);
	}

	public function update($id , $data){
		$this->db->where('id',$id);
		$this->db->update('products' , $data);
		
	}

	function get_where_custom($col, $value){
		$table = $this->get_table();
		$this->db->where($col, $value);
		$query = $this->db->get($table);
		return $query;
	
	}
	
}