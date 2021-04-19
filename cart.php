<?php
session_start();
include("cart-mange.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>FauCon Le`Cafe`</title>
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
			  <li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
			  <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
			  <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
              <li class="nav-item"><a href="checkout.php" class="nav-link">Checkout</a></li> 
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
            	<h1 class="mb-3 mt-5 bread">Cart</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- cart -->

<section class="ftco-section ftco-cart">
  <div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
              <?php
              if(isset($_SESSION["shopping_cart"])){
                $total_price = 0;
              ?>
	    		<table class="table">
          <thead class="thead-primary">
						      <tr class="text-center">
						        
						        <th>Product</th>
                    <th>Discription</th>
                    <th>&nbsp;</th>
                    <th>Quantity</th>
                    
                    <th>Price</th>
                    <th>Total</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
						      </tr>
						    </thead>
 
                <?php 
                foreach ($_SESSION["shopping_cart"] as $product){
                ?>
                <tbody>
                <tr>
                  <td>
                  <img src='<?php echo $product["image"]; ?>' width="100" height="80" />
                  </td>
                  <td class="product-name"><?php echo $product["name"]; ?><br />
                  <p><?php echo $product["description"]?></p>
                  </td>
                  <td>
                  <form method='post' action=''>
                  <input type='hidden' name='food_id' value="<?php echo $product["food_id"]; ?>" />
                  <td class="quantity">
						        	<div class="input-group mb-3">
                      <input type='hidden' name='food_id' value="<?php echo $product["food_id"]; ?>" />
                       <input type='hidden' name='action' value="change" />
                         <input type="number" name="quantity" class="quantity form-control input-number py-3 px-2" value="<?php echo  $product["quantity"]?>" min="1" max="100">
                         <button class="btn btn-primary btn-outline-primary py-3 px-2" name="change">Change</button>
					          	</div>
					          </td>
                  </form>
                  </td>
                  <td><?php echo "$".$product["price"]; ?></td>
                  <td><?php  echo "$". $product["price"]*$product["quantity"]; ?></td>
              </tr>
<?php
$total_price += ($product["price"]*$product["quantity"]);
}
?>
<tr>
<td colspan="5" ;align="right">
<strong>TOTAL: <?php echo "$".$total_price; ?></strong>
</td>
</tr>
</tbody>
</table> 
  <?php
}else{
 echo "<h3>Your cart is empty!</h3>";
 }
?>
</div>
 
<div style="clear:both;"></div>
 
<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>        </div>

    			</div>
    		</div>
    		<div class="row justify-content-end">
    			<div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
    					<p class="d-flex">
    						<span>Subtotal</span>
    						<span><?php echo "$".$total_price.'.00';?></span>
    					</p>
    					<p class="d-flex">
    						<span>Delivery</span>
    						<span>$5.00</span>
    					</p>
    					<p class="d-flex">
    						<span>Discount</span>
    						<span>$50.00</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
                <span><?php $total=$total_price-50.00+5.00;
                echo "$". $total.'.00';
                ?></span>
    					</p>
    				</div>
    				<p class="text-center"><a href="checkout.php" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
    			</div>
    		</div>
			</div>
		</section>





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
