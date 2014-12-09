<?php



    // $this->session->sess_destroy();
    // die();
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<!-- Custom CSS Style-->
<link href="/assets/stylesheets/orders.css" rel="stylesheet">
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
            <li><a href="/admin/show_products">Products</a></li>
            <li class='logoff'><a href="/admin/logoff">Log Off</a></li>
            </ul>
        </div>
    </nav>
    <div id='search'>
        <form action="/admin/search_orders" class="navbar-form navbar-right" method="post">
           <div class="input-group">
               <input type="Search" name="search" placeholder="Search..." class="form-control" />
               <div class="input-group-btn">
                   <button class="btn btn-info" type="submit">
                        <span class="glyphicon glyphicon-search"></span>
                   </button>
               </div>
           </div>
        </form>

    </div>
    <div id='select_search' class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            Order Status <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            <li><a href="/admin/show_orders/in_process">In Process</a></li>
            <li><a href="/admin/show_orders/shipped">Shipped</a></li>
            <li><a href="/admin/show_orders/new">New</a></li>
            <li class="divider"></li>
            <li><a href="/admin/show_orders/show_all">Show All</a></li>
        </ul>
    </div>
    <div id='table' class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                    <th>Order ID</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Billing Address</th>
                    <th>Total</th>
                    <th>Status</th>
            </thead>
            <tbody>
<?php
                foreach($orders as $order)
                {
?>
                    <tr>
                        <td><a href='#'><?=$order->id?></a></td>
                        <td><?=$order->first_name?></td>
                        <td><?=$order->created_at?></td>
                        <td><?=$order->address?> <?=$order->address2?> <?=$order->city?> <?=$order->state?> <?=$order->zip_code?></td>
                        <td><?=$order->order_total?></td>
                        <td id='select_status'>
                            <select class='form-control'>
                                <option><?=$order->order_status?></option>
                                <option>Order In Process</option>
                                <option>Cancelled</option>
                            </select>
                        </td>
                    </tr>
<?php
                }
?>
            </tbody>
        </table>

        <div id='pagination'>
        <nav>
            <ul class="pagination">
            <li class="disabled"><a href="#"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
            <li class="inactive"><a href="#">2 </a></li>
            <li class="inactive"><a href="#">3 </a></li>
            <li class="inactive"><a href="#">4 </a></li>
            <li class="enabled"><a href="#"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
            </ul>
        </nav>
        </div>
</body>
</html>
