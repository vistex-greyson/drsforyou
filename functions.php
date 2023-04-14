<?php
/**
 * drsforyou functions and definitions
 *
 * @package drsforyou
 * @since drsforyou 1.0
 */

include('inc/assets.php');
include('inc/index.php');

if ( ! isset( $content_width ) ) {
	$content_width = 800; /* pixels */
}


if ( ! function_exists( 'drsforyou_setup' ) ) :

	function drsforyou_setup() {

		/**
		 * Make theme available for translation.
		 */
		load_theme_textdomain( 'drsforyou_theme', get_template_directory() . '/languages' );

		/**
		 * Add default posts and comments RSS feed links to <head>.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Enable support for post thumbnails and featured images.
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Add support for two custom navigation menus.
		 */
		register_nav_menus( array(
			'primary'   => __( 'Primary Menu', 'drsforyou_theme' ),
			'secondary' => __( 'Secondary Menu', 'drsforyou_theme' ),
		) );

		/**
		 * Enable support for the following post formats:
		 * aside, gallery, quote, image, and video
		 */
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
	}
endif; // drsforyou_theme
add_action( 'drsforyou_theme', 'drsforyou_setup' );

// sidebar  named 'sidebar'
function add_widget_support() {
    register_sidebar( array(
                    'name'          => 'Sidebar',
                    'id'            => 'sidebar',
                    'before_widget' => '<div>',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h2>',
                    'after_title'   => '</h2>',
    ) );
}
// Hook the widget
add_action( 'widgets_init', 'add_widget_support' );
