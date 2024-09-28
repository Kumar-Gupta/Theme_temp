<?php get_header(); ?>

<section class="default-holder mt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9">
                <div class="card">
                    <div class="card-header fs-4 fw-700">Blog Posts</div>
                    <div class="card-body">
                        <?php if (have_posts()): ?>
                            <?php while (have_posts()): the_post() ?>
                            <a href="<?php the_permalink() ?>" class="text-decoration-none text-dark">
                                <div class="card-body border-bottom">
                                    <div class="row align-self-center">
                                            <div class="col-md-12 col-lg-12">
                                                <?php 
                                                        if ( has_post_thumbnail() ) { ?>
                                                            <img class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title()?>">
                                                        <?php }else{ ?>
                                                            <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/Placeholder.jpg" alt="<?php echo get_the_title()?>">
                                                <?php } ?>

                                                <div class="page-title-heading pt-3">
                                                        <h1 class="fs-4 fw-600"><?php echo get_the_title(); ?></h1>
                                                        <p class= "meta">Posted at <?php the_time('F jS, Y'); ?> by <?php the_author() ?></p>
                                                        <p><?php echo get_the_content(); ?></p>
                                                    </div>
                                                </div>
                                    </div>
                                </div>
                            </a>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-3">
                <?php get_sidebar() ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
