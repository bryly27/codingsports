<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class products extends CI_Model {

    function get_products()
    {
        return $this->db->query("SELECT * FROM products")->result_array();
    }

    function get_products_price_asc()
    {
        return $this->db->query("SELECT * FROM products ORDER BY price ASC")->result_array();
    }

     function get_products_price_desc()
    {
        return $this->db->query("SELECT * FROM products ORDER BY price DESC")->result_array();
    }

    function search($name)
    {
        return $this->db->query("SELECT * FROM products WHERE name LIKE '$name%'")->result_array();
    }

    function type($type)
    {
        return $this->db->query("SELECT * FROM products WHERE type = '$type' ORDER BY name ASC")->result_array();
    }

}
