<?php

class Chat extends CI_Controller{

	public function __construct(){
	parent::__construct();
		$this->load->model('cms/chat_model','m');
	}

	public function index(){
		$this->load->view('cms/header_view');
		$this->load->view('cms/chat_view');
		$this->load->view('cms/footer_view');
	}

	function send_msg(){
		$users = $this->m->get_users();
		
		foreach ($users as $key) {
			
			$data=[
					'msg' => $this->input->post('msg'),
					'user' => $this->session->userdata('username'),
					'sender_id' => $this->session->userdata('user_id'),
					'recipient_id' => $key->id,
					'date' => date('Y-m-d H:i:s')
					];

			$this->db->insert('messages',$data);
			//redirect('cms/chat');
		}
		
		$this->load->view('cms/header_view');
		$this->load->view('cms/chat_view');
		$this->load->view('cms/footer_view');
	
	}

	function load_recent(){
		$recipient_id = $this->session->userdata('user_id');
		$data = $this->m->load_recent();
		$this->db->where('recipient_id', $recipient_id);
		$this->db->set('is_read', '1');
		$this->db->update('messages');
		echo json_encode($data);
		
	}

	function get_unread_count($recipient_id){
		$recipient_id = $this->session->userdata('user_id');
		$cnt = $this->m->get_unread_count($recipient_id);
		return $cnt;
	}

	function load_unread(){
		$recipient_id = $this->session->userdata('user_id');
		echo $this->get_unread_count($recipient_id);
	}


}