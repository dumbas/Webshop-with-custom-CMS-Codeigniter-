<?php

class Product_images extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('cms/product_images_model','m');
	}

	function index(){
		$this->load->view('cms/header_view');
		$this->load->view('cms/products_gallery_view');
		$this->load->view('cms/footer_view');
	}

	public function get_pics($product_id){

		$data['pics'] = $this->m->get_all();
		$data['product_id'] = $product_id;		
		$data['query'] = $this->m->get_where_custom('product_id', $product_id);
		$num_rows = $data['query']->num_rows();

		$this->load->view('cms/header_view');
		$this->load->view('cms/products_gallery_view',$data);
		$this->load->view('cms/footer_view');
			
	}

	function do_upload($product_id){

		if ( ! $this->upload->do_upload()){

			$data['error'] = array('error' => $this->upload->display_errors("<p style = 'color: red;'>", "</p>"));
			$data['product_id'] = $product_id;
			
		} else {

			$data = $this->upload->data();
			$file_name = $data['file_name']; //the name of the file that is now uploaded
			// creates a thumbnail
			$config['image_library'] = 'gd2';
			$config['source_image'] = './public/img/'.$file_name;
			$config['create_thumb'] = TRUE;
			$config['width'] = 40;
			$config['height'] = 40;

			$this->load->library('image_lib', $config);
			$this->image_lib->resize();

			//resize the larger picture (make it 400px x 400px)
			$new_widht = 1200;
			$new_height = 900;
			$this->_resize_pic($file_name, $new_widht, $new_height);

			//update the database 
			$raw_file_name = $data['raw_name'];
			$file_ext = $data['file_ext'];
			$data['product_id'] = $product_id;
			unset($data);

			$data['thumb'] = $raw_file_name."_thumb".$file_ext ;
			$data['userfile'] = $file_name;
			$data['product_id'] = $product_id;

			$this->db->insert('products_images',$data);
			redirect('cms/product_images/get_pics/'.$product_id);
			
		}
		$this->load->view('cms/header_view');
		$this->load->view('cms/products_gallery_view',$data);
		$this->load->view('cms/footer_view');

		
	}

	function _resize_pic($file_name, $new_widht, $new_height){
		
		$config['image_library'] = 'gd2';
		$config['source_image'] = './public/img/'.$file_name;
		$config['create_thumb'] = FALSE;
		$config['maintain_ratio'] = TRUE;
		$config['width'] = $new_widht;
		$config['height'] = $new_height;

		$this->image_lib->initialize($config); 

		$this->load->library('image_lib', $config);
		$this->image_lib->resize();

	}

	function insert($data){
		$this->load->model('m');
		$this->m->insert($data);
	}

	function get_data_from_post(){
		$data['userfile'] = $this->input->post('userfile', TRUE);
		return $data;
	}

	function get_data_from_db($product_id){

		$query = $this->get_where($product_id);

		foreach($query->result() as $row){
			$data['userfile'] = $row->userfile;
		}
		if (!isset($data)){
			echo "Sorry the item is not available";
			die();
		}

		return $data;
	}

	function get_where($id){
		$this->load->model('m');
		$query = $this->m->get_where($id);
		return $query;
	}

	function ditch($id){
		
		$product_id = $this->uri->segment(5);
		$this->delete_pics($id);
		$this->delete($id);
		
		redirect('cms/product_images/get_pics/'.$product_id);
	}
	function delete_pics($id){
		$query = $this->m->get($id);
		$userfile = './public/img/'.$query->userfile;
		$thumb = './public/img/'.$query->thumb;
		
		unlink($userfile);
		unlink($thumb);
	}

	function delete($id){
		$this->m->delete($id);
	}

}
