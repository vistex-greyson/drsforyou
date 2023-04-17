<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php wp_head(); ?>
    </head>
    <!-- <h1>Header</h1> -->

  <nav class="navbar navbar-expand-lg bg-body-white">
    <div class="container-fluid">
      <a class="navbar-brand" href="/VistexDrsForYou"><img src="http://localhost/VistexDrsForYou/wp-content/uploads/2023/04/DFY-nav-logo.png" width="150" height="127"  alt="DFY nav color logo"/></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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