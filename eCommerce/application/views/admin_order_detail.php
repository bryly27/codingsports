<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<!-- Custom CSS Style-->
<link href="/assets/stylesheets/order_detail.css" rel="stylesheet">
<!-- jquery always goes before the bootstrap java script -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div id="navbar">
            <ul class="nav navbar-nav navbar-left">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Orders</a></li>
            <li><a href="#">Products</a></li>
            <li class='logoff'><a href="#">Log Off</a></li>
            </ul>
        </div>
    </nav>
      <div id='customer_info'>
        <div id="shipping_info">
            <p>Order ID: <?= $products[0]['id'] ?></p>
            <p>Name: <?= $products[0]['first_name'].' '. $products[0]['last_name'] ?></p>
            <p>Address: <?= $products[0]['address'].' '. $products[0]['address2'] ?></p>
            <p>City: <?= $products[0]['city'] ?></p>
            <p>State: <?= $products[0]['state'] ?></p>
            <p>Zip: <?= $products[0]['zip_code'] ?></p>
        </div>

        <div id="billing_info">
            <p>Name: <?= $products[0]['first_name'].' '. $products[0]['last_name'] ?></p>
            <p>Address: <?= $products[0]['address'].' '. $products[0]['address2'] ?></p>
            <p>City: <?= $products[0]['city'] ?></p>
            <p>State: <?= $products[0]['state'] ?></p>
            <p>Zip: <?= $products[0]['zip_code'] ?></p>
        </div>
    </div>
    <div id='table' class="table-responsive">
        <table class="table table-striped">
            <thead>
                    <th>ID</th>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
            </thead>
            <tbody>
<?php  
    // var_dump($products);
    // die();
        foreach ($products as $product) 
        {   ?>
                    <tr>
                        <td><?= $product['product_id'] ?></td>
                        <td><?= $product['name'] ?></td>
                        <td><?= $product['price'] ?></td>
                        <td><?= $product['quantity'] ?></td>
                        <td><?= $product['price'] * $product['quantity'] ?></td>
                    </tr>
<?php    } ?>

                    <tr class='table_totals'>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Sub Total</td>
                        <td>299.99</td>
                    </tr>

                    <tr class='table_totals'>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Shipping</td>
                        <td>9.99</td>
                    </tr>

                    <tr class='table_totals'>
                        <td>Status: Shipped</td>
                        <td></td>
                        <td></td>
                        <td>Total Price</td>
                        <td>399.99</td>
                    </tr>
            </tbody>
        </table>
    </div>

</body>
</html>
