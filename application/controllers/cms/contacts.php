<?php

class Contacts extends CI_Controller{

	public function __construct(){
	parent::__construct();
		$this->load->model('cms/contacts_model','m');
	}

	public function index(){
		$data['contacts'] = $this->m->get_all();
		$this->load->view('cms/header_view');
		$this->load->view('cms/contacts_view',$data);
		$this->load->view('cms/footer_view');
	}

	public function delete($id){
		$id = $this->db->where('id', $id);
		$this->db->delete('contacts');
		redirect('cms/contacts');
	}
}