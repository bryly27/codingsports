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
       // $this->load->view('admin');
       // $this->load->view('orders');
       $this->load->view('products');
       // $this->load->view('orders');
    }
}
