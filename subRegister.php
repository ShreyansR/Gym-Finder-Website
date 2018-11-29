<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="nav.css">
  <link rel="stylesheet" href="style.css">
  <script type="text/Javascript" src="validate.js" ></script>
</head>

<body>

  <div class="topnav" id="myTopnav">
    <?php
    require 'navbar.php';
    ?>
  </div>

  <?php
  require 'connection.php';

  $first = $_POST["firstN"];
  $last = $_POST["lastN"];
  $city = $_POST["city"];
  $email = $_POST["emailR"];
  $phone = $_POST["phone"];
  $username = mysqli_real_escape_string($connect, $_POST["usernameR"]);
  $password = mysqli_real_escape_string($connect, $_POST["passwordR"]);
  $password = password_hash($password, PASSWORD_DEFAULT);
  //$membership = rand(100000, 200000);

  if ($connect->connect_error) {
      die("Connection failed: " . $connect->connect_error);
  }

   $sql = "INSERT INTO member (memberID, m_fname, m_lname, m_city, m_phone, m_email, password) VALUES ('".$username."','".$first."', '".$last."', '".$city."', '".$phone."', '".$email."', '".$password."')";

   if (mysqli_query($connect, $sql)) {
     echo '<h1 align="center"> Registration Successful </h1>';
     echo '<h2 align="center"> Redirecting to Login Page... </h1>';
     header( "refresh:5;url=login.php" );
   } else {
     die("Connection failed: " . $connect->connect_error);
     echo '<h1 align="center"> Registration Failed </h1>';
     echo '<h2 align="center"> Redirecting to Registration Page... </h1>';
     header( "refresh:5;url=registration.php" );
   }

   $connect->close();
   ?>
</body>
</html>
