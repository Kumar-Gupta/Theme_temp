<?php get_header() ?>


        <div class="w3-row">
            <div class="w3-col m9 l9">
               <article>
                    <h2> <?php echo the_title(); ?></h2>
                    <p class="meta"><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></p>
                    <p><?php the_content() ?></p>
                    <hr>

                    <?php 
                        if ( has_post_thumbnail() ) { ?>
                            <a href="<?php the_permalink(); ?>"><img class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title()?>"></a>
                        <?php }else{ ?>
                            <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/Placeholder.jpg" alt="<?php echo get_the_title()?>">
                    <?php } ?>

                    <div class="w3-row">
                        <div class="w3-col l-2">
                            <br>
                            <a href="<?php site_url() ?>" class="btn btn-danger">Back</a>
                        </div>
                    </div>
               </article>
            </div>
        </div>

<?php get_footer( ); ?>