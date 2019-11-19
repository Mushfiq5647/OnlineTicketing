
<?php
session_start();
 $username = "";
 $source = "";
 $destination ="";
 $month="";
 $journeydate="";
 $journeytime="";
 $operator ="";
 $errors = array();

include 'connect.php';

  mysqli_query( $conn,"CREATE DATABASE IF NOT EXISTS mydatabase");
  mysqli_select_db($conn,"mydatabase");
  $sql="CREATE TABLE IF NOT EXISTS book
  (
    username varchar(255),
    source varchar(255),
    destination varchar(255),
    month varchar(255),
    journeydate int,
    journeytime numeric,
    operator  varchar(255)

         )";
    mysqli_query($conn,$sql);


if($_SERVER['REQUEST_METHOD'] == 'POST'){

	$username =  $_SESSION['username'];
	$source = mysqli_real_escape_string($conn,$_POST['source']);
	$destination = mysqli_real_escape_string($conn,$_POST['destination']);
	$month = mysqli_real_escape_string($conn,$_POST['month']);
	$journeydate = mysqli_real_escape_string($conn,$_POST['date']);
	$journeytime = mysqli_real_escape_string($conn,$_POST['time']);
	$operator= mysqli_real_escape_string($conn,$_POST['operator']);


	//froms field properly field
	if(empty($userame)){
		array_push($errors,"UserName is required");
	}
	if(empty($source)){
		array_push($errors,"Source is required");
	}
    if(empty($destination)){
		array_push($errors,"Destination is required");
	}

	 if(empty($journeydate)){
		array_push($errors,"Journeydate is required");
	}
	
    if(empty($operator)){
		array_push($errors,"Operator is required");
	}


	$sql="INSERT INTO book(username,source,destination,month,journeydate,journeytime,operator) VALUES('$username', '$source', '$destination', '$month', '$journeydate', '$journeytime', '$operator')"; 
		          mysqli_query($conn,$sql);

		          	   echo "<script type='text/javascript'>window.open('home.php','_self')</script>";
		      }

	      


