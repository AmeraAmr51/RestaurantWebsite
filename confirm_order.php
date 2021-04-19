<?php

include("register-mange.php");
include("cart-mange.php");
include("checkout-manage.php");



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
	       <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
			  <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
			  <li class="nav-item "><a href="menu.php" class="nav-link">Menu</a></li>
			  <li class="nav-item "><a href="contact.php" class="nav-link">Contact</a></li>
        <li class="nav-item "><a href="contact.php" class="nav-link">Checkout</a></li> 
        <li class="nav-item active"><a href="checkout.php" class="nav-link">confirmatin</a></li>
              <li class="nav-item cart">
              <a href="cart.php" class="nav-link"><span class="icon icon-shopping_cart">
              </span>
              <span class="bag d-flex justify-content-center align-items-center">
              <?php
              if(!empty($_SESSION["shopping_cart"])) {
 
              $cart_count = count(array_keys($_SESSION["shopping_cart"]));
              
              ?>
              <small> 
              <?php echo $cart_count; ?></small></span></a>
              
             </li>
             <?php
              }
              ?>
              <li class="nav-item"><a href="index.php?logout='1'" class="nav-link">Log out</a></li>
	        </ul>
	       </div>
		</div>
	  </nav>
 <!-- END nav -->
 <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">
            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread"> Confirm Yur Order </h1>
            </div>
          </div>
        </div>
      </div>
    </section>


<!-- checkout body -->

<section class="ftco-section">
 
      <div class="container">
           <h2  style="margin-left:32%" > Thanks For your order  </h2>
	          	<div  class="col-md">
                  <div  style="margin-left:25%" class="col-md-6 d-flex">
	          		     <div  class="cart-detail cart-total ftco-bg-dark p-3 p-md-4">
                        <h3 class="billing-heading mb-4">Order Details</h3>
                        
                        <?php 
                                $query="SELECT * FROM orders ORDER BY id DESC LIMIT 1";
                                $result=mysqli_query($connect,$query);
                               
                                while($row = mysqli_fetch_array($result))
                                 
                                {  
                                ?>
                        <p class="d-flex">
                          <span>Order code</span>
                          <span><?php echo$row['c_order']?></span>
                        </p>
                        <p class="d-flex">
                          <span>Customer Name</span>
                          <span><?php echo $row['first_name'],'', $row['last_name']?></span>
                        </p>
                        <p class="d-flex">
                          <span>Country</span>
                          <span><?php echo $row['country']?></span>
                        </p>
                        <p class="d-flex">
                          <span>Address</span>
                          <span><?php echo $row ['address']?></span>
                        </p>
                        <p class="d-flex">
                          <span>Phone</span>
                          <span><?php echo $row['phone']?></span>
                        </p>
                       <?php
                       

                   };

                               
                                ?>
                              <hr>
                              
                        <p class="d-flex total-price">
                          <span>The Total  Bill </span>
                          <span><?php $total=$total_price-50.00+5.00; echo "$". $total.'.00';?>
                          </span>
                        </p>
                    
               </div>
	          	</div>
	          	</div>
	          </div>
          </div> <!-- .col-md-8 -->


          

        </div>
      </div>
  </section>
          

           

<!-- .section -->
<!-- Footer -->

<footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
    <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-md-5  ml-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5 ml-5">
             <div class="ftco-footer-widget mb-4 ml-md-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
    </div>
</footer>




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
