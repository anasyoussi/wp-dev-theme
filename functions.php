<?php 

/**
 * Theme Functions.
 * 
 * @package Aquila
 */



if( !defined('AQUILA_DIR_PATH') ) {
    define('AQUILA_DIR_PATH', untrailingslashit( get_template_directory(  ) )); 
}

if( !defined('AQUILA_DIR_URI') ) {
    define('AQUILA_DIR_URI', untrailingslashit( get_template_directory_uri(  ) )); 
}
  
require_once AQUILA_DIR_PATH . '/inc/helpers/autoloader.php'; 

function aquila_get_theme_instance() {
    \AQUILA_THEME\Inc\AQUILA_THEME::get_instance(); 
}

aquila_get_theme_instance(); 
 
function aquila_enqueue_scripts() {  

    // wp_register_style('style-css', get_stylesheet_uri() . '/style.css', 'all');   
    // wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], false, 'all');


    // wp_register_script('main-js', get_stylesheet_uri() . '/assets/main.js', 'all');  
    // wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, 'all');

    // wp_enqueue_style( 'style-css' ); 
    // wp_enqueue_style( 'bootstrap-css' );  

    // wp_enqueue_script( 'main-js' ); 
    // wp_enqueue_script( 'bootstrap-js' );  

}

// add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts'); 