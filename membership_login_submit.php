<?php
    require 'connection.php';
    session_start();
    $username=mysqli_real_escape_string($con,$_POST['username']);
    if($username=='demouser'){
      $email='demouser@gmail.com';
    } else {
        echo "Membership doesn't exist for the user. Directing you to login page to create a general account...";
        ?>
        <meta http-equiv="refresh" content="5;url=login.php" />
        <?php
    }
    $password=md5(md5(mysqli_real_escape_string($con,$_POST['password'])));
    if(strlen($password)<6){
        echo "Password should have atleast 6 characters. Redirecting you back to membership login page...";
        ?>
        <meta http-equiv="refresh" content="2;url=membership_page.php" />
        <?php
    }
    $user_authentication_query="select id,email from users where email='$email' and password='$password'";
    $user_authentication_result=mysqli_query($con,$user_authentication_query) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($user_authentication_result);
    if($rows_fetched==0){
        //no user
        //redirecting to same login page
        ?>
        <script>
            window.alert("Wrong username or password");
        </script>
        <meta http-equiv="refresh" content="1;url=membership_page.php" />
        <?php
        //header('location: login');
        //echo "Wrong email or password.";
    }else{
        $row=mysqli_fetch_array($user_authentication_result);
        $_SESSION['email']=$email;
        $_SESSION['id']=$row['id'];  //user id
        header('location: discountproducts.php');
    }
    
 ?>