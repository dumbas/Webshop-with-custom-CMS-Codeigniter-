<?php

class Categories_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		
	}

	public function get_all(){

		$query = $this->db->get('categories');
		return $query->result();
	}

	public function get($id){

		$this->db->where('id',$id);
		$query = $this->db->get('categories');
		return $query->row();
	}

	public function update($id , $data){
		$this->db->where('id',$id);
		$this->db->update('categories' , $data);
		
	}

}