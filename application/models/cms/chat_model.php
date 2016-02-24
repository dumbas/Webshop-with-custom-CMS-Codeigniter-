<?php
class Chat_Model extends CI_Model{

	public function __construct(){
		parent::__construct();
		
	}

	function get_table(){
		$table = "messages";
		return $table;
	}


	function get_users(){
		$query = $this->db->get('users');
		return $query->result();
	}

	function load_recent(){
		
		$recipient_id = $this->session->userdata('user_id');

		$this->db->select('a.*, b.username');
		$this->db->from('messages a');
		$this->db->join('users b', 'a.sender_id = b.id');
		$this->db->where('recipient_id',$recipient_id);
		$this->db->limit('20');
		$this->db->order_by('date','desc');
		$query = $this->db->get();
		return $query->result();
	}

	function get_unread_count($recipient_id){
		$recipient_id = $this->session->userdata('user_id');
		$this->db->where('recipient_id', $recipient_id);
		$this->db->where('is_read', 0);
	    $this->db->from('messages');
	    return $this->db->count_all_results();
	}

}