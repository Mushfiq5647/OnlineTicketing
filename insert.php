<?php

include('connect.php');

$query= "INSERT INTO bus_users(Username,User_id,Email,password,Contact)
VALUES('Dibbo Sarker',2,'dibo20@gmail.com','dibbo20',01523123451);

/*
MYSQL INSERT QUERY
INSERT INTO bus_users(Username,User_id,Email,password,Contact)
VALUES('Dibbo Sarker',2,'dibo20@gmail.com','dibbo20',01523123451);

*/

?>

<!DOCTYPE html>

<html>

<head>



<title>MYSQL Insert</title>



</head>

<body>

<div>

<h1>MYSQL Insert</h1>

<?php

if(mysqli_query( $conn, $query)) {

	echo "record in database";
} else {
	echo "Error". $query . "<br>". mysqli_error($conn);
}

?>

</div>
</body>

</html>

