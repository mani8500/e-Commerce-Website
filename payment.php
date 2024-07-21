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
	<h3 align="center">Pay With Paypal</h3>
	<br>
       	<div style="padding-top:50px">
           <form action="success.php" method="post">
               <img src="img/paypal.png" alt="Paypal" style="width:50px;height:50px;">
               <h4>The safer, easier way to pay online.</h4>
               <input type="image" src="img/submit.png" style="width:108px;height:36px;" name="submit" alt="Submit">
           </form>
        </div> 
       </div>
      </div>
   </body>
</html>

