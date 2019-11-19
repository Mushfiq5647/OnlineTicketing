<?php

 $username = "";
 $contact ="";
 $message ="";
 $errors = array();

include 'connect.php';

  mysqli_query( $conn,"CREATE DATABASE IF NOT EXISTS mydatabase");
  mysqli_select_db($conn,"mydatabase");
  $sql="CREATE TABLE IF NOT EXISTS report
  (
   
    username varchar(255),
    contact varchar(255),
    message varchar(500)
    )";
    mysqli_query($conn,$sql);


    
if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $username =  mysqli_real_escape_string($conn,$_POST['username']);
  $contact = mysqli_real_escape_string($conn,$_POST['contact']);
  $message = mysqli_real_escape_string($conn,$_POST['message']);
  



  $sql="INSERT INTO report(username,contact,message) VALUES('$username', '$contact', '$message')"; 
              mysqli_query($conn,$sql);

                   echo "<script type='text/javascript'>window.open('home.php','_self')</script>";
          }

?>

