 
<html>
  <header>
    <h1>News And Events</h1>
   </header>
   </html>
 <?php

include 'connect.php';
 $commentNewCount =  $_POST['commentNewCount'];

   $sql = "SELECT * FROM events LIMIT $commentNewCount";
    
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){

    	while($row = mysqli_fetch_assoc($result)){

   echo"<div id='container'>";
   echo "<article>";          
  echo "<section class='post-head'>
        <h2>"; echo  $row['head']; echo "</h2>";
        echo "<i>";
      echo $row['date'];
      echo "</i>";
     echo "</section>";
         
       
       echo "<p>"; 
        echo "<br> <b>";
       

         echo "</b>";
         echo "<br>";

      

          echo $row['body'];
         echo "</p>";

       /* echo"<section class='post-foot'>"; 

         echo "</section>"; */

         echo "</article>";

         echo "</div>";
      
      }
    }
    else
    {
      echo "No Comments";
    }


	 ?>