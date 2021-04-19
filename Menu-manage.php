<?php
session_start();
include('connect.php');
$status="";
if (isset($_POST['food_id']) && $_POST['food_id']!=""){
$food_id = $_POST['food_id'];
$result = mysqli_query(
$connect,
"SELECT * FROM menu WHERE food_id='$food_id'");
$row = mysqli_fetch_assoc($result);
$food_id     = $row['food_id'];
$name        = $row['name'];
$description = $row["description"];
$image       = $row['image'];
$price       = $row['price'];

 
$cartArray = array(
 $food_id=>array(
 'food_id'=>$food_id,
 'name'=>$name,
 'description'=>$description,
 'image'=>$image,
 'price'=>$price,
 'quantity'=>1,
 )
);
 
if(empty($_SESSION["shopping_cart"])) {
    $_SESSION["shopping_cart"] = $cartArray;
    $status = '<div class="alert error "><i class="fa fa-times"></i> Your Dish added to cart </div>';
}else{
    $array_keys = array_keys($_SESSION["shopping_cart"]);
    if(in_array($food_id,$array_keys)) {
   $status = '<div class="alert error mb-3 mt-5"><i class="fa fa-times"></i> Your Dish is already in cart </div>'; 
    } else {
    $_SESSION["shopping_cart"] = array_merge(
    $_SESSION["shopping_cart"],
    $cartArray
    );
    
 }
 
 }
}

      
    
            
     
    
 ?>
