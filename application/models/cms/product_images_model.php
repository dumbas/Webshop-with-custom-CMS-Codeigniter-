<?php

class Product_images_model extends CI_Model{


	function __construct(){
		parent::__construct();

	}

	function get_table(){
		$table = "products_images";
		return $table;
	}
	function get($id){
		$this->db->where('id', $id);
		$query = $this->db->get('products_images');
		return $query->row();
	}

	public function get_all(){
		$product_id = $this->uri->segment(4);
		$this->db->select('*');
		$this->db->from('products_images');
		$this->db->where('product_id',$product_id);
		$this->db->order_by("id",'desc');
		$query = $this->db->get(); 
		return $query->result();
	}

	function get_where_custom($col, $value){
		$table = $this->get_table();
		$this->db->where($col, $value);
		$query = $this->db->get($table);
		return $query;
	
	}
	

	public function update($id , $data){
		$this->db->where('id',$id);
		$this->db->update('products' , $data);
		
	}

	function insert($data){
		$table = $this->get_table();
		//$this->where->('product_id', $product_id);
		$this->db->insert($table,$data);
	}

	function delete($id){
		$table = $this->get_table();
		$this->db->where('id', $id);
		$this->db->delete($table);
	}

	function get_where($id){
		$table = $this->get_table();
		$this->db->where('id', $id);
		$query = $this->db->get($table);
		return $query;
	}



}