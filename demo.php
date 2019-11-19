<?php
 $name ="";
 $userName = "";
 $email = "";
 $contact ="";
 $errors = array();

include 'connect.php';

  mysqli_query( $conn,"CREATE DATABASE IF NOT EXISTS mydatabase");
  mysqli_select_db($conn,"mydatabase");
  $sql="CREATE TABLE IF NOT EXISTS bususer
  (
    name varchar(255),
    username varchar(255),
    email varchar(255),
    contact varchar(255),
    password varchar(255)
    )";
    mysqli_query($conn,$sql);


if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $name = mysqli_real_escape_string($conn,$_POST['name']);
  $username = mysqli_real_escape_string($conn,$_POST['username']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $contact = mysqli_real_escape_string($conn,$_POST['contact']);
    $pass= mysqli_real_escape_string($conn,$_POST['pass']);
    $cpass= mysqli_real_escape_string($conn,$_POST['cpass']);

  //froms field properly field

   /* 
    if (isset($_POST['email']) == true && empty($_POST['email']) == false)
    {
      
      $email = $_POST['mail'];
      if(filter_var($email,FILTER_VALIDATE_EMAIL) == false)
      {
        echo  "<script>; alert('Invalid Email Format');</script>";
     }
      }
    */
    
  $pass = md5($pass);
  $cpass = md5($cpass);

  if($pass === $cpass){
  $sql="INSERT INTO bususer(name,username,email,contact,password) VALUES('$name', '$username', '$email', '$contact', '$pass')"; 
              mysqli_query($conn,$sql);

                    echo  "<script>; alert('Succesfully Registered!!');</script>";
                   echo "<script type='text/javascript'>window.open('signin.php','_self')</script>";
          }

  else{
    
    echo  "<script>; alert('Passwords didnot matched');</script>";
  }       
}
?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet"  href="https://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style4.css">

</head>
<body>

<div class="w3-bar w3-black">
<span class=" branding w3-bar-item w3-mobile">Online Ticketing</span>
<span class="w3-right w3-mobile">

<a class="w3-bar-item w3-button w3-mobile w3-hover-red" href="/signin.php">Login</a>
<a class="w3-bar-item w3-button w3-mobile w3-hover-red" href="/home.php">Booknow</a>
<a class="w3-bar-item w3-button w3-mobile w3-hover-red" href="/about.html">About</a>
<a class="w3-bar-item w3-button w3-mobile w3-hover-red" href="/events2.php">News And Events</a>
<a class="w3-bar-item w3-button w3-mobile w3-hover-red" href="/report.html">Report A Problem</a>
<a class="w3-bar-item w3-button w3-mobile w3-hover-red" href="/admin1.php">Admin</a>
</span> 
</div>

<section class="showcase">
  <div class="w3-container w3-center">
    <h1 class="w3-text-shadow w3-animate-opacity">Go Anywhere</h1>

    <hr>
    
    <p class="para"><b>Online Bus Reservation System is designed to automate the online ticket purchasing through an easy online bus booking system.Online Bus Reservation System is designed to automate the online ticket purchasing through an easy online bus booking system. </b></p>

 
    <button onclick ="document.getElementById('start-modal').style.display='block'" class="w3-button w3-red w3-large w3-opacity">Start Here</button>
  </div>

  </div>

</section>


<section class="section w3-red w3-hover-opacity">
  <div class="w3-container w3-center">
    <i class="fa fa-home"></i>

    <h2>Welcome Home</h2>
    <p>Welcome to Online Bus Ticketing Service in Bangladesh.Join Us and make the best possible trip you expect!!!!!!</p>
</div>
</section>

<section class="section w3-light-grey w3-hover-opacity">
  <div class="w3-container w3-center">
    <i class="fa fa-cog"></i>

    <h2>Lets Begin</h2>
    <p>Book here and enjoy a safe journey through any operators of Bangladesh.Dont be late to have the best possible privileges here!!!!</p>
</div>  
</section>

<section  id="about" class="section">
  <div class="w3-container">
    <div class="w3-row-padding">
      <div class="w3-col m5">
        <img src="bus1.jpg">
      </div>

      <div class="w3-col m7"> 

        <button onclick="accFunction('what')" class="w3-btn-block w3-left-align">

      What We Do</button>
        
        <div id="what" class="w3-container w3-show">
          <h3>We Do It All</h3>
          <p>Online bus ticket booking,Buy bus tickets,Bus routes, Bus timings, Bus tickets, Bus booking, Bus Service, Bus fares, Travels online booking, Online ticket booking, Book bus tickets, Bus reservation, Bus booking online all are available through our services.We ensure the best possible and congenial atmosphere of your booking. Grab it Now!!!!!!</p>
        </div>

         <button onclick="accFunction('who')" class="w3-btn-block w3-left-align">

      Who Are We</button>
        
        <div id="who" class="w3-container w3-hide">
          <h3>We are Online Ticketing Service</h3>
          <p>Our main aim is to provide you the best possible facilities in booking tickets in Bangladesh.Now,you dont have to go to counter and buy a ticket. Stay home and Book Now!!!!!!!!!!!!</p>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="w3-black w3-padding-xlarge w3-center">
  <p>Online Ticketing Service &copy; 2018</p>
</footer>

<div id="start-modal" class="w3-modal">

  <div class="w3-modal-content">
    
    <header class= "w3-container w3-red">
      <span onclick="document.getElementById('start-modal').style.display='none'" class="w3-closebtn">&times;</span>
      <h2 align="center">Get Started</h2>

    </header>
    

     <form  name="form1" class="modal-content" action="" method="POST">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Name" name="name" required/>
        <label>Username</label>
        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="username" required/>

        <label>Email</label>
        <input id="mail"  class="w3-input w3-border w3-margin-bottom" type="email" placeholder="Enter Email" name="email" required/>
        <label>Contact</label>
        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Contact" name="contact" required/>
       <label>Password</label>
        <input class="w3-input w3-border w3-margin-bottom" type="password" placeholder="Enter password" name="pass" required/>
       <label>Confirm Password</label>
        <input class="w3-input w3-border w3-margin-bottom" type="password" placeholder="Enter password" name="cpass" required/>
        <input  type="submit"  class="w3-black w3-btn-block w3-section w3-padding" name="submit" value="Submit" />
</div>

   <script>
     function accFunction(id)
     {
      var x = document.getElementById(id);
      if(x.className.indexOf("w3-show")== -1)
      {
        x.className += " w3-show";
      }
      else
      {
        x.className = x.className.replace(" w3-show", "")
      }
     }
   </script>



 

 </body>
</html>