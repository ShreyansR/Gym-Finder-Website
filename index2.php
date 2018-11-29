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

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="device-mockups/device-mockups.min.css">

    <!-- Custom styles for this template -->
    <link href="css/new-age.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <div>
      <?php
        require 'navbar.php';
      ?>
    </div>

    <header class="masthead">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-7 my-auto">
            <div class="header-content mx-auto">
              <h1 class="mb-5">Find a gym near you, register and workout. It's as easy as that.</h1>
            </div>
          </div>
          <div class="col-lg-5 my-auto">
            <img class="mySlides w3-animate-fading" src="img/Gym1.png" style="width:100%; border-radius: 25px;">
            <img class="mySlides w3-animate-fading" src="img/Gym2.jpg" style="width:100%; border-radius: 25px;">
            <img class="mySlides w3-animate-fading" src="img/Gym3.jpg" style="width:100%; border-radius: 25px;">
          </div>

          <script>
            var myIndex = 0;
            carousel();

            function carousel() {
              var i;
              var x = document.getElementsByClassName("mySlides");
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
              }
              myIndex++;
              if (myIndex > x.length) {myIndex = 1}
              x[myIndex-1].style.display = "block";
              setTimeout(carousel, 9000); // Change image every 2 seconds
            }
          </script>
    </header>

    <section class="register" id="register">
      <div class="container">
        <div class="section-heading text-center">
          <h2>All gyms near you, in one place</h2>
          <p class="text-muted">Check out what you can do with the gym finder!</p>
          <hr>
        </div>
        <div class="row">
          <div class="col-lg-4 my-auto">
              <img src="img/Gym4.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 my-auto">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <h3>Pick a city</h3>
                    <p class="text-muted">City where you are located</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <h3>Pick a gym</h3>
                    <p class="text-muted">A list of gyms near you will be shown</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <h3>Pick class(s)</h3>
                    <p class="text-muted">Classes that are available at the gym you picked</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <h3>Pick service(s)</h3>
                    <p class="text-muted">Services that are available at the gym you picked</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="cta">
      <div class="cta-content">
        <div class="container">
          <h3>Stop being lazy.<br>Start working out now.</h3>
          <a href="register.php" class="btn btn-outline btn-xl js-scroll-trigger">Let's Get Started!</a>
        </div>
      </div>
      <div class="overlay"></div>
    </section>

    <section class="login bg-primary" id="login">
      <div class="container">
        <h2>Already a member?</h2>
        <a href="login.html" class="btn btn-outline btn-xl js-scroll-trigger">Login!</a>
      </div>
    </section>

    <footer>
      <div class="container">
        <p>&copy; The Gym Finder 2018. All Rights Reserved.</p>
        <ul class="list-inline">
          <li class="list-inline-item">
            <a href="#">Privacy</a>
          </li>
          <li class="list-inline-item">
            <a href="#">Terms</a>
          </li>
          <li class="list-inline-item">
            <a href="#">FAQ</a>
          </li>
        </ul>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/new-age.min.js"></script>

  </body>

</html>
