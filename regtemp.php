<?php
session_start(); 
include('another.php');
//create DATABASE named TRAIN
mysql_query("CREATE DATABASE IF NOT EXISTS TRAIN",$con);
mysql_select_db('TRAIN',$con);
//create TABLE named regData
$sql="CREATE TABLE IF NOT EXISTS regData
				(
					Username varchar(100),
					Contact varchar(100),
					Email varchar(60),
					Password varchar(100)
				)";
mysql_query($sql,$con);

$username=$_POST[UserName];
$contact=$_POST[Contact];
$email=$_POST[email];
$password=$_POST[psw];
$RepPass=$_Post[re-psw];
if($password!=$RepPass)
		{ echo "<script type='text/javascript'> alert('Password and Confirmed Password did not match')</script>";
		  echo "<script type='text/javascript'> window.open('homepage.html','_self')</script>";
		}
$match="SELECT * FROM TRAIN WHERE Username='".$username."'";
$value=mysql_query($match);
$row=mysql_fetch_array($value);

    if($row['Username']==$username)
    {
      echo "<script type='text/javascript'>alert('Username already exists')</script>";
      echo "<script type='text/javascript'>window.open('homepage.html','_self')</script>";

    }
else{
	 if($username=='' || $contact=='' || $email=='' || $password=='' || $RepPass=='')
	 {
	 	echo "<script type='text/javascript'> alert('Fields are empty')</script>";
		echo "<script type='text/javascript'> window.open('homepage.html','_self')</script>";
		
	 }
	 else
	 {
	 $sql="INSERT INTO registration_info(Username,Name,Email,Password) VALUES('$uname','$fname','$em','$pass')";
	}
	if(mysql_query($sql,$con))
	{
		echo "<script type='text/javascript'> alert('Registration complete')</script>";
		echo "<script type='text/javascript'> window.open('index.html','_self')</script>";
	}
}
mysql_close($con);
?>


	
