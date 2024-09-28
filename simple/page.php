<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- <header class="custom-page-header py-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="page-title-heading">
                    <h1 class="fs-4 fw-600"><?php echo get_the_title(); ?></h1>
                    <p><?php echo get_the_content(); ?></p>
                </div>
            </div>
        </div>
    </div>
</header> -->

<section class="page-content py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-9">
                <article class="main-content">
                    <?php the_content() ?>
                </article>
            </div>
            <div class="col-md-3 col-lg-3">
                 <?php get_sidebar() ?>
            </div>
        </div>
    </div>
</section>  

<?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer() ?>