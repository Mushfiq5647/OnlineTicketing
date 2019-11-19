
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


/*

$query="SELECT * FROM bususer";

$result=mysqli_query($conn,$query);

$row=mysqli_fetch_assoc($result);

$name=$row['name'];

$username=$row['username'];

$email=$row['email'];

$contact=$row['contact'];



echo "Student # '.$name.', '.$username.', '.$email.', '.$contact' ";

?>
*/

   $query="SELECT * FROM bususer";

$result=mysqli_query($conn,$query);

$row=mysqli_fetch_assoc($result);

$name=$row['name'];

$username=$row['username'];

$email=$row['email'];

$contact=$row['contact'];

      while($row = mysqli_fetch_array($result)){
         echo $row['name'];
         echo $row['username'];
         echo $row['email'];
         echo $row['contact'];
   ?>
   