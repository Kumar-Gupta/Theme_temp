<?php get_header(); ?>

<section>
    <div class="container">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <h4 class="alert-heading">Well done!</h4>
        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit read this important alert message. This example text is going to run a bit read this important alert message. This example text is going to run a bit read this important alert message. This example text is going to run a bit read this important alert message. This example text is going to run a bit longer so that you can see how spacrun a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
        </div>
    </div>
</section>

<section class="default-holder mt-3">
    <div class="container">
        <div class="row">

            <div class="card col-lg-9 col-md-9 p-3 mb-3">
                <div class="row">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="col-md-4 col-lg-4 mb-3">
                            <a href="<?php the_permalink() ?>" class="text-decoration-none text-dark" >
                                <div class="card">
                                        <div class="card-header">
                                            <span class="fs-4 fw-400"><?php echo the_title() ?></span>
                                            <br>
                                            <span class="fs-6 fw-600"><?php the_field('price') ?></span>
                                         </div>
                                        <div class="card-body">
                                        <?php 
                                            if ( has_post_thumbnail() ) { ?>
                                                <img class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title()?>">
                                        <?php }else{ ?>
                                            <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/Placeholder.jpg" alt="<?php echo get_the_title()?>">
                                            <?php } ?>
                                        </div>
                                        <div class="card-footer">
                                            <button class="btn btn-success">Details</button>
                                        </div>
                                        
                                </div>
                        </a>
                        </div>
                            <?php endwhile; else : ?>
                               <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                            <?php endif; ?>
                </div>
                
            </div>

            <div class="col-lg-3 col-md-3">
                <?php get_sidebar() ?>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>
