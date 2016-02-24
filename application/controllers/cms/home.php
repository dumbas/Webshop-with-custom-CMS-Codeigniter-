<?php 

class Home extends CI_Controller {
	function __construct() {
        parent::__construct(); 
    }

	public function index(){

		$this->load->view('cms/header_view');
		$this->load->view('cms/cms_view');
		$this->load->view('cms/footer_view');
	}

}
