<?php

class News extends CI_Controller{

	public function __construct(){
		parent::__construct();
			$this->load->model('cms/news_model','m');
	}

	public function index(){
		$data['news'] = $this->m->get_all();
		$this->load->view('cms/header_view');
		$this->load->view('cms/news_view', $data);
		$this->load->view('cms/footer_view');
	}


	public function insert(){

		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			if ($this->form_validation->run($this, 'news') == FALSE){
				
			} else {
				if (! $this->upload->do_upload()){
				
				} else {
					$image_data = $this->upload->data();

					$data=array(
						'title' => $this->input->post('title'),
						'author' => $this->input->post('author'),
						'date' => $this->input->post('date'),
						'userfile'=> $image_data['file_name'],
						'content' => $this->input->post('content')
					);

					$this->db->insert('news',$data);
					redirect('cms/news');
				}

			}
		}

			$this->load->view('cms/header_view');
			$this->load->view('cms/news_add_view');
			$this->load->view('cms/footer_view');	
	}

	public function update($id){

		$row = $this->m->get($id);
		$data['r'] = $row;
		$id = $this->input->post('id');
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			if ($this->form_validation->run($this, 'news') == FALSE){
				
			} else {
				if ($this->upload->do_upload()){
					$image_data = $this->upload->data();
				    $data = array(
						'title' => $this->input->post('title'),
						'author' => $this->input->post('author'),
						'date' => $this->input->post('date'),
						'userfile'=> $image_data['file_name'],
						'content' => $this->input->post('content')
					);
				} else {
					$data = array(
						'title' => $this->input->post('title'),
						'author' => $this->input->post('author'),
						'date' => $this->input->post('date'),
						'content' => $this->input->post('content')
					);
				} 
				
				$this->db->where('id', $id);
				$this->db->update('news',$data);

				redirect('cms/news');
			}
		}
			$this->load->view('cms/header_view');
			$this->load->view('cms/news_edit_view', $data);
			$this->load->view('cms/footer_view');
	}

	public function delete($id){
		$this->delete_pics($id);
		$this->m->delete($id);
		redirect('cms/news');
	}

	function delete_pics($id){
		$query = $this->m->get($id);
		$userfile = './public/img/'.$query->userfile;
		$thumb = './public/img/'.$query->thumb;
		
		unlink($userfile);
		unlink($thumb);
	}

}