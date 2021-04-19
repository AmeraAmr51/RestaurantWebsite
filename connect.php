<?php
// connect to the database
$connect=mysqli_connect('localhost','root','','cofee');
if(!$connect)
{
    echo "Failed Connection".mysqli_error($connect);
}
?>