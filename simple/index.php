<?php get_header() ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<header class="custom-page-header py-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="page-title-heading">
                    <h1 class="fs-4 fw-600"><?php echo get_the_title(); ?></h1>
                    <p><?php echo get_the_excerpt(); ?></p>
                    <p>
                       <span class="badge bg-primary"><?php the_time('F jS, Y'); ?></span> by <?php the_author_posts_link(); ?>
                    </p>
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
<?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer() ?>