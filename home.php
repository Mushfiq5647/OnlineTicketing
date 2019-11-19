<?php session_start(); ?>



<!DOCTYPE html>

<html>
<head>

 <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet"  href="https://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet"  href="style2.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <title>Home Page</title>
</head>
<body>


  <div class="w3-bar w3-black">
<span class=" branding w3-bar-item w3-mobile">Online Ticketing</span>
<span class="w3-right w3-mobile">
<a class="w3-bar-item w3-button w3-mobile w3-hover-red" href="/about.html"><b><?php echo $_SESSION['username']; ?></b></a>
<a class="w3-bar-item w3-button w3-mobile w3-hover-red" href="/about.html"><b>About</b></a>
<a class="w3-bar-item w3-button w3-mobile w3-hover-red" href="/events2.php">News And Events</a>
<a class="w3-bar-item w3-button w3-mobile w3-hover-red" href="/report.html">Report A Problem</a>
<a class="w3-bar-item w3-button w3-mobile w3-hover-red" href="/logout.php">Logout</a>
</span> 
</div>

<div class="header">

</div>

<div class="content">
    <div class="error success">

      <h3>
        <?php
        echo $_SESSION['success'];
        ?>
        <br><p><strong><?php echo $_SESSION['username']; ?></strong></p>
      </h3>
    </div>

    
</div>
    

  <div  class="form">

<img src="image.png" class="image">

  <form class="form-content" action="display.php" method="POST">
    <div class="container">
   
        <h2 align="center"><b>BOOK NOW!!</b></h2> 
      <hr>
      
     <label for="from"><b>From</b></label>
      <input type="text" placeholder="Enter source" name="source" autocomplete="off" id="source" required/>
      <div id="sourcelist"></div>

      <label for="to"><b>To</b></label>
      <input type="text" placeholder="Enter destination" name="destination" id="destination" required /><br>
       <div id="destinationlist"></div>


  <label for="date"><b> Select Date</b><span id="dateNote"> <a href="https://support.mozilla.org/en-US/questions/986096"></a></span></label><br>
          <input type="date" name="date" id="date" min="today" required />
<script type="text/javascript">
  var today = new Date().toISOString().split('T')[0];
        document.getElementsByName("date")[0].setAttribute('min', today);
</script>

   
    <br>
      <div class="clearfix">
        <input type="reset" name="cancel" value="Cancel"/>
        <input type="submit" name="Booknow" value=" Search"/>
      </div>
    </div>
  </form>
</div>
</body>
</html>   
  