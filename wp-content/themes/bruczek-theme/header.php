<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 23.06.16
 * Time: 19:26
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="main-header" class="site-header" role="banner">
        <div class="container-fluid">
            <div class="header-content-wrapper">
                <div class="row">
                    <div class="col-phone-1 col-xs-3 col-sm-2 col-md-2">
                        <div class="logo-wrapper">
                            <?php bruczek_theme_the_custom_logo(); ?>
                        </div>
                    </div>
                    <div class="col-phone-1 col-xs-5 col-sm-4 col-md-4">
                        <div class="site-title-wrapper">
                            <span class="site-title"><?php bloginfo( 'name' );?></span>
                        </div>
                    </div>
                    <div class="col-phone-1 col-xs-4 col-sm-3 col-sm-offset-3 col-md-3 col-md-offset-3 col-lg-2 col-lg-offset-4">
                        <div class=" phone-number-wrapper">
                            <span class="phone-number">+48 74 265 2525</span>
                        </div>
                    </div>
                    <div class="col-phone-1 col-xs-12 col-sm-3 col-md-3 social-icons"></div>
                </div>
            </div>
        </div>
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </header>