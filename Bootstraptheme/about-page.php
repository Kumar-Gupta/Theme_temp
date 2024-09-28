<?php

/**
 * Template Name: About page
 */

get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<header class="custom-page-header py-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="page-title-heading">
                    <h1 class="fs-4 fw-600"><?php echo get_the_title(); ?></h1>
                    <p><?php echo get_the_excerpt(); ?></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                 <?php 
                        if ( has_post_thumbnail() ) { ?>
                            <img class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title()?>">
                        <?php }else{ ?>
                            <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/Placeholder.jpg" alt="<?php echo get_the_title()?>">
                <?php } ?>
            </div>
        </div>
    </div>
</header>

<section class="section-three py-5 border-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-6">
                <div class="who_we_are_image">
                   <img class="img-fluid rounded" src="<?php echo the_field('who_we_are_image') ?>" alt="Who we are image">
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="who-we-are-text small">
                    <?php the_field('who_we_are') ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-three py-5 border-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-6">
                <div class="who-we-do-text small">
                    <?php the_field('what_we_do') ?>
                </div>
            </div>
             <div class="col-md-6 col-lg-6">
                <div class="what_we_do_image">
                   <img class="img-fluid rounded" src="<?php echo the_field('what_we_do_image') ?>" alt="What we do image">
                </div>
            </div>
        </div>
    </div>
</section>

    <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

<?php get_footer(); ?>