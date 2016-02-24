<?php 

class Checkout extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('website/checkout_model','m');
	}

	public function index(){
		
		$this->load->view('website/header_view');
		$this->load->view('website/checkout_view');
		$this->load->view('website/footer_view');
	}

	public function get($id){
		
		$id = $this->session->userdata('user_id');
		$row = $this->m->get($id);
		$data['r'] = $row;
		
		$this->load->view('website/header_view');
		$this->load->view('website/checkout_view',$data);
		$this->load->view('website/footer_view');
	}


	public function order(){
		$id = $this->session->userdata('user_id');
		$cart = $this->cart->contents();
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			if ($this->form_validation->run($this, 'order') == FALSE){
			} else {
				foreach ($cart as $row){
					$data = array(
						'name' => $this->input->post('name'),
						'city' => $this->input->post('city'),
						'address' => $this->input->post('address'),
						'phone' => $this->input->post('phone'),
						'email' => $this->input->post('email'),
						'product_id' => $row['id'],
						'qty' => $row['qty']
					);
					$this->db->insert('orders',$data);
					$this->cart->destroy();
				}
				redirect('website/checkout/success');
			}
			$this->get($id);
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
	
	public function success(){
		$this->load->view('website/header_view');
		$this->load->view('website/success_view');
		$this->load->view('website/footer_view');
	}
	

}