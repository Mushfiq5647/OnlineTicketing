<?php

include'errors.php';
include 'connect.php';



	$output = '';
	$query = "SELECT * FROM schedule where destination like '%".$_POST["query"]."%'";
	$result = mysqli_query($conn,$query);
	$output = '<ul class="list-unstyled">';

	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
			$output .='<li>'.$row["destination"].'</li>';
		}
	}

	else
	{
		$output .='<li>Country Not FOund</li>'; 
			}
	$output .='</ul>';
	echo $output;


else
echo "ssddd";

?>