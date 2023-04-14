<?php

function register_drsforyou_top_nav() {
    register_nav_menus(array(
        'drsforyou-top-nav' =>__('Drs For You Top Menu')
    ));
}
add_action('init', 'register_drsforyou_top_nav');




?>