<?php
class Comments_Model extends CI_Model{

	public function __construct(){
		parent::__construct();
		
	}

	function get_table(){
		$table = "comments";
		return $table;
	}

	public function get_all($news_id){
		
		$this->db->where('news_id',$news_id);
		$this->db->order_by("date",'desc');
		$query = $this->db->get('comments'); 
		return $query->result();
	}

	public function get($id){

		$this->db->where('id',$id);
		$query = $this->db->get('comments');
		return $query->row();
	}

	function get_where_custom($col, $value){
		$table = $this->get_table();
		$this->db->where($col, $value);
		$query = $this->db->get($table);
		return $query;
	}

	function delete($id){
		$table = $this->get_table();
		$this->db->where('id', $id);
		$this->db->delete($table);
	}


}