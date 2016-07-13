<?php
/**
 * The template for displaying the front page.
 *
 * This is the template that displays on the front page only.
 *
 * @package _mbbasetheme
 */

 ?>
<?php get_header(); ?>
<?php if (is_home() || is_front_page()) { echo do_shortcode("[metaslider id=37]"); }?>
<!--<div class="jumbotron small-baner"></div>-->
<div class="container-fluid">
    <div class="content-wrapper">
        <?php $box_category_id = get_cat_ID('front-page'); ?>
        <?php query_posts($box_category_id . '&showposts=3'); ?>
        <div class="row front-boxes-wrapper">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 front-box">
                        <?php the_title( '<h1 class="box-header">', '</h1>' ); ?>
                        <?php the_post_thumbnail('medium', array('class' => 'img-responsive img-thumbnail')); ?>
                        <p><?php the_excerpt(); ?></p>
                    </div>
            <?php endwhile; else : ?>
                <p><?php _e( 'Przepraszamy, brak wpisów.' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="jumbotron content-baner">
    <div class="container">
        <div class="row">
            <div class="text-white  col-xs-12 col-sm-6 col-lg-6">
                <h3>lorem ipsum dollor sit amet</h3>
                <p>Lorem Ipsum bullla calculata</p>
            </div>
            <div class="jumbotron-buttons col-xs-12 col-sm-6 col-lg-6">
                <button type="button" class="btn btn-default btn-lg jumbo-button">Napisz do nas</button>
                <button type="button" class="btn btn-default btn-lg  button-grey jumbo-button"><span class="text-white">Przejrzyj nasze projekty</span></button>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
