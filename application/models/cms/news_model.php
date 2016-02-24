<?php

class News_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		
	}

	function get_table(){
		$table = "news";
		return $table;
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

	public function update($id , $data){
		$this->db->where('id',$id);
		$this->db->update('news' , $data);
		
	}

	function total_comments($id){
	    $this->db->like('news_id', $id);
	    $this->db->from('comments');
	    return $this->db->count_all_results();
	}

	public function get_comments($id,$news_id){

		$this->db->where('id',$id);
		$this->db->where('news_id',$news_id);
		$query = $this->db->get('comments');
		return $query->result();
	}

	function delete($id){
		$table = $this->get_table();
		$this->db->where('id', $id);
		$this->db->delete($table);
	}



}