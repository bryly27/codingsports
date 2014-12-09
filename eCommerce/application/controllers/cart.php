<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller 
{
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model("Cart_model");
	}

	public function index()
	{
		if(!$this->session->userdata('cart'))
		{
			$cart = array(
								'total_items' => 0,
 									);
			$this->session->set_userdata('cart', $cart);
		}
		$cart = $this->session->userdata('cart');
		$show_cart = array();
		$total_price = 0;
		
		foreach ($cart as $key => $value) 
		{
			if($key != 'total_items')
			{
				$item = $this->Cart_model->get_item($key);
				$show_cart[] = array(
													'id' => $item['id'],
													'quantity' => $value,
													'name' => $item['name'],
													'price' => ($item['price']),
														);
				$total_price += ($item['price'] * $value);
			}

		}
		$show_cart['total_price'] = $total_price;
		$send['cart'] = $show_cart;
		// var_dump($send);
		// die();
		$this->load->view('cart', $send);
	
	}


	public function addToCart()
	{

		$product_id = $this->input->post('prod_id');
		$quantity = $this->input->post('quantity');
		// $post_data = $this->input->post();
		$item = $this->Cart_model->get_item($product_id); //returns ALL info about the product

		$cart = $this->session->userdata('cart');
		
		if(array_key_exists($product_id, $cart))
		{
			$cart['total_items'] = $cart['total_items'] + $quantity;
			$cart[$product_id] = $cart[$product_id] + $quantity;
			$this->session->set_userdata('cart', $cart);
		}
		else
		{
			$cart['total_items'] = $cart['total_items'] + $quantity;
			$cart[$product_id] = $quantity;
			$this->session->set_userdata('cart', $cart);
		}
		redirect(base_url());
	}

	public function delete($id)
	{
		$cart = $this->session->userdata('cart');
		$total_items = $this->session->userdata('cart')['total_items'];
		$total_items = $total_items - $cart[$id];
		$cart['total_items'] = $total_items;
		unset($cart[$id]);
		$this->session->set_userdata('cart', $cart);
		redirect('/cart');
	}

	public function destroy()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function pay()
	{
		$post_data = $this->input->post();
		var_dump($post_data);
		die();
	}

}