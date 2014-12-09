<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<!-- Custom CSS Style-->
<link href="assets/stylesheets/products.css" rel="stylesheet">
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
            <button class="btn btn-sm btn-primary active" type='submit'> Add New Product</button>
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
                    <tr>
                        <td>
                            <img id='image_product' src='assets/images/kswiss_shoe.png' class="img-responsive" alt="Responsive image">
                        </td>
                        <td>1</td>
                        <td>Shoe</td>
                        <td>255</td>
                        <td>1000</td>
                        <td id='action'>
                            <a href='#'>edit</a>
                            <a href='#'>delete</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img id='image_product' src='assets/images/kswiss_shoe.png' class="img-responsive" alt="Responsive image">
                        </td>
                        <td>1</td>
                        <td>Shoe</td>
                        <td>255</td>
                        <td>1000</td>
                        <td id='action'>
                            <a href='#'>edit</a>
                            <a href='#'>delete</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img id='image_product' src='assets/images/kswiss_shoe.png' class="img-responsive" alt="Responsive image">
                        </td>
                        <td>1</td>
                        <td>Shoe</td>
                        <td>255</td>
                        <td>1000</td>
                        <td id='action'>
                            <a href='#'>edit</a>
                            <a href='#'>delete</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img id='image_product' src='assets/images/kswiss_shoe.png' class="img-responsive" alt="Responsive image">
                        </td>
                        <td>1</td>
                        <td>Shoe</td>
                        <td>255</td>
                        <td>1000</td>
                        <td id='action'>
                            <a href='#'>edit</a>
                            <a href='#'>delete</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img id='image_product' src='assets/images/kswiss_shoe.png' class="img-responsive" alt="Responsive image">
                        </td>
                        <td>1</td>
                        <td>Shoe</td>
                        <td>255</td>
                        <td>1000</td>
                        <td id='action'>
                            <a href='#'>edit</a>
                            <a href='#'>delete</a>
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
