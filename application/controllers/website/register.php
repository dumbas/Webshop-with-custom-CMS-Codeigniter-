<?php
class Register extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('website/register_model','m');
	}
	public function index(){

		$this->load->view('website/header_view');
		$this->load->view('website/register_view');
		$this->load->view('website/footer_view');
	}

	public function new_member(){
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			if ($this->form_validation->run($this, 'register') == FALSE){
				$this->load->view('website/header_view');
				$this->load->view('website/register_view');
				$this->load->view('website/footer_view');
			}else{
				$data = array(
					'username' => $this->input->post('username'),
					'password' => sha1($this->input->post('password')),
					'passconf' => sha1($this->input->post('passconf')),
					'name' => $this->input->post('name'),
					'city' => $this->input->post('city'),
					'address' => $this->input->post('address'),
					'phone' => $this->input->post('phone'),
					'email' => $this->input->post('email')
				);
				$this->db->insert('costumers',$data);
				
			}
			$this->load->view('website/header_view');
			$this->load->view('website/register_success_view');
			$this->load->view('website/footer_view');
		}
			
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


	public function get($id){
		$this->m->get($id);

		$this->load->view('website/header_view');
		$this->load->view('website/products_view');
		$this->load->view('website/footer_view');
		
	}

	function show($id){

		$data = $this->get_data_from_db($id);
		$data['id'] = $id;
		$this->load->view('website/header_view');
		$this->load->view('website/products_view',$data);
		$this->load->view('website/footer_view');
	}

	function get_data_from_db($update_id){

		$query = $this->get_where($update_id);
		foreach($query->result() as $row){

			$data['title'] = $row->title;
			$data['price'] = $row->price;
			$data['userfile'] = $row->userfile;
			$data['content'] = $row->content;
		}

		if (!isset($data)){
			
			echo "Sorry the item is not available";
			die();
			
		}

		return $data;

	}

	function get_where($id){
		
		$query = $this->m->get_where($id);
		return $query;
	}
}
