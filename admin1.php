<?php  
    $urerr = $eerr = $perr = $cperr = $fnerr ="";
        $name = $pass ="";
    
        $boolen  = false;
       
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            if(empty($_POST["name"])){
               $urerr = "Name Required...!";
                $boolen  = false;
            }
            else{
               $name = $_POST["name"];
                $boolen  = true;
            }

             if(empty($_POST["pass"])){
                $perr = "Password Field Required...!";
                $boolen  = false;
            }
            else{
              if($boolen){
                $pass = $_POST["pass"];
                $boolen = true;
              }
            }
        }
       

if($boolen){
  session_start();


 $errors = array();

include 'connect.php';
  
  $name = mysqli_real_escape_string($conn,$_POST['name']);
  $pass=  mysqli_real_escape_string($conn,$_POST['pass']);
 

  $query = "SELECT * FROM admin WHERE name='$name' AND password ='$pass'";
  $result = mysqli_query($conn, $query);
  mysqli_num_rows($result);
  echo " '$name' '$pass'";

  if(mysqli_num_rows($result)>0){
     
       echo "succuesful logged in<br/>";
       unset($_SESSION['name']);
       unset($_SESSION['success']);
       $_SESSION['name'] = $name;
       echo $_SESSION['name'];
       $_SESSION['success'] = "You are now logged in";
         // header('location: home.php');
 
       echo "<script type='text/javascript'>window.open('admin.php','_self')</script>";



  


       
  }

  else{
    echo  "<script>; alert('Adminname/Password didnot matched');</script>";
  }



 }

//logout

if(isset($_GET['logout'])){

  session_destroy();
   unset($_SESSION['name']);
    header('location: demo.php');
      
}



?>

<!DOCTYPE html>
<html>
 <head>
  <link rel="stylesheet"  href="style7.css">
 </head>
<body>
 <div  class="form">

<img src="avatar1.png" class="image">

  <form class="form-content" action="admin1.php" method="POST">
    <div class="container">
   
        <h2 align="center">Admin</h2> 
      <hr>
      
     <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Adminname" name="name" />
       <span class="error"> <?php echo $urerr;?></span>
       <br><br>
       <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter password"  name="pass" />
         <span class="error"> <?php echo $perr;?></span>
            <br> <br>

      <div class="clearfix">
        <input type="reset" name="cancel" value="Cancel"/>
          <input type="submit" name="login" value="Login"/>
  </form>
  
</div>
</body>
</html>