<?php get_header(); ?>


<div class="section-a p-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-sm-6 animated fadeInLeft">
                <?php the_content() ?>
                 <button class="btn btn-primary">Read More</button>
            </div>
            <div class=" col-lg-5 offset-lg-2 col-sm-6 animated fadeInRight">
                <?php 
                        if ( has_post_thumbnail() ) { ?>
                            <img class="img-fluid rounded-circle" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title()?>">
                    <?php }else{ ?>
                        <img class="img-fluid rounded-circle" src="<?php echo get_template_directory_uri(); ?>/img/Placeholder.jpg" alt="<?php echo get_the_title()?>">
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<div class="section-b p-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-sm-6 animated fadeInLeft">
                <img src="<?php the_field('section1_image') ?>" alt="" class="img-fluid rounded-circle">
            </div>
            <div class="col-lg-5 offset-lg-2 col-sm-6 animated fadeInRight">
                 <?php the_field('section1_content') ?>
                  <button class="btn btn-primary">Read More</button>
            </div>
        </div>
    </div>
</div>
<div class="section-c p-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-sm-6 animated fadeInLeft">
                 <?php the_field('section2_content') ?>
                  <button class="btn btn-primary">Read More</button>
            </div>
            <div class=" col-lg-5  offset-lg-2 col-sm-6 animated fadeInRight">
                <img src="<?php the_field('section2_image') ?>" alt="" class="img-fluid rounded-circle">
            </div>
        </div>
    </div>
</div>

<!-- <section class="default-holder mt-3">
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
</section> -->

<?php get_footer(); ?>
