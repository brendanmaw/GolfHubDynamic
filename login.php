<?php
  session_start();
?>

<!DOCTYPE html>

<html lang="en-US">

  <head>
    <link rel="stylesheet" type="text/css" href='style\main.css'>

    <title>GolfHub Login</title>

  </head>

  <body>



<div class="bgimg">
<div class="login-page">
    <div class="form">  
      <?php 
        if (isset($_SESSION['userId'])) {
          echo '<form class="login-form" action="includes/logout.inc.php" method="post">
          <button type="submit" name="logout-submit">Logout</button></form>';
      }
      else {
          echo '<form class="login-form" action="includes/login.inc.php" method="post">
          <input type="text" name="mailuid" placeholder="Username or E-mail"/>
          <input type="password" name="pwd" placeholder="Password"/> 
          <button type="submit" name="login-submit">Login</button>
          <p class="message">New to GolfHub?<a href="register.php"> Register Here</a></p>
          <p class="message"><a href="index.php">Return to Home</a></p></form>>';
      }    
      
      ?>
      </div>
   
  </body>

  </html>
