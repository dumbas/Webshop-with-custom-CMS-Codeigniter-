<?php 

class Signin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('website/signin_model','m');
	}

	public function index(){

		$user = $this->session->userdata('user_id');
	    if (isset($user)){ 
	        redirect('website/home');
	    }   

		$this->load->view('website/header_view');
		$this->load->view('website/signin_view');
		$this->load->view('website/footer_view');
	}

	public function _proceed($username){

		$query = $this->get_where_custom('username', $username);
		
		foreach ($query->result() as $row){
			$user_id = $row->id;
			$username = $row->username;
		}

		$this->session->set_userdata('user_id', $user_id);
		$this->session->set_userdata('username', $username);
		redirect('website/checkout/get/'.$user_id);
	}

	public function submit(){

		$this->form_validation->set_rules('username', 'Username', 'required|trim|strip_tags|min_length[2]');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|strip_tags|min_length[4]|callback_password_check');

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

	public function get_where_custom($col, $value){
		
		$query = $this->m->get_where_custom($col, $value);
		return $query;
	}

	function logout(){
		$this->session->unset_userdata('user_id', $user_id);
		$this->session->sess_destroy();
		redirect ('website/home');
	}

	

}
