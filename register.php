<?php
  session_start();
?>
<!DOCTYPE html>

<html lang="en-US">

  <head>
    <link rel="stylesheet" type="text/css" href='style\main.css'>

    <title>GolfHub Signup</title>

  </head>

  <body>



<div class="bgimg2">
<div class="login-page">
    <div class="form">
      <?php 
        if (isset($_GET['error'])) {
          if ($_GET['error'] == "emptyfields") {
            echo '<p class ="message">Fill in all the fields!<br></p>';
          }
          else if ($_GET['error'] == "invaliduidemail") {
            echo '<p class ="message">Invalid E-mail</p>';
          }
          else if ($_GET['error'] == "usernametaken") {
            echo '<p class ="message">Sorry, that username is already taken.</p>';
          }
          else if ($_GET['error'] == "passwordcheck") {
            echo '<p class ="message">Passwords did not match</p>';
          }
        }
       
        
      ?>
      <form class="register-form" action="includes/register.inc.php" method='post'>
        <input type='text' name='uid' placeholder="Username"/>
        <input type='text' name='mail' placeholder="E-Mail"/>
        <input type='password' name='pwd' placeholder="Password"/>
        <input type='password' name='pwd-repeat' placeholder="Confirm Password"/>     
        <button type='submit' name='register-submit'>Create Account</button>
        <p class="message">Already have an account? <a href="login.php">Login Here.</a>
        </p> 
        <p class="message"><a href="index.php">Return to Home</a>
        </p> 
        
        
         
      </form>
    </div>
    </div>

</div>

    
  </body>

  </html>
  
