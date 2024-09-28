<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    <style>
        .showcase{
            height: <?php echo get_theme_mod('showcase_height',700) ?>px;
            background:url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg') ?>);
        }

        .banner{
            width: 100%;
             background:url(<?php echo get_theme_mod('banner_image', get_bloginfo('template_url').'/img/banner.jpg') ?>);
        }
    </style>
  </head>
  <body <?php body_class() ?> >

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light custom-navbar border-bottom fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo bloginfo( 'url' ) ?>">
          <!-- <img src="<?php echo get_template_directory_uri() ?>/img/tys-logo.png" alt="">  -->
          <!-- <?php 
              $custom_logo_id = get_theme_mod( 'custom_logo');
              $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
              echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="">';  ?> -->

              CleanCut Theme
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <?php
                  wp_nav_menu(array(
                      'theme_location' => 'main-menu',
                      'container' => false,
                      'menu_class' => '',
                      'fallback_cb' => '__return_false',
                      'items_wrap' => '<ul id="%1$s" class="navbar-nav ml-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                      'depth' => 2,
                      'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ));
                ?>
      
        </div>
      </div>
  </nav>


  <!-- Navbar -->