<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "mydatabase";

// Create connection
$conn = new mysqli($server, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


  mysqli_query( $conn,"CREATE DATABASE IF NOT EXISTS mydatabase");
  mysqli_select_db($conn,"mydatabase");
  $sql="CREATE TABLE IF NOT EXISTS schedule
  (
    source varchar(255),
    destination varchar(255),
     departure varchar(255),
     Issued_date date,
     operator varchar(255)
  
    )";
    mysqli_query($conn,$sql);


$sql = "INSERT INTO schedule (source, destination, departure, Issued_date, operator)  VALUES ('Dhaka', 'CHittagong', '11',  STR_TO_DATE('10/21/2011', '%m/%d/%Y'), 'Hanif')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>