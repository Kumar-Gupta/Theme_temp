<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Character Set -->
    <meta charset="<?php bloginfo('charset'); ?>" />

    <!-- Viewport Meta Tag for Responsive Design -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Meta Title -->
    <title>
        <?php
        if (is_singular()) {
            echo esc_html(get_post_meta(get_the_ID(), '_meta_title', true) ?: wp_get_document_title());
        } else {
            bloginfo('name');
        }
        ?>
    </title>

    <!-- Meta Description for SEO -->
    <meta name="description" content="<?php
    if (is_singular()) {
        echo esc_attr(get_post_meta(get_the_ID(), '_meta_description', true) ?: get_bloginfo('description'));
    } else {
        bloginfo('description');
    }
    ?>" />

    <!-- Canonical URL to avoid duplicate content issues -->
    <link rel="canonical" href="<?php
    if (is_singular()) {
        echo esc_url(get_post_meta(get_the_ID(), '_canonical_url', true) ?: get_permalink());
    } else {
        echo esc_url(home_url('/'));
    }
    ?>" />

    <!-- Open Graph Meta Tags for Social Sharing -->
    <meta property="og:title" content="<?php
    if (is_singular()) {
        echo esc_attr(get_post_meta(get_the_ID(), '_og_title', true) ?: wp_get_document_title());
    } else {
        bloginfo('name');
    }
    ?>" />
    <meta property="og:description" content="<?php
    if (is_singular()) {
        echo esc_attr(get_post_meta(get_the_ID(), '_og_description', true) ?: get_bloginfo('description'));
    } else {
        bloginfo('description');
    }
    ?>" />
    <meta property="og:url" content="<?php
    if (is_singular()) {
        echo esc_url(get_permalink());
    } else {
        echo esc_url(home_url('/'));
    }
    ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="<?php
    if (is_singular()) {
        echo esc_url(get_post_meta(get_the_ID(), '_og_image', true) ?: get_the_post_thumbnail_url());
    } else {
        echo esc_url(get_template_directory_uri() . '/img/logo.png'); // Default OG image
    }
    ?>" />

    <!-- Schema Markup (JSON-LD) -->
    <?php if (is_singular()) : ?>
        <script type="application/ld+json">
        <?php echo get_post_meta(get_the_ID(), '_schema_markup', true); ?>
        </script>
    <?php endif; ?>

    <!-- Robots Meta Tags -->
    <meta name="robots" content="<?php
    echo esc_attr(get_post_meta(get_the_ID(), '_robots_meta', true) ?: 'index, follow');
    ?>" />

    <!-- Profile for XFN (XHTML Friends Network) -->
    <link rel="profile" href="http://gmpg.org/xfn/11" />

    <!-- Pingback URL -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Threaded Comments Support -->
    <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>

    <!-- WordPress Header Hooks -->
    <?php wp_head(); ?>

    <!-- Inline Style for Background Image with Lazy Loading for Performance -->
    <style>
        .about .content-left {
            background-image: url("<?php echo esc_url(get_theme_mod('bg_image', get_template_directory_uri() . '/img/about1.png')); ?>");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body <?php body_class(); ?>>

    <!-- preloader -->
    <div class="fakeLoader"></div>
    <!-- end preloader -->

    <!-- navbar -->
    <div id="navbar" class="navbar navbar-expand-lg justify-content-center align-items-center">
        <div class="container">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand">
                <?php
                $custom_logo_id = get_theme_mod('custom_logo');
                $custom_logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');
                echo '<img loading="lazy" src="' . esc_url($custom_logo_url) . '" alt="' . esc_attr(get_bloginfo('name')) . '">';
                ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="la la-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'container' => false,
                    'menu_class' => '',
                    'fallback_cb' => '__return_false',
                    'items_wrap' => '<ul id="%1$s" class="navbar-nav nav %2$s">%3$s</ul>',
                    'depth' => 2,
                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));
                ?>
            </div>

            <ul class="button-navbar">
                <li><i class="la la-phone"></i><?php echo esc_html(get_theme_mod('contact_no', '+91 89289 10330')); ?></li>
            </ul>
        </div>
    </div>
    <!-- end navbar -->
