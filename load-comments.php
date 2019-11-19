 
<html>
  <header>
    <h1>Complains And Reports</h1>
   </header>
   </html>
 <?php

include 'connect.php';
 $commentNewCount =  $_POST['commentNewCount'];

   $sql = "SELECT * FROM report LIMIT $commentNewCount";
    
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){

    	while($row = mysqli_fetch_assoc($result)){

   echo"<div id='container'>";
   echo "<article>";          
  echo "<section class='post-head'>
        <h2>Posted By </h2>";
        echo "<i>";
      echo  $row['username'];
      echo "</i>";
     echo "</section>";
         
       
       echo "<p>"; 
        echo "<br>";
         echo $row['contact'];

         echo "<br>";

      

          echo $row['message'];
         echo "</p>";

        /*echo"<section class='post-foot'>"; 

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