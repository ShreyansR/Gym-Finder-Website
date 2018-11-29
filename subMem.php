<?php
session_start();
      if ($_POST){

        echo 'Successful';
        require 'connection.php';
        $mem = mysqli_real_escape_string($connect, $_POST["selector"]);
        $membership = rand(100000, 200000);


        // You should see sucess if you can connect
        if($connect->connect_errno > 0){
            echo "ERROR";
            die('Unable to connect to database [' . $connect->connect_error . ']');
        }
        else {
            echo "Connected to database." . '<br>';
        }


        if($mem == 'basic'){
          $_SESSION['memName'] = $mem;
          header('Location: addons.php', true, '303');
        }
        if($mem == 'premium'){
          $_SESSION['memName'] = $mem;
          header('Location: addons.php', true, '303');
        }

      }
      else {
        header('Location:accessDenied.php', true, '303');
      }

      ?>
