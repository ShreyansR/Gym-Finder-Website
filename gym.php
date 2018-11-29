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
    body {background-color: black;}
    </style>
    <style>
    .mySlides {display:none;}
    </style>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="device-mockups/device-mockups.min.css">
    <link rel="stylesheet" href="membership.css">

    <!-- Custom styles for this template -->
    <link href="css/new-age.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <div>
      <?php
        require 'navbar.php';
      ?>
    </div>

    <br>
    <br>
    <br>
<form action="processData.php" method="post">
<div class="container2">

	<h2>Select a gym</h2>
  <ul>

    <?php
    require 'connection.php';
    $gymCity = $_SESSION['user_city'];
    $className = $_SESSION['className'];
    $serviceName = $_SESSION['serviceName'];
    $membershipID =  rand(100000, 200000);
    $_SESSION['membershippID'] = $membershipID;
    $msName = $_SESSION['memName'];

    // You should see sucess if you can connect
    if($connect->connect_errno > 0){
        echo "ERROR";
        die('Unable to connect to database [' . $connect->connect_error . ']');
    }
    else {
        echo "Connected to database." . '<br>';
    }
    $sql = "SELECT * FROM gym WHERE gym_city = '$gymCity' AND ms_offered='$msName'";

    $result = $connect->query($sql);
    $row = $result->fetch_assoc();

    if($result->num_rows > 0){
      echo "Rows Found";
      while($row = $result->fetch_assoc()){

        echo '<li>
              <input type="radio" id='.$row['gymID'].' value='.$row['gym_name'].' name="gym" >',
              '<label for='.$row['gymID'].'>'.$row['gym_name'].' &emsp;&emsp; $ '.$row['basePrice'].'</label>',
              '<div class="check"><div class="inside"></div></div>',
              '</li>';
      }
    }

    else {
      echo "Rows Not Found";
    }
      $connect->close();
     ?>
   </ul>


  <input type="submit" value="Next" class="register-button">
</div>
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
