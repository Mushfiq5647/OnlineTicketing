

<?php

$s=$_GET["operator"];

?>


<!DOCTYPE html>
<html>
<head>

<style>

table
{
border-collapse: collapse;
width: 100%;
color: #c96459;
font-family: monospace;
font-size : 25px;
text-align: left; 
}

th{
background-color: red;
color: white;

}

tr:nth-child(even) {background-color: #f2f2f2}

tr{
	height: 80px;
}

#hh
{  
	background-color: red;

	height: 100px;
	width: 1350px;
	color: white;
	text-align: center;
	font-size: 40px;

}


</style>

</head>

<body>
<table>
	
<tr>
    <div id="hh"><p><b>edede</b></p></div>
	<th>Username</th>
	<th>Journey</th>
	<th>Departure</th>
	<th>Seat</th>
	<th>Price</th>
</tr>


<?php
 $username ="";
 $departure= "";
 $journey= "";
 $seat = "";
 $price ="";

include 'connect.php';

  mysqli_query( $conn,"CREATE DATABASE IF NOT EXISTS mydatabase");
  mysqli_select_db($conn,"mydatabase");
  $sql="CREATE TABLE IF NOT EXISTS booking
  (
    username varchar(255),
    journey varchar(255),
    departure varchar(255),
     seat varchar(255),
     price int
  )";
    mysqli_query($conn,$sql);



if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $username = mysqli_real_escape_string($conn,$_POST['username']);
  $journey = mysqli_real_escape_string($conn,$_POST['journey']);
  $departure = mysqli_real_escape_string($conn,$_POST['departure']);
  $seat = mysqli_real_escape_string($conn,$_POST['seat']);
  $price = mysqli_real_escape_string($conn,$_POST['price']);


  

  $sql="INSERT INTO booking (username,journey,departure,seat,price)  VALUES ('$username', '$journey', '$departure', '$seat', '$price')";
              mysqli_query($conn,$sql);

                   /* echo  "<script>; alert('Succesfully Added!!');</script>";
                   echo "<script type='text/javascript'>window.open('home.php','_self')</script>"; */


   $sql = "SELECT username,journey,departure,seat,price FROM booking where username= '$username' and journey= '$journey' and departure= '$departure' and seat= '$seat'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["username"]. "</td><td>". $row["journey"]. "</td><td>" . $row["departure"] . "</td><td>". $row["seat"]. "</td><td>" .$row["price"]. "</td></tr>";
    }
    echo "</table";

} 
else {
    echo "0 results";
}
          
       
}

?>

</table>
</body>
</html>
