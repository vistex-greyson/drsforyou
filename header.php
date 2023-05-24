<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <?php wp_head(); ?>
    </head>
    <!-- <h1>Header</h1> -->
    <div class="dfy-top-bar container-fluid bg-dark p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone text-white me-2"></small>
                    <small>+91 8261890890</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-envelope text-white me-2"></small>
                    <small>info@doctorsforyou.org</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-dark text-white me-1" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-dark text-white me-0" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-sm-square bg-dark text-white me-1" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-dark text-white me-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-dark text-white me-1" href="#"><i class="fab fa-youtube"></i></a>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <button class="text-white bg-dark donate-button"><a href="#">Donate Online</a></button>
                </div>
            </div>
        </div>
    </div>
  <nav class="navbar navbar-expand-lg bg-body-white dfy-navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="/VistexDrsForYou"><img src="https://drs.vistex.com/wp-content/uploads/2023/05/DFY-nav-logo-1.png" width="150" height="127"  alt="DFY nav color logo"/></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
          <?php
          wp_nav_menu(array(
            'theme_location' => 'Drs For You ',
            'container_class' => 'custom-menu-class',
            'menu_id' => 'top-nav-menu',
            'menu_class' => 'top-nav-bar',
          ));

          ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>