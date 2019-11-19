<?php
 $username ="";
 $pass= "";


include 'connect.php';



if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $username= mysqli_real_escape_string($conn,$_POST['username']);

  $cpass = mysqli_real_escape_string($conn,$_POST['cpass']);

  $cpass=md5($cpass);

$sql = "UPDATE bususer SET password='$cpass' WHERE username='$username' ";



if ($conn->query($sql) === TRUE) {

  echo  "<script>; alert('Succesfully Updated!!');</script>";

  echo "<script type='text/javascript'>window.open('signin.php','_self')</script>";
                   

    }
     else {
    echo "Error updating record: " . $conn->error;
}

 
                  
          
       
}

?>