<?php 

class Aboutus extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('website/aboutus_model','m');
	}

	public function index(){
		$data['aboutus'] = $this->m->get_all();
		$this->load->view('website/header_view');
		$this->load->view('website/aboutus_view',$data);
		$this->load->view('website/footer_view');
	}

	

}