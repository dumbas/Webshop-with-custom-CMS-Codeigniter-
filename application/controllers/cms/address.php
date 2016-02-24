<?php

class Address extends CI_Controller{

	public function __construct(){
	parent::__construct();
		$this->load->model('cms/address_model','m');
	}

	public function index(){
		$data['address'] = $this->m->get_all();
		$this->load->view('cms/header_view');
		$this->load->view('cms/address_view',$data);
		$this->load->view('cms/footer_view');
	}

	function valid_email(){
		$email = (preg_match('/[^@]+@.+\.\w{2,}/', ($_POST['email'])));
		if ($email == FALSE){
			$this->form_validation->set_message('valid_email', 'This email is incorect!');
			return FALSE;
		} else {
			return TRUE;
		}
	}

	public function insert(){

		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			if ($this->form_validation->run($this, 'address') == FALSE){
				
			} else {

				$data=array(
					'address' => $this->input->post('address'),
					'phone' => $this->input->post('phone'),
					'email' => $this->input->post('email')
				);

				$this->db->insert('address',$data);
				redirect('cms/address/index');
			}
		}
			$this->load->view('cms/header_view');
			$this->load->view('cms/address_add_view');
			$this->load->view('cms/footer_view');	
	}

	public function update($id){

		$row = $this->m->get($id);
		$data['r'] = $row;
		$id = $this->input->post('id');

		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			if ($this->form_validation->run($this, 'address') == FALSE){
				
			} else {
				$data=array(
					'address' => $this->input->post('address'),
					'phone' => $this->input->post('phone'),
					'email' => $this->input->post('email')
				);
				
				
				$this->db->where('id', $id);
				$this->db->update('address',$data);
				
				redirect('cms/address');
			}
		}
		$this->load->view('cms/header_view');
		$this->load->view('cms/address_edit_view',$data);
		$this->load->view('cms/footer_view');
	}

	public function delete($id){
		$id = $this->db->where('id', $id);
		$this->db->delete('address');
		redirect('cms/address');
	}
}