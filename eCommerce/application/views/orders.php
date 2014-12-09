<?php
    var_dump($orders);
    die();

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
<link href="assets/stylesheets/orders.css" rel="stylesheet">
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
    <div class='search'>
        <form action="" class="navbar-form navbar-right">
           <div class="input-group">
               <input type="Search" placeholder="Search..." class="form-control" />
               <div class="input-group-btn">
                   <button class="btn btn-info">
                        <span class="glyphicon glyphicon-search"></span>
                   </button>
               </div>
           </div>
        </form>
    </div>
    <div class='select_search'>
        <form>
            <select class='form-control'>
                <option>Show All</option>
                <option>Order In</option>
                <option>Process</option>
                <option>Shipped</option>
            </select>
        </form>
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
                        <td><?=$order->id?></td>
                        <td>9/6/2014</td>
                        <td>123 dojo way 98005</td>
                        <td>$150.99</td>
                        <td class='select_status'>
                            <select class='form-control'>
                                <option>Shipped</option>
                                <option>Order In Process</option>
                                <option>Cancelled</option>
                            </select>
                        </td>
                    </tr>
                }


                    <tr>
                        <td><a href='#'>100</a></td>
                        <td>Bob</td>
                        <td>9/6/2014</td>
                        <td>123 dojo way 98005</td>
                        <td>$150.99</td>
                        <td class='select_status'>
                            <select class='form-control'>
                                <option>Shipped</option>
                                <option>Order In Process</option>
                                <option>Cancelled</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td><a href='#'>100</a></td>
                        <td>Bob</td>
                        <td>9/6/2014</td>
                        <td>123 dojo way 98005</td>
                        <td>$150.99</td>
                        <td class='select_status'>
                            <select class='form-control'>
                                <option>Shipped</option>
                                <option>Order In Process</option>
                                <option>Cancelled</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td><a href='#'>100</a></td>
                        <td>Bob</td>
                        <td>9/6/2014</td>
                        <td>123 dojo way 98005</td>
                        <td>$150.99</td>
                        <td class='select_status'>
                            <select class='form-control'>
                                <option>Shipped</option>
                                <option>Order In Process</option>
                                <option>Cancelled</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td><a href='#'>100</a></td>
                        <td>Bob</td>
                        <td>9/6/2014</td>
                        <td>123 dojo way 98005</td>
                        <td>$150.99</td>
                        <td class='select_status'>
                            <select class='form-control'>
                                <option>Shipped</option>
                                <option>Order In Process</option>
                                <option>Cancelled</option>
                            </select>
                        </td>
                    </tr>
            </tbody>
        </table>

        <div class='pagination'>
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
