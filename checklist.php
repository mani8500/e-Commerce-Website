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
                        <h1><b>Checklist</b></h1>
                    </div>
		<div>
<ul>
<li> Checklist Page - <a href="checklist.php">/index.php/checklist</a> </li>
<li> Site Description Page - <a href="site.php">/index.php/site</a> </li>
<li> About Us Page - <a href="about_us.php">/index.php/aboutus</a> </li>
<li> Homepage - <a href="index.php">/index.php/</a> </li>
<li> Sign Up - <a href="signup.php">/index.php/signup</a> </li>
<li> Login - <a href="login.php">/index.php/login</a> </li>
<li> Membership Area – <a href="membership_page.php">/index.php/membership-page/</a> – this page will only show up once the membership user is logged in. The login details are in the General User section. If this user is not logged in it will redirect to a membership login page.</li>
<li> General User - The General User credentials are -
    <ul><b>login:</b> demouser</ul>
    <ul><b>password:</b> ThisIsForWPClass</ul>
</li>
<li> Javascript Usage – Used it on several pages within the website, more significantly in the cart page to add or remove items, payment page to redirect to the payment success page, membership page to redirect to membership login page if the demo user is not signed in and also to redirect to the discount products page if the demouser is signed in to the website.
<li> Ajax usage - <a href="products.php">/index.php/products</a> and <a href="cart.php">/index.php/cart</a> The cart page makes use of AJAX to add or remove items to and from the cart without requiring to refresh the page. The products page has a functionality of adding items to the cart for each individual item, the add to cart button will be changed to item added without requiring to re-render the components.</li>
<li> Database Usage – The sign up and login pages insert and pull the information from the users table in the database. The products and discount products pages pull the price information of the items from the items and membership_discounts tables respectively when adding the items to the cart. The user_items table keeps track of all the insertions and deletion of items in the user's cart in the session.</li>
<li> Theme - The website uses a custom theme written with css that makes use of bootstrap icons and I wrote all the styles in a CSS.This theme is consistent across all the pages in the website.</li>
<li> New Library Usage - I have used bootstrap libraries for icons and styling. I also integrated with PayPal to make a spoof of payments.</li>
</ul>
<br><br>
		   </div>
                 </div>
	   </div>
        </div>
    </body>
</html>