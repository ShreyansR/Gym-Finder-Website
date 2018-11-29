<?php
session_start();
      if ($_POST){

        echo 'Successful';
        require 'connection.php';
        $serviceName = mysqli_real_escape_string($connect, $_POST["service"]);

        // You should see sucess if you can connect
        if($connect->connect_errno > 0){
            echo "ERROR";
            die('Unable to connect to database [' . $connect->connect_error . ']');
        }
        else {
            echo "Connected to database." . '<br>';
        }

          $_SESSION['serviceName'] = $serviceName;
          header('Location: gym.php', true, '303');
      }
      else {
        header('Location:accessDenied.php', true, '303');
      }

      ?>
