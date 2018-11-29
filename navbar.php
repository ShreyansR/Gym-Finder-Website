<?php

  if (isset($_SESSION['login_user']) && !empty($_SESSION['login_user'])){

    echo '<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">';
      echo'<div class="container">';
        echo'<a class="navbar-brand js-scroll-trigger" href="#page-top">Gym Finder</a>';
        echo'<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">';
          echo'Menu';
          echo'<i class="fas fa-bars"></i>';
        echo'</button>';
        echo'<div class="collapse navbar-collapse" id="navbarResponsive">';
          echo'<ul class="navbar-nav ml-auto">';
            echo'<li class="nav-item">';
              echo'<a class="nav-link js-scroll-trigger" href="index2.php">Home</a>';
            echo'</li>';
            echo'<li class="nav-item">';
              echo'<a class="nav-link js-scroll-trigger" href="membership.php"> Membership </a>';
            echo'</li>';
            echo'<li class="nav-item">';
              echo'<a class="nav-link js-scroll-trigger" href="userProfile.php">' .$_SESSION['login_user']. '</a>';
            echo'</li>';
            echo'<li class="nav-item">';
              echo'<a class="nav-link js-scroll-trigger" href="logout.php">Logout</a>';
            echo'</li>';
          echo'</ul>';
        echo'</div>';
      echo'</div>';
    echo'</nav>';
  }
  else {
    echo '<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">';
      echo'<div class="container">';
        echo'<a class="navbar-brand js-scroll-trigger" href="#page-top">Gym Finder</a>';
        echo'<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">';
          echo'Menu';
          echo'<i class="fas fa-bars"></i>';
        echo'</button>';
        echo'<div class="collapse navbar-collapse" id="navbarResponsive">';
          echo'<ul class="navbar-nav ml-auto">';
            echo'<li class="nav-item">';
              echo'<a class="nav-link js-scroll-trigger" href="index2.php">Home</a>';
            echo'</li>';
            echo'<li class="nav-item">';
              echo'<a class="nav-link js-scroll-trigger" href="#register">Register</a>';
            echo'</li>';
            echo'<li class="nav-item">';
              echo'<a class="nav-link js-scroll-trigger" href="#login">Login</a>';
            echo'</li>';
          echo'</ul>';
        echo'</div>';
      echo'</div>';
    echo'</nav>';
  }
 ?>
