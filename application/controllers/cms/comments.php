<?php

class Comments extends CI_Controller{

public function __construct(){
	parent::__construct();
		$this->load->model('cms/comments_model','m');
	}

	public function index(){
		
		$this->load->view('cms/header_view');
		$this->load->view('cms/comments_view');
		$this->load->view('cms/footer_view');
	}
 
	public function get_comments($news_id){
		$news_id = $this->uri->segment(4);
		$data['comments'] = $this->m->get_all($news_id);
		
		$this->load->view('cms/header_view');
		$this->load->view('cms/comments_view',$data);
		$this->load->view('cms/footer_view');
			
	}

	function ditch($id){
		$news_id = $this->uri->segment(5);
			
		$this->delete($id);

		redirect('cms/comments/get_comments/'.$news_id);
	}


	function delete($id){
		$this->load->model('m');
		$this->m->delete($id);
	}
}