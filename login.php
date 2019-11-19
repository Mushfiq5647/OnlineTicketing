<?php
	
session_start();

 $username = "";
 $email = "";
 $contact ="";
 $pass="";
 $errors = array();

include 'connect.php';

 


        

if(isset($_POST['login'])){

	echo "dhikce";
	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$pass= mysqli_real_escape_string($conn,$_POST['pass']);


	$pass = md5($pass);
	$query = "SELECT * FROM bususer WHERE username='$username' AND password ='$pass'";
	$result = mysqli_query($conn, $query);
	echo mysqli_num_rows($result);
	if(mysqli_num_rows($result)>0){

		   echo "succuesful logged in<br/>";
		   unset($_SESSION['username']);
		   unset($_SESSION['success']);
		   $_SESSION['username'] = $username;
		   echo $_SESSION['username'];
		   $_SESSION['success'] = "You are now logged in";
		     // header('location: home.php');

		   echo "<script type='text/javascript'>window.open('home.php','_self')</script>";

       
	}
	else{
		echo "asdffff";
	}

}  

//logout

if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
    header('location: demo.php');
    exit();
}

	
?>

