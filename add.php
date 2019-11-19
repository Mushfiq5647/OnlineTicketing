<?php
 $source ="";
 $destination= "";
 $operator = "";
 $date ="";
 $departure = array();

include 'connect.php';



if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $source = mysqli_real_escape_string($conn,$_POST['source']);
  $destination = mysqli_real_escape_string($conn,$_POST['destination']);
  $operator = mysqli_real_escape_string($conn,$_POST['operator']);
  $departure = mysqli_real_escape_string($conn,$_POST['departure']);
  $date = mysqli_real_escape_string($conn,$_POST['date']);

  

  $sql="INSERT INTO schedule (source, destination, departure, Issued_date, operator)  VALUES ('$source', '$destination', '$departure', '$date', '$operator')";
              mysqli_query($conn,$sql);

                    echo  "<script>; alert('Succesfully Added!!');</script>";
                   echo "<script type='text/javascript'>window.open('admin.html','_self')</script>";
          
       
}

?>