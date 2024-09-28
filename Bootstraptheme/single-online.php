<?php get_header() ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<header class="main-header pt-3 pb-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="course-excerpt">
                    <h1 class="fs-5 fw-600"><?php echo get_the_title(); ?></h1>
                    <p><?php echo get_the_excerpt(); ?></p>
                </div>
                <a href="<?php the_field('course_link') ?>" class="btn btn-success btn-sm">Sign-Up Now</a>
            </div>
            <div class="col-lg-6 col-md-6">
                 <?php  if ( has_post_thumbnail() ) { ?>
                            <img class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title()?>">
                        <?php }else{ ?>
                            <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/Placeholder.jpg" alt="<?php echo get_the_title()?>">
                <?php } ?>
            </div>
        </div>
    </div>
</header>

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

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer() ?>