<?php
function bower_enqueue_assets() {

    // bower:css
    // endbower
    wp_enqueue_style('main-styles', get_template_directory_uri(). '/style.css');
    // bower:js
    wp_enqueue_script('jquery-js',get_stylesheet_directory_uri() . '/bower_components/jquery/dist/jquery.js');
    wp_enqueue_script('bootstrap-js',get_stylesheet_directory_uri() . '/bower_components/bootstrap-sass/assets/javascripts/bootstrap.js');
    // endbower
}
add_action('wp_enqueue_scripts', 'bower_enqueue_assets');

add_theme_support( 'custom-logo', array(
    'height'      => 248,
    'width'       => 248,
    'flex-height' => true,
) );

add_theme_support( 'post-thumbnails');

require get_template_directory() . '/inc/custom-header.php';

