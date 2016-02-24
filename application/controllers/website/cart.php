<?php 

class Cart extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('website/cart_model','m');
	}

	public function index(){
		$data['cart'] = $this->cart->contents();
		$this->load->view('website/header_view');
		$this->load->view('website/cart_view', $data);
		$this->load->view('website/footer_view');
	}

	public function add(){

		$id = $this->uri->segment(4);
		$product = $this->m->get($id);
		
		$data = [
			'id' => $product->id,
			'name' => $product->title,
			'qty' => 1,
			'price' => $product->price
		];

		$this->cart->insert($data);
		redirect('website/products/show/'.$id);
		
	}
	
	public function update(){
		$data = [
				'rowid' => '6364d3f0f495b6ab9dcf8d3b5c6e0b01',
				'qty' => 2
		];

		$this->cart->update($data);
	}

	public function total(){
		$total = $this->cart->total();
	}

	public function remove($rowid){
		
		$this->cart->update( [
				'rowid' => $rowid,
				'qty' => 0
		]);
		$this->index();
	}

	public function destroy(){
		$this->cart->destroy();
	}
}