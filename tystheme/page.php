<?php  get_header()?>
    <section class="content-holder">
        <article class="content">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="article">
                    <h2><?php echo get_the_title(); ?></h2>
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

  