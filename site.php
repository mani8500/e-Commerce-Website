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
            require 'header.php';
           ?>
	   <div class="container"
                <div class="row">
                    <div>
                        <h1><b>Site</b></h1>
                    </div>
		   <div>
		       <p> Here is the description and usage of the site:
<ul>
<li> All the online shoppers are the target audience for this website. This is an E-commerce solution that demonstrates the use of various technologies. </li>
<li> The users can purchase items available in the catalog (spoof of purchase experience). They can also navigate to a special membership section that shows the list of discounted prices for all the items in the catalog. </li>
<li> The problem I am trying to solve is reliability and the complexity of handling sessions in web navigation. This also shows the importance of consistency in design that constitutes to the look and feel, for a satisfying user experience. </li>
<li> I want the users to try out all the links on the checklist page and navigate through the website in this series of actions -
<ol type="1">
  <li>Sign Up</li>
  <li>Login</li>
  <li>Add items to cart</li>
  <li>Remove items (if necessary)</li>
  <li>Checkout</li>
  <li>Payment (dummy)</li>
</ol> 
</li>
<li> In case of the general user trying to access the membership page with the credentials, <b>Login:</b> demouser and <b>password:</b> ThisIsForWPClass, they can access the discounts page that has the items with the discounted prices.</li>
<br><br>
		   </div>
                 </div>
	   </div>
        </div>
    </body>
</html>