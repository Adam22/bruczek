<?php
function bower_enqueue_assets() {
    // bower:css
    // endbower

    // bower:js
    wp_enqueue_script('jquery-js',get_stylesheet_directory_uri() . '/bower_components/jquery/dist/jquery.js');
    wp_enqueue_script('bootstrap-js',get_stylesheet_directory_uri() . '/bower_components/bootstrap-sass/assets/javascripts/bootstrap.js');
    // endbower
}
add_action('wp_enqueue_scripts', 'bower_enqueue_assets');?>