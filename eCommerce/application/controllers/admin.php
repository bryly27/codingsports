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
    }

    public function show_orders()
    {
      $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
      $this->form_validation->set_rules('password', 'Password', 'trim|required');

      if($this->form_validation->run())
      {
        $this->load->model('orders');
        // $this->
      }



    }


}
