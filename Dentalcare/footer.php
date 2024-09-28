
		<!-- footer -->
		<footer>
			<div class="container">
				<div class="row">
					
					<div class="col-md col-sm col-12">
						<ul>
							<?php if(get_theme_mod('facebook_url', 'https://facebook.com') != '') : ?>
							<li><a href="<?php echo get_theme_mod('facebook_url','https://facebook.com'); ?>" target="_blank"><i class="la la-facebook"></i></a></li>
							<?php endif; ?>

							<?php if(get_theme_mod('twitter_url', 'https://twitter.com') != '') : ?>
							<li><a href="<?php echo get_theme_mod('twitter_url','https://twitter.com'); ?>" target="_blank"><i class="	la la-twitter"></i></a></li>
							<?php endif; ?>

							<?php if(get_theme_mod('linkedin_url', 'https://linkedin.com') != '') : ?>
							<li><a href="<?php echo get_theme_mod('facebook_url','https://linkedin.com'); ?>" target="_blank"><i class="la la-linkedin"></i></a></li>
							<?php endif; ?>

							<?php if(get_theme_mod('youtube_url', 'https://youtube.com') != '') : ?>
							<li><a href="<?php echo get_theme_mod('facebook_url','https://youtube.com'); ?>" target="_blank"><i class="la la-youtube"></i></a></li>
							<?php endif; ?>
						</ul>
					</div>
					<div class="col-md col-sm col-12">
                         Copyright &copy; <?php echo date('Y') ?> All Rights Reserved to TYS 
					</div>
				</div>
			</div>
		</footer>
		<!-- end footer -->

    <?php wp_footer(); ?>

    	<!-- script -->
		<script src="<?php echo get_template_directory_uri()?>/js/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri()?>/js/fakeLoader.js"></script>
		<script src="<?php echo get_template_directory_uri()?>/js/bootstrap.bundle.min.js"></script>
		<script src="<?php echo get_template_directory_uri()?>/js/jquery.filterizr.min.js"></script>
		<script src="<?php echo get_template_directory_uri()?>/js/magnific-popup.min.js"></script>
		<script src="<?php echo get_template_directory_uri()?>/js/swiper.min.js"></script>
		<script src="<?php echo get_template_directory_uri()?>/js/main.js"></script>
		<script src="<?php echo get_template_directory_uri()?>/js/custom.js"></script>
        
	</body>
</html>