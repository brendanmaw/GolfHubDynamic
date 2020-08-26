<?php
  session_start();
?>
<!DOCTYPE html>

<html lang="en-US">

  <head>
    <meta charset="utf-8">
    <meta name="GolfHub, the virtual golf caddy to track your game.">
    <link rel="stylesheet" type="text/css" href='style\main.css'>

    <title>GolfHub</title>

  </head>
  <body>

  
    <div class="bgimg3"></div>
        <div class='topmessage'>
            <?php
                if (isset($_SESSION['userId'])) {
                    echo '<p>You are logged in, Welcome!</p>';
                }
                else {
                    echo '<p>You are not logged in.</p>';
                }                      
            ?>
        </div>
        <div class="title">
                             
            <br>
            <br>

            <span class="border">GolfHub</span>
            <br>
            <br>
            <br>
            <span class="border2">Improve Your Game</span>
            <br>
            <br>
            <br>
            <?php 
        if (isset($_SESSION['userId'])) {
          echo '<span class="border3"><a href="login.php" style="color:#fff;">Logout</a></span>';
      }
      else {
          echo '<span class="border3"><a href="login.php" style="color:#fff;">Login</a></span>';
      }    
      
      ?>                    
            <span class="border3"><a href="register.php" style="color:#fff;">Register</a></span>
        </div>   
    </div>     
    


</body>
</html>
