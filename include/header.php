<?php 

require_once('baseurl.php');

$url = new Url;


 ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>medical |<?php if(isset($_GET['slug'])){ echo" ".$_GET['slug']; } else {echo" Home";} ?> </title>
    <link rel="icon" href="<?php $url->baseurl();?>assets/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php $url->baseurl();?>assets/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?php $url->baseurl();?>assets/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?php $url->baseurl();?>assets/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?php $url->baseurl();?>assets/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?php $url->baseurl();?>assets/css/flaticon.css">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="<?php $url->baseurl();?>assets/css/magnific-popup.css">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="<?php $url->baseurl();?>assets/css/nice-select.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?php $url->baseurl();?>assets/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php $url->baseurl();?>assets/css/style.css">
</head>

<body>
    <!--::header part start::-->
    <?php  if (isset($_GET['slug'])) 
    {
        
        echo '<header class="main_menu">';
        
        
    }

    else
    {
        echo ' <header class="main_menu home_menu">';
    }

     ?>
   
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="<?php $url->baseurl();?>index.php"> <img src="<?php $url->baseurl();?>assets/img/lo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-center"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">

                                <li class="nav-item active">
                                    <a class="nav-link" href="<?php $url->baseurl();?>index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php $url->baseurl();?>about.php?slug=about">about</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php $url->baseurl();?>doctor.php?slug=doctor">Doctors</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php $url->baseurl();?>dep.php?slug=department">Departments</a>
                                </li>
                               
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php $url->baseurl();?>services.php?slug=service">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php $url->baseurl();?>login.php?slug=login">Login</a>
                                </li>
                                <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="services.html">services</a>
                                        <a class="dropdown-item" href="dep.html">depertments</a>
                                        <a class="dropdown-item" href="elements.html">Elements</a>
                                    </div>
                                </li> -->
                                <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        blog
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="blog.html">blog</a>
                                        <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                    </div>
                                </li>
 -->
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php $url->baseurl();?>contact.php?slug=contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <a class="btn_2 d-none d-lg-block" href="#">HOT LINE-  02692 267 167</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <?php 

     if (isset($_GET['slug'])) 
     {?>

         <!-- breadcrumb start-->
    <section class="breadcrumb_part breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2><?php 
                             $slug = $_GET['slug'];

                             switch ($slug) {
                                  case "about":
                                      echo"About Us";                                      
                                      break;
                                  case "contact":
                                      echo"Contact Us";
                                      break;
                                  case "department":
                                      echo "Departments";
                                      break;
                                  case "doctor":
                                      echo 'Doctors';
                                      break;
                                  case "service":
                                      echo 'Services';
                                      break;
                                  case "login":
                                      echo 'Login';
                                      break;
                                  default:
                                      echo"HOme";
                                      break;
                              } 
                      




                             ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

<?php         
     }
     else
     {

        ?>

        <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-xl-5">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Healing Hands... Caring Hearts.</h5>
                            <h1>Shashwat Hospital &
                                ICU</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua. Quis ipsum suspendisse ultrices gravida.Risus cmodo viverra </p>
                            <a href="#" class="btn_2">Make an appointment</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner_img">
                        <img src="<?php $url->baseurl();?>assets/img/banner_img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->


        <?php
     }



     ?>
  
