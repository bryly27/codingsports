<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin_product extends CI_Model {

    function get_products()
    {
        return $this->db->query("SELECT * FROM products")->result_array();
    }

    function get_product($id)
    {
        return $this->db->query("SELECT * FROM products WHERE id = '$id'")->row_array();
    }

    function search($name)
    {
        return $this->db->query("SELECT * FROM products WHERE name LIKE '$name%' OR id LIKE '$name%' ")->result_array();
    }

    function delete($id)
    {
        return $this->db->query("DELETE FROM products WHERE id = ?", $id)->row_array;
    }

    function add_product($product)
    {
        $query = "INSERT INTO products (name, description, photo, price, category, type, gender, color, brand, model, inventory_count, created_at) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        $values = array($product['name'], $product['description'], $product['photo'], $product['price'], $product['category'], $product['type'], $product['gender'], $product['color'], $product['brand'], $product['model'], $product['inventory_count'], date("Y-m-d, H:i:s"));
        return $this->db->query($query, $values);
    }

    function update($product, $id)
    {
        $query = "UPDATE products SET name=?, description=?, photo=?, price=?, category=?, type=?, gender=?, color=?, brand=?, model=?, inventory_count=?, updated_at=? WHERE id = $id";
        $values = array($product['name'], $product['description'], $product['photo'], $product['price'], $product['category'], $product['type'], $product['gender'], $product['color'], $product['brand'], $product['model'], $product['inventory_count'], date("Y-m-d, H:i:s"));
        return $this->db->query($query, $values);
    }

    function get_customer_info($order)
    {
        return $this->db->query("SELECT addresses.*, customers.*, orders.* FROM addresses LEFT JOIN customers ON addresses.cust_id = customers.id LEFT JOIN orders ON customers.id = orders.cust_id WHERE orders.id = '$order'")->row_array();
    }

    function get_order_info($order)
    {
        return $this->db->query("SELECT order_items.*, orders.*, products.* FROM products LEFT JOIN order_items ON products.id = order_items.product_id LEFT JOIN orders ON order_items.order_id = orders.id WHERE orders.id = '$order'")->result_array();
    }


    // function get_product($email)
    // {
    //     return $this->db->query("SELECT * FROM  WHERE email = ?", array($email))->row_array();
    // }

    // function get_user($email)
    // {
    //     return $this->db->query("SELECT id, first_name, last_name, email, password FROM users WHERE email = ?", $email)->row_array();
    // }



    // function get_messages()
    // {
    //     return $this->db->query("SELECT messages.*, users.first_name, users.last_name FROM messages LEFT JOIN users ON users.id = messages.user_id ORDER BY id DESC")->result_array();
    // }

    // function add_message($message)
    // {
    //     $query = "INSERT INTO messages (user_id, message, created_at) VALUES (?,?,?)";
    //     $values = array($message['user_id'], $message['message'], date("Y-m-d, H:i:s"));
    //     return $this->db->query($query, $values);
    // }

    // function get_comments()
    // {
    //     return $this->db->query("SELECT comments.*, users.first_name, users.last_name FROM comments LEFT JOIN users ON users.id = comments.user_id")->result_array();
    // }

    // function add_comment($comment)
    // {
    //     $query = "INSERT INTO comments (messages_id, user_id, comment, created_at) VALUES (?,?,?,?)";
    //     $values = array($comment['messages_id'], $comment['user_id'], $comment['comment'], date("Y-m-d, H:i:s"));
    //     return $this->db->query($query, $values);
    // }

}
