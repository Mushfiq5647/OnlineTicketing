<!DOCTYPE html>
<html>
<head>
	
	<style type="text/css">

table
{
border-collapse: collapse;
width: 100%;
color: #6666ff;
font-family: monospace;
font-size : 25px;
text-align: left; 
}

th{
background-color: #00004d;
color: white;

}

tr:nth-child(even) {background-color: #f2f2f2}

tr{
	height: 60px;
}

</style>
</head>
<body>
<table>
<tr>
	<th id="th">Username</th>
	<th>Contact</th>
	<th>Message</th>
	
</tr>	

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

$sql = "SELECT  * FROM report";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["username"]. "</td><td>". $row["contact"]. "</td><td>" . $row["message"] . "</td></tr>";
    }
    echo "</table";

} 
else {
    echo "0 results";
}

$conn->close();
?> 
</table>
</body>
</html>