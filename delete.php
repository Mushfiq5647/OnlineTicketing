<?php
 
 $operator = "";
 $date ="";


include 'connect.php';



if($_SERVER['REQUEST_METHOD'] == 'POST'){

 
  $operator = mysqli_real_escape_string($conn,$_POST['operator']);
  $date = mysqli_real_escape_string($conn,$_POST['date']);

  

      mysql_query("DELETE FROM schedule WHERE Issued_date= '$date' ; ");
              mysqli_query($conn,$sql);

                    echo  "<script>; alert('Succesfully Deleted!!');</script>";
                   echo "<script type='text/javascript'>window.open('admin.html','_self')</script>";
          
       
}

?>