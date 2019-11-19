<?php

include 'connect.php';

$s=$_GET["s"];


$sql = "SELECT source,destination,departure FROM schedule WHERE source='$s' ";

$result = mysqli_query($conn,$sql);

mysqli_num_rows($result);

if(mysqli_num_rows($result)>0)
{ 

while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["source"]. " - Name: " . $row["destination"]. " " . $row["departure"]. "<br>";
    }

}
	        
else
	echo "sesee";

?>