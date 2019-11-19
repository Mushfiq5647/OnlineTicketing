<?php   
session_start(); 


//to ensure you are using same session

include 'connect.php';

if(isset($_SESSION['name']))
{
  session_unset();
	session_destroy(); //destroy the session
 

       echo "<script type='text/javascript'>window.open('demo.php','_self')</script>"; 



   //to redirect back to "index.php" after logging out
exit();
}


?>