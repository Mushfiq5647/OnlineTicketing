<?php session_start(); ?>



<!DOCTYPE html>

<html>
<head>
  <link rel="stylesheet"  href="style2.css">
  <title>Home Page</title>
</head>
<body>
<div class="header">

</div>

<div class="content">
    <div class="error success">

      <h3>
        <?php
        echo $_SESSION['success'];
        ?>
      </h3>
    </div>

    <p>Welcome<strong><?php echo $_SESSION['username']; ?></strong></p>
    <p><a href="demo.php?logout='1'" style="color: dodgerblue;">Logout</a></p>


  </div>  

  <div  class="form">

<img src="image.png" class="image">

  <form class="form-content" action="display.php" method="POST">
    <div class="container">
   
        <h2 align="center">BOOK NOW!!</h2> 
      <hr>
      
     <label for="from"><b>From</b></label>
      <input type="text" placeholder="Enter source" name="source" required/>

      <label for="to"><b>To</b></label>
      <input type="text" placeholder="Enter destination" name="destination" required /><br>


  <label for="date"><b> Select Date</b><span id="dateNote"> <a href="https://support.mozilla.org/en-US/questions/986096"></a></span></label>
          <input type="date" name="date" id="date" min="today" required />
<script type="text/javascript">
  var today = new Date().toISOString().split('T')[0];
        document.getElementsByName("date")[0].setAttribute('min', today);
</script>

        <label for="Select Time"><b>Select Time</b></label>
       <select name="time" class="time" required>
      <option></option>
      <option><b>0.00</b></option>
      <option><b>1.00</b></option>
      <option>2.00</option>
      <option>3.00</option>
      <option>4.00</option>
      <option>5.00</option>
       <option>6.00</option>
      <option>7.00</option>
      <option>8.00</option>
      <option>9.00</option>
      <option>10.00</option>
      <option>11.00</option>
      <option>12.00</option>
    </select>
    <br><br>

   <label for="Select Bus"><b>Select Bus </b></label>
       <select name="operator" class="time" required>
      <option></option>
      <option>Hanif</option>
      <option>Green Line</option>
      <option>Shohag</option>
      <option>Shyamoli</option>
      <option>Ena</option>
      <option>Tr Travels</option>

    </select>
  
    <br><br>
      <div class="clearfix">
        <input type="reset" name="cancel" value="Cancel"/>
        <input type="submit" name="Booknow" value="Search"/>
      </div>
    </div>
  </form>
</div>
</body>


</html> 
