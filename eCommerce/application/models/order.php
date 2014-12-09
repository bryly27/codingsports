<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
    }

    public function create_order($order_data)
    {
        $this->db->insert('orders', $order_data);
    }

    public function delete_order($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('orders');
    }

    public function get_order_by_id($id)
    {
        $query = $this->db->get_where('orders', array('id' => $id));
        if($query->num_rows() > 0)
            return $query->result();
        return false;
    }

    public function get_all_orders()
    {
        // $query = $this->db->order_by('created_at', 'desc')->get('orders');
        $this->db->select ( 'orders.id, orders. customers.first_name, orders.created_at, ' );
        $this->db->from ( 'orders' );
        $this->db->join ( 'customers', 'Category.cat_id = Album.cat_id' , 'left' );
        $query = $this->db->get ();
        return $query->result ();

        if($query->num_rows() > 0)
            return $query->result();
        return false;
    }
}












