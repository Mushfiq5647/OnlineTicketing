<?php

$server    ="localhost";
$username  ="root";
$password  ="";
$db        ="mydatabase";

//create connection
$conn = mysqli_connect( $server, $username, $password, $db );

//check connection

if(!$conn){
	die("Connection failed:".mysqli_connect_error() );
}

//echo "Connected Successfully!";

?>