<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->output->enable_profiler();
        $this->load->library('form_validation');
        $this->load->helper('date');
    }

    public function index()
    {
       $this->load->view('admin');
       if($this->input->post('action') == 'login')
          $this->show_orders();

       // $this->load->view('orders');
       // $this->load->view('products');
       // $this->load->view('orders');
    }

    public function show_orders()
    {
      $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
      $this->form_validation->set_rules('password', 'Password', 'trim|required');

      if($this->form_validation->run())
      {
        /* Begin - Arjun - In progress - 12/8 - 8:45pm  */

        $this->load->model('order');
        $order_data = $this->order->get_all_orders();
        $this->load->view('orders', array('orders' => $order_data));


        /* End - Arjun - In progress - 12/8 - 8:45pm  */
      }



    }


}