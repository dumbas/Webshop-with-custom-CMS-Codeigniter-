<?php

class Blog extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('website/blog_model','m');
	}
	
	private $limit = 4;

	public function index(){

		$news = $this->m->get_all($this->limit);
		$total_rows = $this->m->count_all();

		$config['base_url'] = site_url("website/blog/index");
		$config['total_rows'] = $total_rows;
		$config['per_page'] = $this->limit; 
		$config['uri_segment'] = 4;
		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";

		$this->load->library('pagination',$config);
		$page_links = $this->pagination->create_links();

		$this->load->view('website/header_view');
		$this->load->view('website/blog_view', compact('news', 'page_links'));
		$this->load->view('website/footer_view');
	}

	function get_all(){
		
		$query = $this->m->get_all();
		return $query;
	}


}

?>