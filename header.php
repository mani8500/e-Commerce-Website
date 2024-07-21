<nav class="navbar navbar-inverse navabar-fixed-top">
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                       <a href="index.php" class="navbar-brand">Web Programming Ecommerce</a>
                   </div>
                   
                   <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-right">
                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
			      <?php
                                if($_SESSION['id']==2){
                                ?>
                                <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                                <li><a href="checklist.php"><span class="glyphicon glyphicon-check"></span> Check List</a></li>
                                <li><a href="site.php"><span class="glyphicon glyphicon-pushpin"></span> Site</a></li>
                                <li><a href="about_us.php"><span class="glyphicon glyphicon-info-sign"></span> About Us</a></li>
                                <li><a href="discountproducts.php"><span class="glyphicon glyphicon-star"></span> Membership Page</a></li>
                                <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                                <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                               <?php
                               }else{
                                ?>
                                <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                                <li><a href="checklist.php"><span class="glyphicon glyphicon-check"></span> Check List</a></li>
                                <li><a href="site.php"><span class="glyphicon glyphicon-pushpin"></span> Site</a></li>
                                <li><a href="about_us.php"><span class="glyphicon glyphicon-info-sign"></span> About Us</a></li>
                                <li><a href="accessdenied.php"><span class="glyphicon glyphicon-star"></span> Membership Page</a></li>
                                <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                                <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                                <?php
                                }
                                ?>
                           <?php
                           }else{
                            ?>
                           <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                           <li><a href="checklist.php"><span class="glyphicon glyphicon-check"></span> Check List</a></li>
                           <li><a href="site.php"><span class="glyphicon glyphicon-pushpin"></span> Site</a></li>
                           <li><a href="about_us.php"><span class="glyphicon glyphicon-info-sign"></span> About Us</a></li>
                           <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                           <li><a href="membership_page.php"><span class="glyphicon glyphicon-star"></span> Membership Page</a></li>
                           <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                           <?php
                           }
                           ?>
                           
                       </ul>
                   </div>
               </div>
</nav>