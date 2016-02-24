<?php 

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('website/home_model','m');
	}

	public function index(){
		$data['news'] = $this->m->get_news();
		$data['products'] = $this->m->get_products();
		$this->load->view('website/header_view');
		$this->load->view('website/website_home_view', $data);
		$this->load->view('website/footer_view');
	}

	public function search(){
		$search = $this->input->post('search');
		$data['search'] = $this->m->search($search);
		
		$this->load->view('website/header_view');
		$this->load->view('website/search_view', $data);
		$this->load->view('website/footer_view');

	}
	

	

}