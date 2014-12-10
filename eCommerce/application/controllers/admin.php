<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public $current_page;

    public function __construct()
    {
        parent::__construct();

        $this->current_page = 1;

        $this->output->enable_profiler();
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

              if($admin_data)
              {
                  if($admin_data->password == $password and $admin_data->email == $email)
                  {
                    $current_page = 1;
                    redirect('/admin/show_orders');
                  }
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
        $orders_id = $this->build_pagination($this->current_page);

        // var_dump($orders_id);
        // die();

        $this->load->model('order');

        $order_data = $this->order->get_all_orders(array('status' => $orders_option), $orders_id);
        $this->load->view('orders', array('orders' => $order_data));

    }


    public function build_pagination($current_page)
    {
        $pages = array();
        $pages['current_page'] = $current_page;
        $prev_page = $current_page - 1;
        $next_page = $current_page + 1;


        $this->load->model('order');
        $order_count_all = $this->order->get_count_all();

        $limit = 5;
        $count_pages = ceil($order_count_all / $limit);

        if($current_page == 0)
          $current_page = 1;

        for($i=1; $i<=$count_pages; $i++)
        {
            $offset = ($i-1) * $limit;
            $pages[$i] = $offset;
        }

        $orders_id = $this->order->get_orders_per_page($pages[$current_page], $limit);

        $array_order_id = array();
        foreach($orders_id as $row)
        {
          $array_order_id[] = $row->id;
        }

        $this->session->set_userdata('pages', $pages);
        // $this->session->set_userdata('orders_page', $order_id);

        // var_dump($array_order_id);
        // die();

        return $array_order_id;

    }

    public function show_paginated_orders($current_page)
    {
        if($current_page > 0)
        {
            $this->current_page = $current_page;
            $this->show_orders();
        }
    }



    public function search_orders()
    {
        $search = $this->input->post('search');

        $this->load->model('order');
        $order_data = $this->order->get_all_orders(array('search' => $search), null);
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


















