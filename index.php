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
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>Final Project - Web Programming</h1>
                       <p>Please scroll down to the overview section.</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>

           <div class="container">
               <div class="row">
                   <center>
                       <div>
                           <h2>Overview</h2>
                           <p>This website provides the experience of purchasing items from an Ecommerce website. There are several pages listed in the header above that provide information on the website, the usage and what components/technologies have been used and integrated. The inspiration for creating this website came from my interest in developing a good user interactive web application that would make use of functional components in Java script, PHP, AJAX and MySQL. The Web Programming course has provided me the opportunity to learn and strengthen my web development skills and provided a platform to showcase my learnings. This website is the outcome of my learnings from this course. As many of you know, Ecommerce is one of the fast growing, modern shopping experience which lets us purchase items online without having to wait in lines at the store. The <b>WP E-commerce website</b> is one such attempt in making that possible. The payment gateway I implemented in this is a <b>mock-up</b> and would not require any credentials or card information to finalize the purchase. Note that all the items displayed on this website, are my choice of collection and are not original items. <br><br>I would like the users accessing this webpage to sign up to create an account and login using the same credentials. Once you have logged in, you would be able to access the products page and add items to the cart. Please reference to the <a href="site.php"><span class="glyphicon glyphicon-pushpin"></span> <b>Site</b></a> page for more information on using the website. The Shop Now button above will take you to the products page to show the users the list of available products. You can also click on one of the images below to proceed to the products page.<br><br></p>
<h4>Hope you have fun using the WP Ecommerce web application!</p>
                       </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/camera.jpg" alt="Camera">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Cameras</p>
                                        <p>Choose among the best available in the world.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/watch.jpg" alt="Watch">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Watches</p>
                                    <p>Original watches from the best brands.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/shirt.jpg" alt="Shirt">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Shirts</p>
                                   <p>Our exquisite collection of shirts.</p>
                               </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/d1.jpg" alt="Shirt">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Dresses</p>
                                   <p>Our exquisite collection of dresses.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           
        </div>
    </body>
</html>