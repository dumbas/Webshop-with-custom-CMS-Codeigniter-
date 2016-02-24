<?php

class Users extends CI_Controller{

	public function __construct(){
	parent::__construct();
		$this->load->model('cms/users_model','m');
	}

	public function index(){
		$data['users'] = $this->m->get_all();
		$this->load->view('cms/header_view');
		$this->load->view('cms/users_view', $data);
		$this->load->view('cms/footer_view');
	}

	public function insert(){

		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			if ($this->form_validation->run($this, 'users') == FALSE){
				
			} else {

				$data=array(
					'username' => ($this->input->post('username')),
					'password' => (sha1($this->input->post('password')))
				);

				$this->db->insert('users',$data);
				redirect('cms/users');
			}
		}
		$this->load->view('cms/header_view');
		$this->load->view('cms/users_add_view');
		$this->load->view('cms/footer_view');	
	}

	public function update($id){

		$row = $this->m->get($id);
		$data['r'] = $row;
		$id = $this->input->post('id');

		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			if ($this->form_validation->run($this, 'users') == FALSE){
				
			} else {
				$data=array(
					'username' => $this->input->post('username'),
					'password' => sha1($this->input->post('password'))
				);
				
				$this->db->where('id', $id);
				$this->db->update('users',$data);
				
				redirect('cms/users');
			}
		}
		$this->load->view('cms/header_view');
		$this->load->view('cms/users_edit_view', $data);
		$this->load->view('cms/footer_view');
	}

	public function delete($id){
		$id = $this->db->where('id', $id);
		$this->db->delete('users');
		redirect('cms/users');
	}

}