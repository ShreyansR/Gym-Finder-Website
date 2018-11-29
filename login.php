<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gym Finder</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
.mySlides {display:none;}
</style>

<style>
body {background-color: black;}
</style>


    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="device-mockups/device-mockups.min.css">
    <link rel="stylesheet" href="register.css">

    <!-- Custom styles for this template -->
    <link href="css/new-age.css" rel="stylesheet">

  </head>


  <body id="page-top">

    <div>
      <?php
        require 'navbar.php';
      ?>
    </div>

    <div class="register">
      <br>
      <br>
      <br>
    <form class="register-form" action="verifyLogin.php" method="post">
      <h4>Username:</h4>
      <input type="text" id="username" name="username" placeholder="Username" autocomplete="off" required/><br>
      <h4>Password:</h4>
      <input type="password" id="password" name="password" placeholder="Password" autocomplete="off" required/><br>
      <input type="submit" value="Login" class="login-button"/>
  </form>



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/new-age.min.js"></script>




  </body>
</html>
