<div class="w3-col m4 l4 text-center w3-animate-opacity p-4">
    <?php 
        if ( has_post_thumbnail() ) { ?>
            <a href="<?php the_permalink(); ?>"><img class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title()?>"></a>
        <?php }else{ ?>
            <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/Placeholder.jpg" alt="<?php echo get_the_title()?>">
    <?php } ?>
    <?php echo the_content(); ?>
</div>
