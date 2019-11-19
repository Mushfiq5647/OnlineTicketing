<?php
session_start();
include('connect.php');
  //creating database and table
  mysqli_query("CREATE DATABASE IF NOT EXISTS mydatabase",$conn);
  mysqli_select_db("mydatabase",$conn);
  $sql="CREATE TABLE IF NOT EXISTS bus_user
  (
      Username varchar(30),
    Email varchar(60),
    Contact varchar(30),
    password varchar(100)
    )";
    mysqli_query($sql,$conn);//creating database

 //inserting user-registration informations 

    $uname=$_POST[UserName];
     $em=$_POST[email];
    $fname=$_POST[Contact];
     $pass=base64_encode($_POST[psw]);//password encoded
     $cpass=base64_encode($_POST[re-psw]);

    if($pass!=$cpass)//if the passwords didn't match fetch to homepage again
    {
      echo "<script type='text/javascript'>alert('Passwords didn't match')</script>";
      echo "<script type='text/javascript'>window.open('index.php','_self')</script>";

    }
    //First checking if same username alredy exists
    //$query="SELECT * FROM registration_info WHERE FirstName='".$fname."' AND LastName='".$lname."' AND Email='".$em."'";
    $query="SELECT * FROM bus_user WHERE username='".$uname."'";
    $result=mysqli_query($query);
    $row=mysqli_fetch_array($result);

    if($row['Username']==$uname)//if the username already exists then fetch to registration page again
    {
      echo "<script type='text/javascript'>alert('Username already exists! Please choose a different one')</script>";
      echo "<script type='text/javascript'>window.open('index.php','_self')</script>";

    }
    else
    {
      if($uname==''||$em==''||$fname==''||$pass=='')//if the form is incomplete don't proceed
      {
        echo "<script type='text/javascript'>alert('Form Incomplete!')</script>";
        echo "<script type='text/javascript'>window.open('index.php','_self')</script>";
      }
      $sql="INSERT INTO bus_user(Username,Email,Contact,Password) VALUES('$uname','$em','$fname','$pass')";
      if(!mysqli_query($sql,$conn))
      {
        $ck=0;
        die('Error: '.mysqli_error());
      }
      else
      {
        echo "<script type='text/javascript'>alert('Thanks for registration!')</script>";
        $ck=1;
      }
      if($ck)//if ck==1 i.e registration succssful auto-open homepage
      {
        echo "<script type='text/javascript'>window.open('index.html','_self')</script>";
      }
    }
    
    //closing
    mysqli_close($conn);
?>

