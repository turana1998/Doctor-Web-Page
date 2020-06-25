<?php require_once "admin/settings/code/front/front.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
<title><?= $DTitle[0] ?></title>
    <meta name="description" content="<?= $DTitle[1] ?>">
    <meta name="keywords" content="<?= $DTitle[2] ?>">
    <meta charset="UTF-8" />
    <meta name="author" content="Turana İsmayilova">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <!-- Facebook -->
    <meta property="og:url" content="<?= $_SERVER['SERVER_NAME'] ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?= $DTitle[0] ?>" />
    <meta property="og:description" content="<?= $DTitle[1] ?>" />
    <meta property="og:image" content="<?= $DTitle[3] ?>" />
    <!-- Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@hajiyev.ayyub" />
    <meta name="twitter:creator" content="@hajiyev.ayyub" />
    <meta property="og:url" content="<?= $_SERVER['SERVER_NAME'] ?>" />
    <meta property="og:title" content="<?= $DTitle[0] ?>" />
    <meta property="og:description" content="<?= $DTitle[1] ?>" />
    <meta property="og:image" content="<?= $DTitle[3] ?>" />

    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

  <!-- Favicon -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="icon" href="./img/core-img/icon.png">

  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="style.css">
  

</head>

<body>
  <!-- Preloader -->
  <div id="preloader">
    <div class="preload-content">
      <div id="dento-load"></div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <!-- Top Content -->
          <div class="col-6 col-md-9 col-lg-8">
            <div class="top-header-content">
              <a href="#" data-toggle="tooltip" data-placement="bottom" title="28 Jackson Street, Chicago, 7788569 USA"><i class="fa fa-map-marker"></i> <span>Q.Qarayev 81 men 132</span></a>
              <a href="#" data-toggle="tooltip" data-placement="bottom" title="info.dento@gmail.com"><i class="fa fa-envelope"></i> <span>turana221298@gmail.com</span></a>
            </div>
          </div>
          <!-- Top Header Social Info -->
          <div class="col-6 col-md-3 col-lg-4">
            <div class="top-header-social-info text-right">
              <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Top Header End -->

    <!-- Main Header Start -->
    <div class="main-header-area">
      <div class="classy-nav-container breakpoint-off">
        <div class="container">
          <!-- Classy Menu -->
          <nav class="classy-navbar justify-content-between" id="dentoNav">

            <!-- Logo -->
            <a class="nav-brand" href="index.html"><img src="./img/core-img/s9.png" alt=""></a>

            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
              <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>

            <!-- Menu -->
            <div class="classy-menu">

              <!-- Close Button -->
              <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
              </div>

              <!-- Nav Start -->
              <div class="classynav">
                <ul id="nav">
                  <li><a href="index.php">Əsas Səhifə</a></li>
                  <li><a href="about.php">Haqqında</a></li>
                  <li><a href="service.php">Xidmətlər</a></li>
                  <li><a href="#">Məqalələr</a>
                    <ul class="dropdown">
                      <li><a href="blog.php">-Məqalə</a></li>
                    </ul>
                  </li>
                  <li><a href="contact.php">Əlaqə</a></li>
                </ul>
              </div>
              <!-- Nav End -->
            </div>

            <!-- Booking Now Button -->
            <!-- <a href="#" class="btn dento-btn booking-btn">Booking Now</a> -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->