<?php
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
    <link href="userProfile.css" rel="stylesheet">

  </head>


  <body id="page-top">

        <div>
        <?php
            require 'navbar.php';
        ?>
        </div>


        <div class="userProfile">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>


        <div class="container">
            <ul>

                <h2>Your Active Memberships</h2>

                <table class = "table">
                    <tr>
                        <th>Membership Name</th>
                        <th>Price</th>
                    </tr>


                    <?php
                    require 'connection.php';

                    if ($connect->connect_error) {
                        die("Connection failed: " . $connect->connect_error);
                    }

                    $sql = "SELECT ms_name, price FROM membership WHERE memberID ='{$_SESSION['user_ID']}'";

                    $result = $connect->query($sql);


                    if($result->num_rows > 0){
                    echo "Rows Found";
                    while($row = $result->fetch_assoc()){
                        echo '<tr>
                        <td> '.$row['ms_name'].' </td>',
                        '<td>'.$row['price'].'</td>',
                        '</tr>';
                    }
                }
                        mysqli_close($connect)

                        ?>
                </table>
            </ul>
            </div>

        </div>



        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>



        <!-- Custom scripts for this template -->
        <script src="js/new-age.min.js"></script>



    </body>
</html>
