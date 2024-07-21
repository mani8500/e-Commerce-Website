<!--<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
//if(session_id() == '' || !isset($_SESSION)){session_start();}

//if (!isset($_SESSION["username"])) {header ("location:index.php");}


?>-->

<!doctype html>
<html lang="en">
  <head>
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

   
    <form method="POST"  style="margin-top:30px;">
      <div class="row">
        <div class="small-8">

          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Card Number</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="cardNumber" placeholder="Card Number" name="number_entered" required onblur="cardnumber(this)"><p id = "cardType"></p>
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Name</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Name" name="lname">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Month</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Month" name="address">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Year</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Year" name="city">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">CVV</label>
            </div>
            <div class="small-8 columns">
              <input type="password" id="right-label" placeholder="CVV Code" name="pin">
            </div>
          </div>
         
          <div class="row">
            <div class="small-4 columns">

            </div>
            <div class="small-8 columns">
              <input type="submit" id="right-label" value="Submit" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
              <input type="reset" id="right-label" value="Reset" required onclick="clearData(this)" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
            </div>
          </div>
        </div>
      </div>
    </form>


    <div class="row" style="margin-top:10px;">
      <div class="small-12">

      
      </div>
    </div>




    
    <script>
      $(document).foundation();
      var textInput = document.getElementById('cardNumber');

		function cardnumber(inputtxt)
        {
	  if(textInput.value.match(/^(?:3[47][0-9]{13})$/))
	  {
	  	document.getElementById("cardType").innerHTML="American Express";
          document.getElementById("img").src="ae.png";
	  }
	  else if(inputtxt.value.match(/^(?:4[0-9]{12}(?:[0-9]{3})?)$/))
      {
        document.getElementById("cardType").innerHTML="VISA";
        document.getElementById("img").src="visa.png";
      }
      else if(inputtxt.value.match(/^(?:5[1-5][0-9]{14})$/))
	  {
	    document.getElementById("cardType").innerHTML="Mastercard";
        document.getElementById("img").src="mc.png";
	  }
	  else if(inputtxt.value.match(/^(?:6(?:011|5[0-9][0-9])[0-9]{12})$/))
      {
       	document.getElementById("cardType").innerHTML="Discover Card";
          document.getElementById("img").src="disc.png";
      }else{
      	document.getElementById("cardType").innerHTML="Invalid";
      }
	}
        
        
    function clearData(){
        document.getElementById("cardType").innerHTML = "";
        document.getElementById("right-label").innerHTML = "";
        document.getElementById("cardType").innerHTML="";
    }
    </script>
  </body>
</html>
