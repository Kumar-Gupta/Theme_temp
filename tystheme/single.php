<?php  get_header()?>
    <section class="content-holder">
        <article class="content">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="article">
                    <div class="post_thumbnail">
                        <?php 
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                        } 
                        ?>
                    </div>
                    <h2><?php echo get_the_title(); ?></h2>
                    <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
                    <p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
                    <?php the_content(); ?>
                    
                </div>
            <?php endwhile; else : ?>
                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </article>
        <aside class="sidebar">
           <?php get_sidebar(); ?>
        </aside>
        <div class="clearfix"></div>
    </section>

  <?php get_footer()?>

  