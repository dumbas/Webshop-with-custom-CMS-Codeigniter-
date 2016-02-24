<?php
class Products extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('cms/products_model','m');
	}
	public function index(){
		
		$this->load->view('cms/header_view');
		$this->load->view('cms/products_view');
		$this->load->view('cms/footer_view');
	}

	public function get_all(){

		$this->m->get_all;
	}

	public function get_products($cat_id){
		$data['products'] = $this->m->get_all();
		$data['cat_id'] = $cat_id;		
		$data['query'] = $this->m->get_where_custom('cat_id', $cat_id);
		$num_rows = $data['query']->num_rows();

		$this->load->view('cms/header_view');
		$this->load->view('cms/products_view',$data);
		$this->load->view('cms/footer_view');
	}

	public function get_pics($id, $product_id){
		$this->m->get($id, $product_id);
		$data['r'] = $row;

		$this->load->view('cms/header_view');
		$this->load->view('cms/products_gallery_view',$data);
		$this->load->view('cms/footer_view');
				
	}

	public function insert($cat_id){
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			if ($this->form_validation->run($this, 'products') == FALSE){
				
			} else {
				if (! $this->upload->do_upload()){
				
				} else {
					$image_data = $this->upload->data();	

					$data = array(
						
						'title' => $this->input->post('title'),
						'price' => $this->input->post('price'),
						'userfile'=> $image_data['file_name'],
						'content' => $this->input->post('content'),
						'cat_id' => $cat_id
					);
					
					$this->db->insert('products',$data);
					redirect('cms/products/get_products/'.$cat_id);
				}

			}
		}		
			$this->load->view('cms/header_view');
			$this->load->view('cms/products_add_view');
			$this->load->view('cms/footer_view');	
		
	}

	public function update($id,$cat_id){
		$row = $this->m->get($id);
		$data['r'] = $row;
		$id = $this->input->post('id');
		$cat_id = $this->uri->segment(5);
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			if ($this->form_validation->run($this, 'products') == FALSE){
			
			} else {
				if ($this->upload->do_upload()){
			    	$image_data = $this->upload->data();
				
					$data = array(
						'title' => $this->input->post('title'),
						'price' => $this->input->post('price'),
						'userfile'=> $image_data['file_name'],
						'content' => $this->input->post('content')
					);
				} else {
					$data = array(
						'title' => $this->input->post('title'),
						'price' => $this->input->post('price'),
						'content' => $this->input->post('content')
					);
				}
				$this->db->where('cat_id', $cat_id);
				$this->db->where('id', $id);
				$this->db->update('products',$data);
			
				redirect('cms/products/get_products/'.$cat_id);
			}
		}
		$this->load->view('cms/header_view');
		$this->load->view('cms/products_edit_view', $data);
		$this->load->view('cms/footer_view');
	}

	function ditch($id){
		$cat_id = $this->uri->segment(5);
		$this->delete_pics($id);
		$this->delete($id);
		redirect('cms/products/get_products/'.$cat_id);
	}
	function delete_pics($id){
		$query = $this->m->get($id);
		$userfile = './public/img/'.$query->userfile;
		$thumb = './public/img/'.$query->thumb;
		
		unlink($userfile);
		unlink($thumb);
	}

	public function delete($id){
		
		$id = $this->db->where('id', $id);
		$this->db->delete('products');
		
	}
}