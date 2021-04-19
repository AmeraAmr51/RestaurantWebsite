<?php

include("connect.php");

// connecting with table orders

if(isset($_POST['confirm']))
{
    $first_name = $_POST['first_name'];
    $last_name =  $_POST['last_name'];
    $country =    $_POST['country'];
    $address =    $_POST['address'];
    $phone =      $_POST['phone'];
    $code=rand(0,100000);
    

    $query="INSERT INTO orders (c_order,first_name,last_name,country,address,phone)";
    $query .= "VALUES ($code,'$first_name','$last_name','$country','$address',$phone) ";
    $result=mysqli_query($connect,$query);
   
            
           
    
            if(!$result)
            {
                echo"faild".mysqli_error($connect);
                
            }
            // tatal price
            if(isset($_SESSION["shopping_cart"])){
                $total_price = 0;
                foreach ($_SESSION["shopping_cart"] as $product)
                {
                    $total_price += ($product["price"]*$product["quantity"]);
                }
            }

            

}



              

?>