  <footer class="main-footer">
            <?php if ( is_active_sidebar( 'home_footer_widget' ) ) : ?>
                    <?php dynamic_sidebar( 'home_footer_widget' ); ?>
            <?php endif; ?>
            <div class="clearfix"></div>
    </footer>

    <div class="powered">
        <p><small>Powered by<a href="<?php echo bloginfo( 'url' ) ?>"> <?php echo bloginfo( 'name' ) ?></a></small> | <?php echo date('Y') ?></p>
    </div>

</div>

<?php wp_footer(); ?>
</body>
</html>
