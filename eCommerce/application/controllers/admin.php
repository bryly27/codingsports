<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->output->enable_profiler();
        $this->load->library('form_validation');
        $this->load->helper('date');
    }

    public function index()
    {
       $this->load->view('admin');
       if($this->input->post('action') == 'login')
       {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if($this->form_validation->run() == true)
          redirect('/admin/show_orders');
       }
    }

    public function show_orders($orders_option = null)
    {

      $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
      $this->form_validation->set_rules('password', 'Password', 'trim|required');

      if($this->form_validation->run() == false)
      {
        $this->load->model('order');
        $order_data = $this->order->get_all_orders(array('status' => $orders_option));
        $this->load->view('orders', array('orders' => $order_data));
      }

    }

    public function search_orders()
    {
        $search = $this->input->post('search');

        $this->load->model('order');
        $order_data = $this->order->get_all_orders(array('search' => $search));
        $this->load->view('orders', array('orders' => $order_data));

    }

      public function show_products()
      {
          $this->load->view('products');
      }

      public function show_products()
      {
          $this->load->view('products');
      }

      public function logoff()
      {
          redirect('/admin');
      }



}


















