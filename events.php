<?php


include 'connect.php';

?>

<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" type="text/css" href="style11.css">
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

     <header>
    <h1>Complains And Reports</h1>
   </header>

    <?php
   $sql = "SELECT * FROM report LIMIT 2";
    
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

</div>

  <button id="button1">Show More..</button>

</body>
</html>

