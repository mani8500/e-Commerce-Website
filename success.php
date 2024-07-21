<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>WP Ecommerce</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'payment_header.php';
           ?>
        <div align="center">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
	<h3 align="center">Payment Successful</h3>
	<br>
       	<div>
            <img src="img/success.png" alt="Paypal" style="width:250px;height:250px;">
            <h4>Click here to continue shopping - <a href="products.php"><span class="glyphicon glyphicon-th-list"></span> Products</a></h4>
        </div> 
       </div>
      </div>
   </body>
</html>

