<?php

function register_drsforyou_navs() {
    register_nav_menus(array(
        'drsforyou-top-nav' =>__('Drs For You Top Menu'),
        'drsforyou-bottom-footer' =>__('Drs For You Bottom Menu'),
        
    ));
}
add_action('init', 'register_drsforyou_navs');




?>