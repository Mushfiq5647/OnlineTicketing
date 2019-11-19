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
    <p id="logout" name="logout" ><a href="logout.php" style="color: dodgerblue;">Logout</a></p>

</div>