<?php get_header(); ?>

<section class="default-holder mt-3">
    <div class="container">
        <div class="row">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="card col-lg-9 col-md-9 p-3 mb-3">
                <div class="row">
                        <div class="col-md-5 col-lg-5 mb-3">
                                <a class="btn btn-primary" href="<?php bloginfo( 'url' ) ?>">Go back</a>
                                <?php 
                                    if ( has_post_thumbnail() ) { ?>
                                        <img class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title()?>">
                                <?php }else{ ?>
                                    <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/Placeholder.jpg" alt="<?php echo get_the_title()?>">
                                    <?php } ?>
                        </div>
                        <div class="col-md-7 col-lg-7">
                                <div class="card">
                                        <div class="card-header">
                                            <h1 class="fw-600"><?php echo the_title() ?></h1>
                                            <p class="fs-6 fw-600"><?php the_field('price') ?></p>
                                         </div>
                                        <div class="card-body">
                                            <p><?php echo get_the_content() ?></p>
                                        </div>
                                        <div class="card-footer">
                                            <button class="btn btn-success">Buy Now</button>
                                        </div>
                                        <div class="card-footer">
                                        <h6>Tags: shirts, Tshits, Black</h6>
                                        </div>
                                </div>
                        </div>
                    </div>
                            <?php endwhile; else : ?>
                               <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                            <?php endif; ?>
                
            </div>

            <div class="col-lg-3 col-md-3">
                <?php get_sidebar() ?>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>
