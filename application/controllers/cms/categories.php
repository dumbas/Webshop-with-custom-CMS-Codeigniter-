<?php

class Categories extends CI_Controller{

	public function __construct(){
		parent::__construct();
			$this->load->model('cms/categories_model','m');
	}

	public function index(){
		$data['categories'] = $this->m->get_all();
		$this->load->view('cms/header_view');
		$this->load->view('cms/categories_view',$data);
		$this->load->view('cms/footer_view');
	}

	public function add(){
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			if ($this->form_validation->run($this, 'categories') == FALSE){
				
			}else{

				$data=array(
					'cat_name' => $this->input->post('cat_name')	
				);

				$this->db->insert('categories',$data);
				redirect('cms/categories');
			}

		}
			$this->index();
	}

	public function update($id){

		$row = $this->m->get($id);
		$data['r'] = $row;
		$id = $this->input->post('id');
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			if ($this->form_validation->run($this, 'categories') == FALSE){
				
			} else {
				$data = array(
					'cat_name' => $this->input->post('cat_name')
				);
			} 
				
			$this->db->where('id', $id);
			$this->db->update('categories',$data);

			redirect('cms/categories');
			
		}
			$this->load->view('cms/header_view');
			$this->load->view('cms/categories_edit_view', $data);
			$this->load->view('cms/footer_view');
	}


	public function delete($id){
		$id = $this->db->where('id', $id);
		$this->db->delete('categories');
		redirect('cms/categories');
	}

}