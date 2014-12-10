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
          $email = $this->input->post('email');
          $password = $this->input->post('password');

          $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
          $this->form_validation->set_rules('password', 'Password', 'trim|required');

           if($this->form_validation->run() == true)
           {
              $this->load->model('admin_model');
              $admin_data = $this->admin_model->get_admin_by_email($email);

              if($admin_data->password == $password)
              {
                redirect('/admin/show_orders');
              }
              else
                redirect('/admin');
           }
           else
           {
              redirect('/admin');
           }

        }

    }

    public function show_orders($orders_option = null)
    {
        $this->load->model('order');
        $order_data = $this->order->get_all_orders(array('status' => $orders_option));
        $this->load->view('orders', array('orders' => $order_data));
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
        redirect('/admin_prod/index');
      }

      public function logoff()
      {
          redirect('/admin');
      }



}


















