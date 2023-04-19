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
      <a class="navbar-brand" href="/VistexDrsForYou"><img src="http://localhost/VistexDrsForYou/wp-content/uploads/2023/04/DFY-nav-logo.png" width="150" height="127"  alt="DFY nav color logo"/></a>
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