<?php
class Products extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('website/products_model','m');
	}
	public function index(){

		$this->load->view('website/header_view');
		$this->load->view('website/products_view');
		$this->load->view('website/footer_view');
	}


	public function get($id){
		$this->m->get($id);

		$this->load->view('website/header_view');
		$this->load->view('website/products_view');
		$this->load->view('website/footer_view');
		
	}

	function show($id){
		$product_id = $this->uri->segment(4);
		$data = $this->get_data_from_db($id);
		$data['id'] = $id;
		$data['thumbs'] = $this->m->get_pics($product_id);
		
		$this->load->view('website/header_view');
		$this->load->view('website/products_view',$data);
		$this->load->view('website/footer_view');
	}

	function get_data_from_db($id){

		$query = $this->get_where($id);
		foreach($query->result() as $row){

			$data['title'] = $row->title;
			$data['price'] = $row->price;
			$data['userfile'] = $row->userfile;
			$data['content'] = $row->content;
			
		}

		if (!isset($data)){
			
			echo "Sorry the item is not available";
			die();
			
		}

		return $data;

	}

	function get_where($id){
		
		$query = $this->m->get_where($id);
		return $query;
	}
}