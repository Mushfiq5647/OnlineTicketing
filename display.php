<?php session_start(); ?>


<!DOCTYPE html>
<html>
<head>
	
	<style type="text/css">

table
{
border-collapse: collapse;
width: 100%;
color: #b30000;
font-family: monospace;
font-size : 25px;
text-align: left; 
}

th{
background-color: #b30000;
color: white;

}

tr:nth-child(even) {background-color: #e6e6e6}

tr{
	height: 60px;
}

 input[type="submit"]
{
	color: white;
	background: #333;
	height: 30px;
	width: 120px;

}


</style>
</head>
<body>
<table>
<tr>
	<th id="th">From</th>
	<th>To</th>
	<th>Departure</th>
	<th>Operator</th>
	<th>BookNow</th>
</tr>	

<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "mydatabase";
$source =  "";
$destination = "";
$date = "";

// Create connection
$conn = new mysqli($server, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	$source =  mysqli_real_escape_string($conn,$_POST['source']);
	$destination = mysqli_real_escape_string($conn,$_POST['destination']);
	$date = mysqli_real_escape_string($conn,$_POST['date']);


$sql = "SELECT source,destination,departure,operator FROM schedule WHERE source='$source' and destination='$destination' and Issued_date= '$date' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["source"]. "</td><td>". $row["destination"]. "</td><td>" . $row["departure"] . "</td><td>". $row["operator"]. "</td><td> <a href='/seat.php?s=$source&d=$destination&dep=$row[departure]&bus= .$row[operator].'</a><input type='submit' name='book' value='Book Now'/> </td></tr>";
    }
    echo "</table";

} 
else {
    echo "0 results";
}
}
$conn->close();
?> 
</table>
</body>
</html>