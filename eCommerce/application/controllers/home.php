<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller
{
	public function index()
	{
		$this->load->model('products');
		$info['products'] = $this->products->get_products();
		$this->load->view('main', $info);
	}

	public function order_asc()
	{
		$this->load->model('products');
		$info['products'] = $this->products->get_products_price_asc();
		$this->load->view('main', $info);
	}

	public function order_desc()
	{
		$this->load->model('products');
		$info['products'] = $this->products->get_products_price_desc();
		$this->load->view('main', $info);
	}

	public function search()
	{
		$this->load->model('products');
		$name = $this->input->post('search');
		$info['products'] = $this->products->search($name);
		$this->load->view('main', $info);
	}

	public function product($type)
	{
		$this->load->model('products');
		$info['products'] = $this->products->type($type);
		$this->load->view('main', $info);
	}


}
