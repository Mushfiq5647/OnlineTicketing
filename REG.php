<?php  
    $nerr = $urerr = $eerr = $perr = $cperr = $fnerr ="";
        $name = $username = $email = $contact = $pass = "";
    
        $boolen  = false;
       
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            if(empty($_POST["name"])){
               $nrerr = "Name Required...!";
                $boolen  = false;
            }else{
               $name = $_POST["name"];
                $boolen  = true;
            }

 
            if(empty($_POST["username"])){
               $nrerr = "Username Required...!";
                $boolen  = false;
            }else{
               $name = $_POST["username"];
                $boolen  = true;
            }


             if(empty($_POST["pass"])){
                $perr = "Password Field Required...!";
                $boolen  = false;
            }else{
              if($boolen){
                $pass = $_POST["pass"];
                $boolen = true;
              }
            }
        }
       

if($boolen){

 $name ="";
 $username = "";
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

	if(empty($userame)){
		array_push($errors,"Name is required");
     }
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
	$sql="INSERT INTO bususer(name,username,email,contact,password) VALUES('$name', '$username', '$email', '$contact', '$pass')"; 
		          mysqli_query($conn,$sql);

		          	   echo "<script type='text/javascript'>window.open('home.php','_self')</script>";
		      }

	else{
			   echo "<script type='text/javascript'>window.open('demo.php','_self')</script>";
		echo "Password not matched";
	}	      
}
}
?>