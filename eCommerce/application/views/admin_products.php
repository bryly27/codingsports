<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<!-- Custom CSS Style-->

<!-- jquery always goes before the bootstrap java script -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link href="/assets/stylesheets/products.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div id="navbar">
      <ul class="nav navbar-nav navbar-left">
      <li><a href="/admin/show_orders">Dashboard</a></li>
      <li><a href="#">Orders</a></li>
      <li><a href="/admin/show_products">Products</a></li>
      <li class='logoff'><a href="#">Log Off</a></li>
        </ul>
    </div>
  </nav>

  <div class='search'>
    <form action="/admin_prod/search" method='post' class="navbar-form navbar-right">
     <div class="input-group">
       <input type="Search" name='search' placeholder="Search..." class="form-control" />
       <div class="input-group-btn">
         <button class="btn btn-info">
              <span class="glyphicon glyphicon-search"></span>
         </button>
       </div>
     </div>
    </form>
  </div>
    <div class='select_search'>
      <form action='/admin_prod/add' method='post'>
        <button class="btn btn-sm btn-primary active" type='submit'> Add New Product</button>
        <input type='hidden' name='edit' value='add'>
      </form>
    </div>
    <div id='table' class="table-responsive">
      <table class="table table-striped table-hover">
        <thead>
          <th>Picture</th>
          <th>ID</th>
          <th>Name</th>
          <th>Inventory Count</th>
          <th>Quantity Sold</th>
          <th>Action</th>
        </thead>
      <tbody>
<?php  
        foreach ($products as $product) 
        { ?>
          <tr>
            <td><img class='img' src='<?= $product['photo'] ?>'></td>
            <td><?= $product['id'] ?></td>
            <td><?= $product['name'] ?></td>
            <td><?= $product['inventory_count'] ?></td>
            <td><?= $product['quantity_sold'] ?></td>
            <td id='action'>
            <a href='/admin_prod/edit/<?= $product['id'] ?>'>edit</a>
            <a href='/admin_prod/delete/<?= $product['id'] ?>'>delete</a>
            </td>
        </tr>
<?php   } ?>
      
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
