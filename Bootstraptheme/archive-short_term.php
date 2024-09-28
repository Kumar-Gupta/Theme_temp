<?php get_header(); ?>

<header class="cat-header py-3">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 col-lg-6">
                <div class="cat-header-text small text-center">
                    <h1 class="fs-5 fw-600">ShortTerm Courses</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate provident praesentium esseadipisicing elit. Voluptate provident praesentium esse porro consequatur autem impedit soluta, dolor dignissimos vitae.</p>
                    <a data-bs-toggle="modal" data-bs-target="#signupmodal" href="#" class="btn btn-sm btn-success"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </svg> Sign-up to Get Started
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="default-holder mt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9">
                <div class="list-group mb-3">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <a href="<?php the_permalink() ?>" class="list-group-item list-group-item-action" >
                                <div class="row align-items-center">
                                    <div class="col-lg-3 col-md-3">
                                    <?php 
                                        if ( has_post_thumbnail() ) { ?>
                                            <img class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title()?>">
                                    <?php }else{ ?>
                                           <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/Placeholder.jpg" alt="<?php echo get_the_title()?>">
                                    <?php } ?>
                                    </div>
                                    <div class="col-lg-9 col-md-9  small">
                                        <h3 class="fs-6 fw-bold"><?php echo get_the_title() ?></h3>
                                        <p><?php echo get_the_excerpt() ?></p>
                                        <p><span class="badge bg-primary"><strong>Duration: </strong> <?php the_field('course_duration') ?></span> <span class="badge bg-success"><strong>Fees: </strong><?php the_field('course_fees') ?></span></p>
                                    </div>
                                </div>
                            </a>
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
