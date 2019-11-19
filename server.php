<?php

session_start();

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

	
	$pass = md5($pass);
	$cpass = md5($cpass);

	if($pass === $cpass){
	$sql="INSERT INTO bus_user(username,email,contact,password) VALUES('$username', '$email', '$contact','$pass')"; 
		          mysqli_query($conn,$sql);
		          $_SESSION['username'] = $username;
		          $_SESSION['success'] = "You are now logged in";
		          header('location: home.php');		   
		             }

	else{
		echo "Password not matched";
	}	      
}   


//login from log in page

if(isset($_POST['login'])){

	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$pass= mysqli_real_escape_string($conn,$_POST['psw']);

	if(empty($username)){
		array_push($errors,"User is required");
	}

		if(empty($upass)){
		array_push($errors,"Password is required");

	}

	$pass = md5($pass);
	$query = "SELECT * FROM bus_user WHERE username='$username' AND password ='$pass'";
	$result = mysqli_query($conn, $query);

	if(mysqli_num_rows($result)==1){

		   $_SESSION['username'] = $username;
		   $_SESSION['success'] = "You are now logged in";
           header('location: home.php');	
	}
	else{
		array_push($errors, "wrong username/password");
	}
}  

//logout

if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header('location: home.php');
}

?>