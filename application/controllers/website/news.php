<?php
class News extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('website/news_model','m');
	}
	public function index(){
		
		$this->load->view('website/header_view');
		$this->load->view('website/article_view');
		$this->load->view('website/footer_view');
	}


	public function insert_comment($id){
		$row = $this->m->get($id);
		$data['r'] = $row;
		$data['id'] = $id;
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			if ($this->form_validation->run($this, 'comments') == FALSE){
				
			} else {
				$data=array(
					'name' => $this->input->post('name'),
					'content' => $this->input->post('content'),
					'date' => date('Y-m-d H:i:s'),
					'news_id' => $id
				);
				
				$this->db->insert('comments',$data);
				redirect('website/news/show/'.$id);
			}
		}
		$this->load->view('website/header_view');
		$this->load->view('website/article_view',$data);
		$this->load->view('website/footer_view');
		
	}

	function show($id){
		$data['comments'] = $this->m->get_comments();
		$row = $this->m->get($id);
		$data['r'] = $row;

		$this->load->view('website/header_view');
		$this->load->view('website/article_view',$data);
		$this->load->view('website/footer_view');
	}

	
}