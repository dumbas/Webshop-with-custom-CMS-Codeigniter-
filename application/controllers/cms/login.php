<?php

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('cms/login_model','m');
	}

	function index(){
		
		$this->load->view('cms/login_view');
		
	}

	function _proceed($username){

		$query = $this->get_where_custom('username', $username);

		foreach ($query->result() as $row){
			$user_id = $row->id;
			$username = $row->username;
		}

		$this->session->set_userdata('user_id', $user_id);
		$this->session->set_userdata('username', $username);
		redirect('cms/home');
	}

	function submit(){

		$this->form_validation->set_rules('username', 'Username', 'required|min_length[2]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]|callback_password_check');

			if ($this->form_validation->run($this) == FALSE){
				$this->index();
			} else {
				$username = $this->input->post('username', TRUE);

				$this->_proceed($username);

			}
	}

	public function password_check($password){
		$password = sha1($this->input->post('password',TRUE));
		$username = $this->input->post('username', TRUE);
		$result = $this->m->password_check($username, $password);

			if ($result == FALSE){
				$this->form_validation->set_message('password_check', 'The username or password is incorect!');
				return FALSE;
			} else {
				return TRUE;
			}
		}

	function get_where_custom($col, $value){
		
		$query = $this->m->get_where_custom($col, $value);
		return $query;
	}

	function logout(){
		$this->session->unset_userdata('user_id', $user_id);
		$this->session->sess_destroy();
		redirect ('cms/login');
	}


}





		/*
		if ($this->form_validation->run($this) == FALSE){
			$this->index();
		} else {
			$username = $this->input->post('username');
			$password = sha1($this->input->post('password'));

			$this->load->model('login_model');
			$row = $this->model->validate($username, $password);

		

		if ($row != NULL){
			$session_userdata = array(
				'id' => $row->id,
				'username' => $this->input->post('username'),
				'password' => sha1($this->input->post('password')),
				'conection' => TRUE,
				);
		$this->session->set_userdata($session_userdata);
		redirect('cms/news');
		} else {
			echo $message = "Invalid username or password";
			redirect(base_url());
		}
		redirect(base_url());
	}
	}
*/



	