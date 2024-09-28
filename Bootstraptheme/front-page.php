<?php

/**
 * Template Name: Front Page
 */

get_header() ?>

<header class="main-header pt-3 pb-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <?php if ( is_active_sidebar( 'home_page_banner_text' ) ) : ?>
                            <?php dynamic_sidebar( 'home_page_banner_text' ); ?>
                <?php endif; ?>
                <a href="#" data-bs-toggle="modal" data-bs-target="#signupmodal" class="btn btn-success btn-small">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                    <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"/>
                    </svg>    
                Sign-up to Get Started</a>
            </div>
            <div class="col-lg-6 col-md-6">
                <?php if ( is_active_sidebar( 'home_page_banner_image' ) ) : ?>
                            <?php dynamic_sidebar( 'home_page_banner_image' ); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>

<section class="features pt-3 pb-3 mt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="d-flex align-items-center feature_holder small border rounded mb-3">
                    <div class="flex-shrink-0">
                        <!-- <img class="" src="<?php echo get_template_directory_uri() ?>/img/time.png" alt="Some Featured Text"> -->
                         <img src="<?php echo the_field('feature1_image') ?>" alt="Feature 1 image">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <!-- <h3 class="fs-6 fw-600 mt-3">Features title</h3>
                        <P>Lorem ipsum dolor sit amet  Lorem ipsum dolrng elit. Laborum tempora iste distinctio nisi. Ea, quia facere. Nisi error nulla mollitia? </P> -->
                        <?php echo the_field('feature1') ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="d-flex align-items-center feature_holder small border rounded mb-3">
                    <div class="flex-shrink-0">
                        <!-- <img class="" src="<?php echo get_template_directory_uri() ?>/img/personal-trainer.png" alt="Some Featured Text"> -->
                         <img src="<?php echo the_field('feature2_image') ?>" alt="Feature 2 image">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <!-- <h3 class="fs-6 fw-600 mt-3">Features title</h3>
                        <P>Lorem ipsum dolor sit amet odsit amet coora iste distinctio nisi. Ea, quia facere. Nisi error nulla mollitia? </P> -->
                        <?php echo the_field('feature2') ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="d-flex align-items-center feature_holder small border rounded mb-3">
                    <div class="flex-shrink-0">
                        <!-- <img class="" src="<?php echo get_template_directory_uri() ?>/img/laptop-metrics.png" alt="Some Featured Text"> -->
                         <img src="<?php echo the_field('feature3_image') ?>" alt="Feature 3 image">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <!-- <h3 class="fs-6 fw-600 mt-3">Features title</h3>
                        <P>Lorem ipsum dolor orem ipsum dolor sit. Laborum tempora iste distinctio nisi. Ea, quia facere. Nisi error nulla mollitia? </P> -->
                        <?php echo the_field('feature3') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="course_cat border-top pt-3 pb-3">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-md-6">
                <div class="course_cat_text text-center small">
                    <?php if ( is_active_sidebar( 'course_cat_text' ) ) : ?>
                        <?php dynamic_sidebar( 'course_cat_text' ); ?>
                    <?php endif; ?>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#signupmodal" class="btn btn-success btn-small">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                    <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"/>
                    </svg>    
                     Sign-up to Get Started</a>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-3 col-md-3">
                <a href="<?php echo bloginfo( 'url' ); ?>/job-oriented/" class="card text-decoration-none text-dark text-center mb-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Job-Oriented-Courses-in-Bangalore.jpg" alt="Job Oriented Courses">
                    <div class="card-body">
                        <h3 class="m-0 fs-6 fw-600">Job Oriented Courses</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3">
                <a href="<?php echo bloginfo( 'url' ); ?>/short-term/" class="card text-decoration-none text-dark text-center mb-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Short-Term-Courses-in-Bangalore.jpg" alt="Short Term Courses">
                    <div class="card-body">
                        <h3 class="m-0 fs-6 fw-600">Short Term Courses</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3">
                <a href="<?php echo bloginfo( 'url' ); ?>/certification/" class="card text-decoration-none text-dark text-center mb-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Certification-Courses-in-Bangalore.jpg" alt="Certification Courses">
                    <div class="card-body">
                        <h3 class="m-0 fs-6 fw-600">Certification Courses</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3">
                <a href="<?php echo bloginfo( 'url' ); ?>/online/" class="card text-decoration-none text-dark text-center mb-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Online-Courses-in-Bangalore.jpg" alt="Online Courses">
                    <div class="card-body">
                        <h3 class="m-0 fs-6 fw-600">Online Courses</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="services border-top pt-4 pb-4">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-md-6">
                <div class="course_cat_text text-center small">
                    <?php if ( is_active_sidebar( 'services_text' ) ) : ?>
                        <?php dynamic_sidebar( 'services_text' ); ?>
                    <?php endif; ?>
                    <a data-bs-toggle="modal" data-bs-target="#signupmodal" href="#" class="btn btn-sm btn-success"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </svg> Sign-up to Get Started
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main-content border-top pb-4 pt-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="content-area">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
            <?php               
            if ( has_post_thumbnail() ) { ?>
                <img class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
            <?php }else{ ?>
                <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/Placeholder.jpg" alt="<?php echo get_the_title(); ?>">
            <?php }

            ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>