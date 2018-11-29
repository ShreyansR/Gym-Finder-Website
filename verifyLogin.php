<?php
session_start();
      if ($_POST){

        require 'connection.php';
        $user = mysqli_real_escape_string($connect, $_POST["username"]);
        $pass = mysqli_real_escape_string($connect, $_POST["password"]);
        //$_SESSION['user_ID'] = $user;

        // You should see sucess if you can connect
        if($connect->connect_errno > 0){
            echo "ERROR";
            die('Unable to connect to database [' . $connect->connect_error . ']');
        }
        else {
            echo "Connected to database." . '<br>';
        }

        // Query to return data from your database
        $sql = "SELECT * FROM member WHERE memberID = '$user'";

        $result = $connect->query($sql);
        $row = $result->fetch_assoc();

           if ($result->num_rows > 0) {
             echo "Successful";

             if(password_verify($pass, $row["password"])){

              $_SESSION['email'] = $row['m_email'];
              $_SESSION['login_user'] = $row['m_fname'];
              $_SESSION['user_city'] = $row['m_city'];
              $_SESSION['user_ID'] = $row['memberID'];

             header('Location: membership.php', true, '303');
             echo "Login Successful. ";

            }
            else{
              echo "Wrong";
              header('Location:accessDenied.php', true, '303');
              $connect->close();
            }
           }
           //if($result->num_rows > 0) {
           else{
             echo "Wrong";
             header('Location:accessDenied.php', true, '303');
             $connect->close();
           }
      }
      else {
        header('Location:index.php', true, '303');
      }

      ?>
