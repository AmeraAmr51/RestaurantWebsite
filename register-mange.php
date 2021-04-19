<?php
session_start();
$username="";
$email="";
$errors = array();

// connect to the database
$connect=mysqli_connect('localhost','root','','cofee');


// if the submit button click


if(isset($_POST["submit"]))
{
    $username= mysqli_real_escape_string($connect,$_POST['username']);
    $email=mysqli_real_escape_string($connect,$_POST['email']);
    $password_1=mysqli_real_escape_string($connect,$_POST['password_1']);
    $password_2=mysqli_real_escape_string($connect,$_POST['password_2']);



    if(empty( $username))
        {
            array_push($errors,"username is required ");
        }

    if(empty( $email))
        {
            array_push($errors,"Email is required ");
        }
    if(empty( $password_1))
        {
            array_push($errors,"Password is required ");
        }
    if($password_1 != $password_2)
    {
        array_push($errors,"The two Password not match ");
    }   
// if no errors
    if(sizeof($errors)==0)
        {
            
            $query="INSERT INTO users (username,email,password)";
            $query .="VALUES('$username','$email','$password_2')";
            $result=mysqli_query($connect,$query);
            if(!$result)
            {
                echo"faild".mysqli_error($connect);
            }
            $_SESSION['username']= $username;
            // $_SESSION['success']= "You are logging in";
            header('location: login.php');
            
        }
}
// log user in log form page 

if(isset($_POST['login']))
{
    $username= mysqli_real_escape_string($connect,$_POST['username']);
    $password=mysqli_real_escape_string($connect,$_POST['password']);



    if(empty( $username))
        {
            array_push($errors,"username is required ");
        }

    if(empty( $password))
        {
            array_push($errors,"Password is required ");
        }
        // if errors login form
    if(sizeof($errors)==0)
    {
        $sql="SELECT * FROM users WHERE username= '$username' AND password= '$password'";
        $result=mysqli_query($connect,$sql);
        if(mysqli_num_rows($result)==1)
        {
            $_SESSION['username']= $username;
            // $_SESSION['success']= "You are logging in";
            header('location: index.php');
             
        }
        else
        {
            array_push($errors,"Worng Username / password Confirmed");
            //  
        }

    }







}

    if(isset($_GET['logout']))
    {
        session_destroy();
        unset($_SESSION['username']);
        header("location:login.php");
    }
    // function for errors 
function errros()
{
    global $errors;
    if(count($errors)> 0)
    {
        foreach($errors as $error)
        {
            echo
            "<div class='error'>
            <p>$error</p>
            </div>
            ";
        }
    }
}

function success_login()
{
    if(isset($_SESSION['success']))
    {
      echo$_SESSION['success'];
      
    }
    else {
        unset($_SESSION['success']);
    }
    
      if(isset($_SESSION['username']))
         {
             echo $_SESSION['username'];
         }


}