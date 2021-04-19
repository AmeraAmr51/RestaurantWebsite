 <?php

$status="";

if(!empty($_SESSION["shopping_cart"])) 
{
    foreach($_SESSION["shopping_cart"] as $key => $value)
     {
      if(empty($_SESSION["shopping_cart"]))
      {
      unset($_SESSION["shopping_cart"]);
      }		
     
    }
     
}


if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['food_id'] === $_POST["food_id"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
  	
} 




?>