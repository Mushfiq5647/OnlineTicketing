<?php
        session_start();
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
          
            
                $con = mysqli_connect("localhost","root","");
 
            if(!$con){
                    die("Connection Failed :" + mysqli_connect_error());
                }
        
                mysqli_select_db($con,"OpinionDB");
            
        
            
            if(isset($_POST["submit"])){
              
              /*  $sql = "SELECT * FROM regi WHERE Username = '$_POST[username]'";
                echo $count;
                $result = mysqli_query($con,$sql) or die(mysqli_error($con));
                $count=mysqli_num_rows($result) or die(mysqli_error($con)); 
                if($count==1)
                { 
                  $sql = "SELECT * FROM regi WHERE Username = '$_POST[username]'"; 
                  $result = mysqli_query($con,$sql) or die(mysqli_connect_error($con));
                  $row=mysqli_fetch_assoc($result) or die("ERROR"+ mysqli_connect_error($con));
                                  $uname=$_POST['username'];
                                  $pass=$_POST['password'];
                                 if(!($row['password']==$pass)){
                                        echo "<script>alert ('Password did not mstch...!');</script>";
                                         echo "<script type='text/javascript'>window.open('slide.php','_self')</script>";
                                         exit();
                                  }else{
                                         $_SESSION['un']=$row['Username'];
                                         $_SESSION['fn']=$row['firstname'];
                                         $_SESSION['ln']=$row['lastname'];
                                         $_SESSION['em']=$row['email'];        
                                         $_SESSION['pw']=$row['password'];
                                         echo "<script>alert ('Welcome to your account...!');</script>";
                                         echo "<script type='text/javascript'>window.open('homepage.php','_self')</script>";
                                         exit();
                                  }
                }elseif($count==0){
                    echo "<script type='text/javascript'>alert('Invalid login information')</script>";
                    echo "<script type='text/javascript'>window.open('homepage.php','_self')</script>";
                    exit();
                 }
                mysqli_close($con);
                $boolen = false;*/


         $username=$_POST['username'];
         $pass=$_POST['pass'];
         echo $username;
         echo $pass;
       $sql="SELECT * FROM bususer WHERE username='$username'";
      //$resultCheck=$result;
      $result=mysqli_query($con,$sql);
      $resultCheck=mysqli_num_rows($result);
      echo $resultCheck;
      if($resultCheck<1)//if no rows selected
      {
        echo "<script type='text/javascript'>alert('Invalid login information')</script>";
        echo "<script type='text/javascript'>window.open('home.php','_self')</script>";
        exit();
      }
      else
      {
        if($row=mysqli_fetch_assoc($result))
        {
          $query="SELECT * FROM bususer WHERE username='".$username."' AND password='".$pass."'";
          $result=mysqli_query($con,$query);
          $row=mysqli_fetch_array($result);
          echo $row['pass'];
            
          if(!($row['pass']==$pass))//if the input password does not match with the database-stored password
          {
            echo "<script type='text/javascript'>alert('Invalid password')</script>";
            echo "<script type='text/javascript'>window.open('slide.php','_self')</script>";
            exit();
          }
          else if($row['pass']==$pass)//if login successful store login informations into session variables
          {
            //echo "accessed into session";
            $_SESSION['un']=$row['name'];
            $_SESSION['fn']=$row['username'];
            $_SESSION['cn']=$row['contact'];
            $_SESSION['em']=$row['email'];
            $_SESSION['pw']=$row['pass'];


            echo "<script type='text/javascript'>window.open('home.php','_self')</script>";
            echo "<script type='text/javascript'>alert('Welcome to your account')</script>";
          }
        }
      }
            }    
        }
    ?>