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

<style>
input[type=submit], input[type=] {
  height:30px;
  width:100px;
  background:#fff;
  border:1px solid #f2f2f2;
  border-radius:20px;
  color: slategrey;
  text-transform:uppercase;
  font-family: 'Ubuntu', sans-serif;
  cursor:pointer;
}
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
    <form class="register-form" method="post" action="subRegister.php">
      <h4>First Name:</h4>
      <input type="text" id="firstN" name="firstN" placeholder="First Name" autocomplete="off" required/><br>
      <h4>Last Name:</h4>
      <input type="text" id="lastN" name="lastN" placeholder="Last Name" autocomplete="off" required/><br>
      <h4> City: </h4>
      <select id="city" name="city">
        <option value=0> Choose a city </option>
        <option value="Oshawa"> Oshawa </option>
        <option value="Mississauga"> Mississauga </option>
        <option value="North York"> North York </option>
        <option value="Scarborough"> Scarborough </option>
        <option value="Ajax"> Ajax </option>
        <option value="Pickering"> Pickering </option>
      </select><br>
      <h4>Email:</h4>
      <input type="email" id="emailR" name="emailR" placeholder="Email" autocomplete="off" required/><br>
      <h4>Phone:</h4>
      <input type="number" id="phone" name="phone" placeholder="Phone" autocomplete="off" required/><br>
      <h4>Username:</h4>
      <input type="number" id="usernameR" name="usernameR" placeholder="Username" autocomplete="off" required/><br>
      <h4>Password:</h4>
      <input type="password" id="passwordR" name="passwordR" placeholder="Password" autocomplete="off" required/><br>
      <input type="submit" value="Register" class="register-button"/>
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
