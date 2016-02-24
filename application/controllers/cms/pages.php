<?php

class Pages extends CI_Controller{

	public function __construct(){
	parent::__construct();
		$this->load->model('cms/pages_model','m');
	}

	public function index(){
		$data['pages'] = $this->m->get_all();
		$this->load->view('cms/header_view');
		$this->load->view('cms/pages_view', $data);
		$this->load->view('cms/footer_view');
	}

	public function insert(){

		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			if ($this->form_validation->run($this, 'pages') == FALSE){
				
			} else {
				$data=array(
					'title' => $this->input->post('title'),
					'content' => $this->input->post('content')
				);
				
				$this->db->insert('pages',$data);
				redirect('cms/pages/index');
			}
		}
		$this->load->view('cms/header_view');
		$this->load->view('cms/pages_add_view');
		$this->load->view('cms/footer_view');	
	}

	public function update($id){
		$row = $this->m->get($id);
		$data['r'] = $row;
		$id = $this->input->post('id');
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			if ($this->form_validation->run($this, 'pages') == FALSE){
				
			} else {
				$data=array(
					'title' => $this->input->post('title'),
					'content' => $this->input->post('content')
				);
		
			
				$this->db->where('id', $id);
				$this->db->update('pages',$data);
				
				redirect('cms/pages');
			}
		}
		$this->load->view('cms/header_view');
		$this->load->view('cms/pages_edit_view', $data);
		$this->load->view('cms/footer_view');
	}

	public function delete($id){
		$id = $this->db->where('id', $id);
		$this->db->delete('pages');
		redirect('cms/pages');
	}

}