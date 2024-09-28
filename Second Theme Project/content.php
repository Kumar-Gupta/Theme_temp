<article class='post'>
    <h2> <?php echo the_title(); ?></h2>
    <p class="meta"><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></p>

<?php if (has_post_thumbnail()): ?>
    <div>
        <?php the_post_thumbnail() ?>
    </div>
<?php endif; ?>

<br />

<?php echo the_content(); ?>
</article>