<?php
 $head ="";
 $date= "";
 $body= "";

include 'connect.php';



if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $head = mysqli_real_escape_string($conn,$_POST['head']);
  $body = mysqli_real_escape_string($conn,$_POST['event']);
  $date = mysqli_real_escape_string($conn,$_POST['date']);

  

  $sql="INSERT INTO events (head,date,body)  VALUES ('$head', '$date', '$body')";
              mysqli_query($conn,$sql);

                    echo  "<script>; alert('Succesfully Added!!');</script>";
                   echo "<script type='text/javascript'>window.open('admin.html','_self')</script>";
          
       
}

?>