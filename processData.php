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

  $gymName = mysqli_real_escape_string($connect, $_POST["gym"]);
  $className = $_SESSION['className'];
  $serviceName = $_SESSION['serviceName'];
  $membership =  rand(10000, 20000);
  $_SESSION['membershipID'] = $membership;
  $msName = mysqli_real_escape_string($connect,$_SESSION['memName']);
  $gymCity = $_SESSION['user_city'];

  if ($connect->connect_error) {
      die("Connection failed: " . $connect->connect_error);
  }

  echo $gymName;
  echo $membership;
  $memberID = $_SESSION['user_ID'];



   $sql = "INSERT INTO membership (membershipID, ms_name, gymID, price, memberID) VALUES ('".$membership."','".$msName."', NULL, NULL, NULL)";
   $sql2 = "UPDATE membership AS m SET price = '68.99' WHERE membershipID = '".$_SESSION['membershipID']."'";
   //$sql2 = "UPDATE membership AS m SET price = (SELECT basePrice FROM gym WHERE gym_name = '".$gymName."' AND gym_city='".$gymCity."' AND ms_offered='".$msName."') WHERE membershipID = '".$_SESSION['membershipID']."'";
   // $sql4 = "UPDATE membership SET memberID = '".$memberID."' WHERE membershipID = '$membership'";

   if(mysqli_query($connect, $sql)){
     mysqli_query($connect, $sq2);
   }

   // if (mysqli_query($connect, $sql)) {
   //   //if(mysqli_query($connect, $sql2))
   //   //   if(mysqli_query($connect, $sql3))
   //   //     if(mysqli_query($connect, $sql4)){
   //   //header( "refresh:5;url=login.php" );
   // } else {
   //   echo "no rows";
   //   echo '<h1 align="center"> Registration Failed </h1>';
   //   echo '<h2 align="center"> Redirecting to Registration Page... </h1>';
   //   //header( "refresh:5;url=index2.php" );
   // }

   $connect->close();
   ?>
</body>
</html>
