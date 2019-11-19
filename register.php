<?php

 $UserName = "";
 $email = "";
 $contact ="";
 $errors = array();

include 'connect.php';


if($_SERVER['REQUEST_METHOD'] == 'POST'){

	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$contact = mysqli_real_escape_string($conn,$_POST['contact']);
	$pass= mysqli_real_escape_string($conn,$_POST['psw']);
    $cpass= mysqli_real_escape_string($conn,$_POST['re-psw']);

	//froms field properly field
	if(empty($userame)){
		array_push($errors,"UserName is required");
	}
	if(empty($email)){
		array_push($errors,"Email is required");
	}
    if(empty($contact)){
		array_push($errors,"Contact is required");
	}
    if(empty($pass)){
		array_push($errors,"Password is required");
	}

	if(empty($cpass)){
		array_push($errors,"Passwords donot match");
	}

	$pass = md5($pass);
	$cpass = md5($cpass);

	if($pass === $cpass){
	$sql="INSERT INTO bus_user(username,email,contact,password) VALUES('$username', '$email', '$contact','$pass')"; 
		          mysqli_query($conn,$sql);
		      }

	else{
		echo "Password not matched";
	}	      
}

