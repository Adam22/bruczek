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

/**
 * Filter the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return '';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

require get_template_directory() . '/inc/custom-header.php';

