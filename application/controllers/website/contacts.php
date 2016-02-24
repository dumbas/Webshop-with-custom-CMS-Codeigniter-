<?php 

class Contacts extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('website/contacts_model','m');
	}

	public function index(){
		$data['contacts'] = $this->m->get_all();
		// Google Map -->
		$config['center'] = '42.125797,24.7564322';
		$config['zoom'] = '15';
		$this->googlemaps->initialize($config);

		$marker = array();
		$marker['position'] = '42.125797,24.7564322';
		$marker['infowindow_content'] = 'Век-Хотелски консумативи Пловдив, ул. "Скопие" 110';
		$this->googlemaps->add_marker($marker);
		$data['map'] = $this->googlemaps->create_map();
		// End Google Map 
		$this->load->view('website/header_view');
		$this->load->view('website/contacts_view',$data);
		$this->load->view('website/footer_view');
	}

	public function send_form(){
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			if ($this->form_validation->run($this, 'contacts') == FALSE){
				
			} else {
				$data=array(
					'name' => $this->input->post('name'),
					'phone' => $this->input->post('phone'),
					'email' => $this->input->post('email'),
					'content' => $this->input->post('content'),
					'date' => date('Y-m-d H:i:s')
				);
				
				$this->db->insert('contacts',$data);
				redirect('website/contacts');
			}
		}
		$this->index();
		
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
	
	
}