<?php

class Orders_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function get_all(){
		
		$this->db->select('orders.*, products.title as product_title, products.price as product_price');
		$this->db->from('orders');
		$this->db->join('products','orders.product_id = products.id');
		$this->db->order_by('date','DESC');

		$query = $this->db->get();
		return $query->result();
	}
	
}