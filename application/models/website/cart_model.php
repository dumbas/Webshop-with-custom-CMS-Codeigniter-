<?php

class Cart_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		
	}

	public function get($id){

		$this->db->where('id',$id);
		$query = $this->db->get('products');
		return $query->row();
	}

	public function update($id , $data){
		$this->db->where('id',$id);
		$this->db->update('products' , $data);
		
	}

}
