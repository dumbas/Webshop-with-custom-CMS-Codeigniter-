<?php

class News_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		
	}

	function get_table(){
		$table = "news";
		return $table;
	}

	public function get_comments(){
		$news_id = $this->uri->segment(4);
		$this->db->where('news_id',$news_id);
		$this->db->order_by("date",'desc');
		$query = $this->db->get('comments'); 
		return $query->result();
	}

	public function get_all(){
		$this->db->order_by("date", "desc");
		$query = $this->db->get('news');
		
		return $query->result();
	}

	public function get($id){

		$this->db->where('id',$id);
		$query = $this->db->get('news');
		return $query->row();
	}

	function get_where($id){
		$table = $this->get_table();
		$this->db->where('id', $id);
		$query = $this->db->get($table);
		return $query;
	}
}