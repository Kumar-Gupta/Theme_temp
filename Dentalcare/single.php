<?php get_header() ?>

		<!-- intro -->
		<!-- <div id="home" class="intro">
			<div class="container">
				<div class="content-box">
					<span class='span-title'><?php echo get_theme_mod( 'banner_line1', 'Dentist & Dental Clinic') ?></span>
					<h1><?php echo get_theme_mod('banner_line2', 'We are the Best Choice For Your Dental Health'); ?></h1>
					<div class="row align-items-center">
						<div class="col-md">
							<div class="content-left">
								<img loading="lazy" src="<?php echo get_theme_mod('banner_image1', get_bloginfo('template_url').'/img/intro1.png')?>" alt="">
							</div>
						</div>
						<div class="col-md-7">
							<div class="content-right">
								<img loading="lazy" src="<?php echo get_theme_mod('banner_image2', get_bloginfo('template_url').'/img/intro2.png')?>" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- end intro -->

        <div class="main-section">
            <div class="contianer">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-6 d-flex     justify-content-center">
                        <div>
                            <img loading="lazy" src="<?php the_field('service_image') ?>" width="100px !important" height="100px" alt="<?php bloginfo( 'title' )?>"> 
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <h2> <?php the_title() ?></h2>
                        <h6><?php the_content()?></h6>
                    </div>
                </div>
            </div>
        </div>

		<!-- features -->
		<div class="features">
			<div class="container">
				<span class='span-title'><?php echo get_theme_mod( 'feature_heading', 'Features') ?></span>
				<h2 class="text-center"><?php echo get_theme_mod('feature_subheading', 'Main Features <br> Our Clinic'); ?></h2>
				<div class="row">

					<?php
					
					$args = array(
						'post_type' => 'feature',
						'posts_per_page' => 4, 
					);
					$feature_query = new WP_Query($args);

					
					if ($feature_query->have_posts()) :
						while ($feature_query->have_posts()) : $feature_query->the_post();

							
							$icon_class = get_field('feature_image_class'); 

					?>
						<div class="col-md col-sm-6">
							<div class="content">
								<div class="icon">
									<!-- Display Icon Class from Custom Field -->
									<i class="<?php echo esc_attr($icon_class); ?>"></i>
								</div>
								<div class="text">
									<!-- Display Feature Title -->
									<h6><?php the_title(); ?></h6>
								</div>
							</div>
						</div>

					<?php
						endwhile;
						wp_reset_postdata(); // Reset post data after the custom query
					else :
						echo '<p>No features found</p>';
					endif;
					?>

				</div>
			</div>
		</div>

		<!-- end features -->

		<!-- about -->
		 <?php get_the_post_thumbnail_url(); ?>
			<div id="about" class="about">
				<div class="container">
					<div class="row gx-5 align-items-center">
						<div class="col-md-5">
							<div class="content-left">
								<img loading="lazy" src="<?php the_field('about_image2') ?>" alt="<?php echo get_the_title()?>">
								<div class="open">
									<i class="la la-clock"></i>
									<h6>Open 24 Hours</h6>
								</div>
							</div>
						</div>
						<div class="col-md-7">
							<div class="content">
								<span class="span-title-left"><?php the_title() ?></span>
								<div><?php the_content() ?></div>
								<div class="row">
									<div class="col">
										<div class="content-icon">
											<div class="icon">
												<i class="la la-hand-holding-usd"></i>
											</div>
											<div class="text">
												<h6>Affordable <br>Prices</h6>
												<p>Lorem, ipsum dolor sit amet consectetur, adipisicing elit. </p>
											</div>
										</div>
									</div>
									<div class="col">
										<div class="content-icon">
											<div class="icon">
												<i class="la la-tooth"></i>
											</div>
											<div class="text">
												<h6>Dental<br>Specialist</h6>
												<p>Lorem, ipsum dolor sit amet consectetur, adipisicing elit. </p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- end about -->

		<!-- services -->
		<div id="services" class="services">
			<div class="container">
				<span class="span-title"><?php echo get_theme_mod( 'service_heading', 'Services' ) ?></span>
				<h2 class="text-center"><?php echo get_theme_mod('service_subheading', 'Choose The Best <br> Services We Offers') ?></h2>

				<div class="row g-5">
					<?php
					// Query the 'services' post type
					$services_query = new WP_Query(array(
						'post_type' => 'service',
						'posts_per_page' => 6, 
					));
					
					// Check if the query has results
					if ($services_query->have_posts()) :
						// Loop through the posts
						while ($services_query->have_posts()) : $services_query->the_post();
							?>
							<div class="col-md-4">
								<a href="<?php the_permalink() ?>">
								<div class="content">
									<!-- Service Image -->
									<img loading="lazy" src="<?php the_field('service_image'); ?>" alt="<?php the_field('service_image_alt'); ?>">

									<!-- Service Title -->
									<h5><?php the_title(); ?></h5>

									<!-- Service Description -->
									<p><?php the_excerpt(); ?></p>
								</div>
								</a>
							</div>
							<?php
						endwhile;
						// Reset the query after the loop
						wp_reset_postdata();
					else : 
						?>
						<p><?php _e('No services found', 'dentalcare'); ?></p>
					<?php
					endif;
					?>
				</div>


			</div>
		</div>
		<!-- end services -->


		<!-- testimonial -->
		<div id="testimonial" class="testimonial">
			<div class="container">
				<div class="row gx-5 align-items-center">
					<div class="col-md">
						<span class="span-title-left"><?php echo get_theme_mod( 'testimonial_heading', 'Testimonials' ) ?></span>
						<h2><?php echo get_theme_mod('testimonial_subheading', 'What Customer Says <br> About Us') ?></h2>
						<p><?php echo get_theme_mod( 'testimonial_content', 'Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Illo, sint itaque temporibus, omnis perspiciatis amet est maxime laborum ea. Quidem unde officia, neque. Modi praesentium, vitae magnam hic minima. Unde.' ) ?></p>
					</div>
					<div class="col-md">
						<div class="content">
							<?php
								// Query the 'services' post type
								$services_query = new WP_Query(array(
									'post_type' => 'testimonial',
									'posts_per_page' => 3, 
								));
								
								// Check if the query has results
								if ($services_query->have_posts()) :
									// Loop through the posts
									while ($services_query->have_posts()) : $services_query->the_post();
										?>
											<div class="entry">
											<div class="image">
												<?php if (has_post_thumbnail()) : ?>
													<img loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
												<?php else: ?>
													<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/testimonial1.png" alt="Default Testimonial Image">
												<?php endif; ?>
											</div>
											<div class="text">
												<h6><?php echo the_field('user_name') ?></h6>
												<p><?php echo the_content() ?></p>
											</div>
										</div>
										<?php
									endwhile;
									// Reset the query after the loop
									wp_reset_postdata();
								else :
									?>
									<p><?php _e('No Testinomials yet. Please Add One', 'dentalcare'); ?></p>
								<?php
								endif;
								?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end testimonial -->

		<!-- contact -->
		<div id="contact" class="contact">
			<div class="container">
				<div class="content-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.3059353029!2d-74.25986548248684!3d40.69714941932609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sKota%20New%20York%2C%20New%20York%2C%20Amerika%20Serikat!5e0!3m2!1sid!2sid!4v1639286790548!5m2!1sid!2sid" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
				<div class="content-box">
			<div class="row g-4 align-items-center">
				<?php if(get_theme_mod( 'phonenumber', '+91 89289 10330' ) != '') : ?>
				<div class="col-md-6">
					<div class="content">
						<div class="icon">
							<i class="la la-phone"></i>
						</div>
						<div class="text">
							<h5>Phone</h5>
							<span><?php echo get_theme_mod( 'phonenumber', '+91 89289 10330' ); ?></span>
						</div>
					</div>
				</div>
				<?php endif; ?>

				<?php if ( get_theme_mod( 'emailid', 'tys.manglam@gmail.com' ) ) : ?>
				<div class="col-md-6">
					<div class="content">
						<div class="icon">
							<i class="la la-envelope"></i>
						</div>
						<div class="text">
							<h5>Email</h5>
							<span><?php echo get_theme_mod( 'emailid', 'tys.manglam@gmail.com' ); ?></span>
						</div>
					</div>
				</div>
				<?php endif; ?>

				<?php if ( get_theme_mod( 'address', '121 King Street, Melbourne Victoria 3000 Australia' ) ) : ?>
				<div class="col-md-6">
					<div class="content">
						<div class="icon">
							<i class="la la-map"></i>
						</div>
						<div class="text">
							<h5>Address</h5>
							<span><?php echo get_theme_mod( 'address', '121 King Street, Melbourne Victoria 3000 Australia' ); ?></span>
						</div>
					</div>
				</div>
				<?php endif; ?>

				<?php if ( get_theme_mod( 'timings', 'Monday - Sunday 08:00 AM - 12.00 PM' ) ) : ?>
				<div class="col-md-6">
					<div class="content content-clock">
						<div class="icon">
							<i class="la la-clock"></i>
						</div>
						<div class="text">
							<h5>Open Hours</h5>
							<span><?php echo get_theme_mod( 'timings', 'Monday - Sunday 08:00 AM - 12.00 PM' ); ?></span>
						</div>
					</div>
				</div>
				<?php endif; ?>
			</div>

				</div>
			</div>
		</div>
		<!-- end contact -->
<?php get_footer() ?>