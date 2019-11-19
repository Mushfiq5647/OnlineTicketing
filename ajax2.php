<?php


include 'connect.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

	<script>
		
		$(document).ready(function(){

			var commentCount = 2;

			$("button").click(function(){
     
               commentCount = commentCount + 2;
				$("#comments").load("load-comments.php",{
               
               commentNewCount: commentCount
				});

			});
		});
	</script>
</head>
<body>
<div id="comments">
	
	 <?php
   $sql = "SELECT * FROM report LIMIT 2";
    
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){

    	while($row = mysqli_fetch_assoc($result)){
             
               echo "<p>";
             echo "Posted By";
    		
    		
    		echo  $row['username'];
    	
    		
    		echo "<br> <b>";
    		echo "<i>";
    		echo $row['contact'];
    		echo "</i> </b>";
    		echo "<br>";
    	    echo $row['message'];
    		echo "</p>";
    		
    	}
    }
    else
    {
    	echo "No Comments";
    }

	 ?>

</div>

<button>Show more comments</button>
</body>
</html>

