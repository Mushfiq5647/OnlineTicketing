<!DOCTYPE html>
<html>
<head>
	
	<style type="text/css">

table
{
border-collapse: collapse;
width: 100%;
color: #ff1a1a;
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

</style>
</head>
<body>
<table>
<tr>
	<th id="th">Name</th>
	<th>UserName</th>
	<th>Email</th>
	<th>Contact</th>
	
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

$sql = "SELECT  name,username,email,contact FROM bususer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["name"]. "</td><td>". $row["username"]. "</td><td>" . $row["email"] . "</td><td>". $row["contact"]."</td></tr>";
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