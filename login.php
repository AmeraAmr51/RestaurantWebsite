<?php
include("register-mange.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>FauCon Le` Cafe`</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
    
<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
          <a class="navbar-brand" href="index.php">FauCon Le`<small>Cafe`</small></a>
          </div>
      </nav>
<section class="home-slider owl-carousel">
   <div class="slider-item" style="background-image: url(/images/about.jpg);" data-stellar-background-ratio="0.5">
    </div>
</section>
      
      
<section class="ftco-appointment">
  <div class="overlay"></div>
    <div class="container">
    	<div class="row no-gutters d-md-flex align-items-center">
          <div style="margin-left:30%" class="col-md-6 appointment ftco-animate">
            <div class="row slider-text justify-content-center align-items-center">
            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            <h1 class="mb-4">Welcome</h1>
            </div>
            </div>
                <h4 class="mb-3">Log in</h3>
                <form action="login.php" method="POST">
                <div class="d-md-flex">
		    		<div class="form-group">
		    			<input name="username" type="text" class="form-control" placeholder="User Name">
                    </div>
                    <div class="input">
		                <input name="password" type="password" class="form-control appointment_password" placeholder="Password">
                    </div>
                </div>
                <div class="d-md-flex">
		    		<div class="form-group">
                        <button name="login" class="btn btn-primary py-3 px-4">Log In</button>
                    </div> 
                </div>
                <div class="form-group">
                 <p class="margin medium-small"><a href="register.php">Sign Up Now!</a></p>
                </div>
                <div class="form-group">
                    <div>
                      <?php errros();?>
                    </div>   
                </div>
                </form>
            </div>
        </div>
    </div>
</section>
    
   
<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>
    </body>
  
</html>