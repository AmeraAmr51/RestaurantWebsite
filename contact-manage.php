<?php
include("connect.php");
// The Receiver Mail

// $to = '';
// $from = 'Mail From FauCon Le`Cafe`';

// // CC Receiver
// $cc_email = 'ameraamr54@gmail.com';

// // Alert When Success or Failure
$alert = '';

if (isset($_POST["send"]))
 {

    $name=filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email=filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $subject=filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
    $massage=filter_var($_POST['massage'], FILTER_SANITIZE_STRING);
    $query="INSERT INTO contact (name,email,subject,massage)";
            $query .="VALUES('$name','$email','$subject', '$massage')";
            $result=mysqli_query($connect,$query);
            if(!$result)
            {
                echo"faild".mysqli_error($connect);
                
            }
            else{
                $alert = '<div class="alert success"><i class="fa fa-check-circle"></i> Thank You to Cntacting with us </div>';
                
            }
    // $headers = "From: ".$name." <".$email.">" . "\r\n" . 
	// 			   "Content-type: text/html; charset=UTF-8\r\n" . 
    //                "CC: ".$cc_email."";
    

    // if (empty($name) || empty($email) || empty($subject) || empty($massage))
    // {
    //     $alert = '<div class="alert error"><i class="fa fa-times"></i> Your Data Not Complete </div>';
    // }
    
                // if ($alert == '')
                //     {
                //     mail($to, $from,$subject, $massage, $headers);
                //     $alert = '<div class="alert success"><i class="fa fa-check-circle"></i> Thank You to Cntacting with us </div>';
                //   }
            
 }      


?>