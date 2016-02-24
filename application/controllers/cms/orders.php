<?php

class Orders extends CI_Controller{

	public function __construct(){
	parent::__construct();
		$this->load->model('cms/orders_model','m');
	}

	public function index(){
		$data['orders'] = $this->m->get_all();
		$this->load->view('cms/header_view');
		$this->load->view('cms/orders_view',$data);
		$this->load->view('cms/footer_view');
	}

	public function delete($id){
		$id = $this->db->where('id', $id);
		$this->db->delete('orders');
		redirect('cms/orders');
	}

}