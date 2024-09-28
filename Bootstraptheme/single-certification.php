<?php get_header() ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<header class="main-header pt-3 pb-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="course-excerpt">
                    <h1 class="fs-5 fw-600"><?php echo get_the_title(); ?></h1>
                    <p><?php echo get_the_excerpt(); ?></p>
                    <p><span class="badge bg-primary"><strong>Duration: </strong> <?php the_field('course_duration') ?></span> <span class="badge bg-secondary"><strong>Fees: </strong><?php the_field('course_fees') ?></span></p>
                </div>
                <a href="#" data-bs-toggle="modal" data-bs-target="#signupmodal" class="btn btn-success btn-small">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                    <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"/>
                    </svg>    
                Sign-up to Get Started</a>
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

<section class="course-description-container py-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-6">
                <?php 
                $value = get_field( "course_description_image" );
                if( $value ) { ?>
                    <img class="img-fluid rounded" src="<?php echo $value ?>" alt="<?php echo get_the_title(); ?>">
                <?php } else { ?>
                    <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/Placeholder.jpg" alt="<?php echo get_the_title()?>">
                <?php } ?>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="course-description small">
                    <h2 class="fs-5 fw-600">Course Description</h2>
                    <?php echo the_content() ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="course-syllabus-container py-3 border-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-6">
                <div class="course-syllabus small">
                    <h2 class="fs-5 fw-600">Course Syllabus</h2>
                    <?php echo the_field('course_syllabus') ?>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <?php 
                $value = get_field( "course_syllabus_image" );
                if( $value ) { ?>
                    <img class="img-fluid rounded" src="<?php echo $value ?>" alt="<?php echo get_the_title(); ?>">
                <?php } else { ?>
                    <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/Placeholder.jpg" alt="<?php echo get_the_title()?>">
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer() ?>