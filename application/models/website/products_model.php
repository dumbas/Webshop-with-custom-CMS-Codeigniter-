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
		$this->db->order_by("id", "desc");
		$query = $this->db->get('products');
		return $query->result();
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

	function get_pics($product_id){

		$product_id = $this->uri->segment(4);
		$this->db->where('product_id',$product_id);
		$query = $this->db->get('products_images');
		
		return $query->result();
	
	}

	
}
