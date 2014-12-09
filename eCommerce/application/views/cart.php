
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>SHIET</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
      
      /*.form-group {
        margin-bottom: 0px;
      }*/
      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }


      }
    </style>
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script> 
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Shoe Store</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Shopping Cart</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div><!--/.container-fluid -->
    </nav>

    <div class="container">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Item</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>$50.32</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>$39.43</td>
          </tr>
          <tr>
            <td>3</td>
            <td colspan="2">Larry the Bird</td>
            <td>$5.23</td>
          </tr>
        </tbody>
      </table>
    </div><!-- /table -->

    <p class="container text-right">Sum amount: $100.04</p>
     <div class="container">
       <button class="btn btn-primary pull-right" type="submit" value='submit'>Continue shopping</button>
     </div>
     <div class="container">
       <form class="form-horizontal span8" action="" role="form" method="post">
         <h3>Shipping Information</h3>
         <div class="form-group">
           <label class="col-sm-3 control-label">First Name:</label>
           <div class="col-sm-9">
             <input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname">
           </div>
         </div>
         <div class="form-group">
           <label class="col-sm-3 control-label">Last Name:</label>
           <div class="col-sm-9">
             <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname">
           </div>
         </div>
         <div class="form-group">
           <label class="col-sm-3 control-label">Address:</label>
           <div class="col-sm-9">
             <input type="text" class="form-control" id="address" placeholder="Address" name="address">
           </div>
         </div>
         <div class="form-group">
           <label class="col-sm-3 control-label">Address 2:</label>
           <div class="col-sm-9">
             <input type="text" class="form-control" id="address2" placeholder="Address 2" name="address2">
           </div>
         </div>
         <div class="form-group">
           <label class="col-sm-3 control-label">City:</label>
           <div class="col-sm-9">
             <input type="text" class="form-control" id="city" placeholder="City" name="city">
           </div>
         </div>
         <div class="form-group">
           <label class="col-sm-3 control-label">State:</label>
           <div class="col-sm-9">
             <input type="text" class="form-control" id="state" placeholder="State" name="state">
           </div>
         </div>
         <div class="form-group">
           <label class="col-sm-3 control-label">Zipcode:</label>
           <div class="col-sm-9">
             <input type="text" class="form-control" id="zipcode" placeholder="Zipcode" name="zip">
           </div>
         </div>
         <h3>Billing Information</h3>
         <div class="checkbox">
             <label>
                <!-- More info needed to pass info? -->
               <input type="checkbox"> Same as shpping
             </label>
          </div>
          <!-- Copy and paste from above - double check -->
          <div class="form-group">
            <label class="col-sm-3 control-label">First Name:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="bfirstname" placeholder="First Name" name="bfirstname">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Last Name:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="blastname" placeholder="Last Name" name="blastname">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Address:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="baddress" placeholder="Address" name="baddress">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Address 2:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="baddress2" placeholder="Address 2" name="baddress2">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">City:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="bcity" placeholder="City" name="bcity">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">State:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="bstate" placeholder="State" name="bstate">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Zipcode:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="bzipcode" placeholder="Zipcode" name="bzip">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Card:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="card" placeholder="CC Number" name="card">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Security Code:</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="seccode" placeholder="Security Code" name="seccode">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Expiration:</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="expirationmo" placeholder="Exp Month" name="exp_month">
            </div>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="expirationyr" placeholder="Exp Year" name="exp_year">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-10 col-sm-10">
              <button type="submit" class="btn btn-primary">Pay</button>
            </div>
          </div>
       </form>
     </div>
    <!-- Le javasc======================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>


  </body>
</html>

