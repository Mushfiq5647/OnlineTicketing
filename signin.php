<?php  
    $urerr = $eerr = $perr = $cperr = $fnerr ="";
        $username = $pass ="";
    
        $boolen  = false;
       
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            if(empty($_POST["username"])){
               $urerr = "Username Required...!";
                $boolen  = false;
            }else{
               $username = $_POST["username"];
                $boolen  = true;
            }

             if(empty($_POST["pass"])){
                $perr = "Password Field Required...!";
                $boolen  = false;
            }else{
              if($boolen){
                $pass = $_POST["pass"];
                $boolen = true;
              }
            }
        }
       

if($boolen){
	session_start();

$username = "";
 $email = "";
 $contact ="";
 $pass="";
 $errors = array();

include 'connect.php';
  
  $username = mysqli_real_escape_string($conn,$_POST['username']);
  $pass=  mysqli_real_escape_string($conn,$_POST['pass']);


  $pass = md5($pass);

  $query = "SELECT * FROM bususer WHERE username='$username' AND password ='$pass'";
  $result = mysqli_query($conn, $query);
  mysqli_num_rows($result);
  if(mysqli_num_rows($result)>0){

       echo "succuesful logged in<br/>";
       unset($_SESSION['username']);
       unset($_SESSION['success']);
       $_SESSION['username'] = $username;
       echo $_SESSION['username'];
       $_SESSION['success'] = "You are now logged in";
         // header('location: home.php');
    if(!empty($_POST["check"]))
    {
      echo "dedededd";
      $hour=time()+3600*24*30;
      setcookie("username",$_POST['username'],$hour);
      setcookie("pass",$_POST['pass'],$hour);
  }

  else
    echo "drdrfrfrftft";
  
       echo "<script type='text/javascript'>window.open('home.php','_self')</script>"; 



  


       
  }

  else{
    echo  "<script>; alert('Username/Password didnot matched');</script>";
  }



 }




?>

<!DOCTYPE html>
<html>
 <head>
 	<link rel="stylesheet"  href="style5.css">
 </head>
<body>
 <div  class="form">

<img src="avatar.png" class="image">

  <form class="form-content" action="signin.php" method="POST">
    <div class="container">
   
        <h2 align="center">Login Here</h2> 
      <hr>
      
     <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" value="<?php echo $_COOKIE['username']; ?>" />
       <span class="error"> <?php echo $urerr;?></span>
       <br>
       <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter password"  name="pass"  value="<?php  echo $_COOKIE['pass'];  ?>" />
         <span class="error"> <?php echo $perr;?></span>
            <br>
         <label><input type="checkbox" class="check" name="check" value="checkbox" style="width: 10px;" />Remember Me</label><br>
	  <a href="/update.html">Forgot password?</a>
    
		

      <div class="clearfix">
        <input type="reset" name="cancel" value="Cancel"/>
        	<input type="submit" name="login" value="Login"/>
	</form>
	
</div>
</body>
</html>