<?php

function drsforyou_theme_scripts(){
    wp_enqueue_script('bootstrap.bundle.js', get_template_directory_uri(). '/assets/js/bootstrap.bundle.js');
    wp_enqueue_script('fontawesome.js', get_template_directory_uri(). '/assets/js/fontawesome.js');
}
add_action('wp_enqueue_scripts','drsforyou_theme_scripts');


function drsforyou_theme_styles(){
    wp_enqueue_style('bootstrap.css',get_template_directory_uri(). '/assets/css/bootstrap.css' );
    wp_enqueue_style('fontawesome.css',get_template_directory_uri(). '/assets/css/fontawesome.css' );
    wp_enqueue_style('style.css', get_template_directory_uri(). '/style.css' );

} 

add_action('wp_enqueue_scripts', 'drsforyou_theme_styles');

?>