<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_prod extends CI_Controller
{

    public function index()
    {
      $this->load->model('admin_product');
      $info['products'] = $this->admin_product->get_products();
      $this->load->view('admin_products', $info);
    }

    public function search()
    {
      $this->load->model('admin_product');
      $name = $this->input->post('search');
      $info['products'] = $this->admin_product->search($name);
      $this->load->view('admin_products', $info);
    }

    public function delete($id)
    {
      $this->load->model('admin_product');
      $this->admin_product->delete($id);
      redirect('/admin_prod');
    }

    public function edit($id)
    {
      $this->load->model('admin_product');
      $info['products'] = $this->admin_product->get_product($id);
      $this->load->view('admin_edit', $info);
    }

    public function update()
    {
      $this->load->model('admin_product');
      $product = array(
          "name" => $this->input->post('name'),
          "description" => $this->input->post('description'),
          "photo" => $this->input->post('photo'),
          "price" => $this->input->post('price'),
          "category" => $this->input->post('category'),
          "type" => $this->input->post('type'),
          "gender" => $this->input->post('gender'),
          "color" => $this->input->post('color'),
          "brand" => $this->input->post('brand'),
          "model" => $this->input->post('model'),
          "inventory_count" => $this->input->post('inventory_count'),
        );
      $this->admin_product->update($product, $this->input->post('submit'));
      redirect('/admin_prod');

    }

    public function add()
    {
      if($this->input->post('edit')=='add')
      {
        $this->load->view('admin_add');
      }
      else
      {
      $this->load->model('admin_product');
        $product = array(
            "name" => $this->input->post('name'),
            "description" => $this->input->post('description'),
            "photo" => $this->input->post('photo'),
            "price" => $this->input->post('price'),
            "category" => $this->input->post('category'),
            "type" => $this->input->post('type'),
            "gender" => $this->input->post('gender'),
            "color" => $this->input->post('color'),
            "brand" => $this->input->post('brand'),
            "model" => $this->input->post('model'),
            "inventory_count" => $this->input->post('inventory_count'),
          );
        $this->admin_product->add_product($product);  
        redirect('/admin_prod');
      }
    }
    

    public function logOff()
    {
      $this->session->sess_destroy();
      redirect('/');
    }

}
