<?php
	function dentalcare_customize_register($wp_customize)
    {

            // Panel for Home Page Settings
            $wp_customize->add_panel('homepage_settings', array(
                'title'       => __('Home Page Settings', 'dentalcare'),
                'priority'    => 120,
                'description' => 'Customize the sections of the Home Page',
            ));

                        /**
             * =========================
             * 1. Header Phone Section
             * =========================
             */
            $wp_customize->add_section('header_section', array(
                'title'    => __('Header Section', 'dentalcare'),
                'priority' => 10,
                'panel'    => 'homepage_settings', 
            ));

            // Header contact Setting
            $wp_customize->add_setting('contact_no', array(
                'default'   => '+91 8928910330',
                'type'      => 'theme_mod',
            ));
            
            // Header contact Control
            $wp_customize->add_control('contact_no', array(
                'label'    => __('Contact No', 'dentalcare'),
                'section'  => 'header_section',
                'priority' => 1,
            ));

            /**
             * =========================
             * 2. Banner Section
             * =========================
             */
            $wp_customize->add_section('banner_section', array(
                'title'    => __('Banner Section', 'dentalcare'),
                'priority' => 20,
                'panel'    => 'homepage_settings',  // Attach to Home Page Panel
            ));

            // Banner Heading Setting
            $wp_customize->add_setting('banner_line1', array(
                'default'   => 'Dentist & Dental Clinic',
                'type'      => 'theme_mod',
            ));
            
            // Banner Heading Control
            $wp_customize->add_control('banner_line1', array(
                'label'    => __('Banner Heading', 'dentalcare'),
                'section'  => 'banner_section',
                'priority' => 1,
            ));

            // Banner Subheading Setting
            $wp_customize->add_setting('banner_line2', array(
                'default'   => 'We are the Best Choice For Your Dental Health',
                'type'      => 'theme_mod',
            ));

            // Banner Heading Control
            $wp_customize->add_control('banner_line2', array(
                'label'    => __('Banner Heading', 'dentalcare'),
                'section'  => 'banner_section',
                'priority' => 2,
            ));


            // Image 1 Setting
            $wp_customize->add_setting('banner_image1', array(
                'default' => get_template_directory_uri() . '/img/intro1.png',
                'type'    => 'theme_mod',
            ));

            // Image 1 Control
            $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_image1_control', array(
                'label'    => __('Banner Image 1', 'dentalcare'),
                'section'  => 'banner_section',
                'settings' => 'banner_image1',
                'priority' => 3,
            )));

            // Image 2 Setting
            $wp_customize->add_setting('banner_image2', array(
                'default' => get_template_directory_uri() . '/img/intro2.png',
                'type'    => 'theme_mod',
            ));

            // Image 2 Control
            $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_image2_control', array(
                'label'    => __('Banner Image 2', 'dentalcare'),
                'section'  => 'banner_section',
                'settings' => 'banner_image2',
                'priority' => 4,
            )));
                

            /**
             * =========================
             * 3. Feature Section
             * =========================
             */
            $wp_customize->add_section('feature_section', array(
                'title'    => __('Feature Section', 'dentalcare'),
                'priority' => 30,
                'panel'    => 'homepage_settings',  // Attach to Home Page Panel
            ));

            // Features Heading Setting
            $wp_customize->add_setting('feature_heading', array(
                'default'   => 'Features',
                'type'      => 'theme_mod',
            ));
            
            // Features Heading Control
            $wp_customize->add_control('feature_heading', array(
                'label'    => __('Feature Heading', 'dentalcare'),
                'section'  => 'feature_section',
                'priority' => 1,
            ));

            // Features Heading Setting
            $wp_customize->add_setting('feature_subheading', array(
                'default'   => 'Main Feature <br> of Our Clinic',
                'type'      => 'theme_mod',
            ));
            
            // Features Heading Control
            $wp_customize->add_control('feature_subheading', array(
                'label'    => __('Feature SubHeading', 'dentalcare'),
                'section'  => 'feature_section',
                'priority' => 2,
            ));

            /**
             * =========================
             * 4. About Section
             * =========================
             */
            $wp_customize->add_section('about_section', array(
                'title'    => __('About Section', 'dentalcare'),
                'priority' => 40,
                'panel'    => 'homepage_settings',  // Attach to Home Page Panel
            ));

            // Image 1 Setting
            $wp_customize->add_setting('bg_image', array(
                'default' => get_template_directory_uri() . '/img/about1.png',
                'type'    => 'theme_mod',
            ));

            // Image 1 Control
            $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'bg_image_control', array(
                'label'    => __('Background Image', 'dentalcare'),
                'section'  => 'about_section',
                'settings' => 'bg_image',
                'priority' => 3,
            )));

            /**
             * =========================
             * 5. Services Section
             * =========================
             */
            $wp_customize->add_section('services_section', array(
                'title'    => __('Services Section', 'dentalcare'),
                'priority' => 50,
                'panel'    => 'homepage_settings',  // Attach to Home Page Panel
            ));

            // Service Heading Setting
            $wp_customize->add_setting('service_heading', array(
                'default'   => 'Services',
                'type'      => 'theme_mod',
            ));
            
            // Service Heading Control
            $wp_customize->add_control('service_heading', array(
                'label'    => __('Service Heading', 'dentalcare'),
                'section'  => 'services_section',
                'priority' => 1,
            ));

            // Service Heading Setting
            $wp_customize->add_setting('service_subheading', array(
                'default'   => 'Choose The Best <br> Services We Offers',
                'type'      => 'theme_mod',
            ));
            
            // Service Heading Control
            $wp_customize->add_control('service_subheading', array(
                'label'    => __('Service SubHeading', 'dentalcare'),
                'section'  => 'services_section',
                'priority' => 2,
            ));

            /**
             * =========================
             * 6. Testimonial Section
             * =========================
             */
            $wp_customize->add_section('testimonial_section', array(
                'title'    => __('Testimonial Section', 'dentalcare'),
                'priority' => 60,
                'panel'    => 'homepage_settings',  // Attach to Home Page Panel
            ));

            // Testimonial Heading Setting
            $wp_customize->add_setting('testimonial_heading', array(
                'default'   => 'Testimonial',
                'type'      => 'theme_mod',
            ));
            
            // Testimonial Heading Control
            $wp_customize->add_control('testimonial_heading', array(
                'label'    => __('Testimonial Heading', 'dentalcare'),
                'section'  => 'testimonial_section',
                'priority' => 1,
            ));

            // Testimonial SubHeading Setting
            $wp_customize->add_setting('testimonial_subheading', array(
                'default'   => 'What Customer Says <br> About Us',
                'type'      => 'theme_mod',
            ));
            
            // Testimonial SubHeading Control
            $wp_customize->add_control('testimonial_subheading', array(
                'label'    => __('Testimonial SubHeading', 'dentalcare'),
                'section'  => 'testimonial_section',
                'priority' => 2,
            ));

            // Testimonial Content Setting
            $wp_customize->add_setting('testimonial_content', array(
                'default'   => 'Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Illo, sint itaque temporibus, omnis perspiciatis amet est maxime laborum ea. Quidem unde officia, neque. Modi praesentium, vitae magnam hic minima. Unde.',
                'type'      => 'theme_mod',
            ));
            
            // Testimonial Content Control
            $wp_customize->add_control('testimonial_content', array(
                'label'    => __('Testimonial Content', 'dentalcare'),
                'section'  => 'testimonial_section',
                'priority' => 3,
            ));

            /**
             * =========================
             * 7. Contact Section
             * =========================
             */
            $wp_customize->add_section('contact_section', array(
                'title'    => __('Contact Section', 'dentalcare'),
                'priority' => 70,
                'panel'    => 'homepage_settings',  // Attach to Home Page Panel
            ));

            // Contact phone number Setting
            $wp_customize->add_setting('phonenumber', array(
                'default'   => '+91 89289 10330',
                'type'      => 'theme_mod',
            ));
            
            // Contact phone number Control
            $wp_customize->add_control('phonenumber', array(
                'label'    => __('Phone No', 'dentalcare'),
                'section'  => 'contact_section',
                'priority' => 1,
            ));

            // Contact Email Setting
            $wp_customize->add_setting('emailid', array(
                'default'   => 'tys.manglam@gmail.com',
                'type'      => 'theme_mod',
            ));
            
            // Contact Email Control
            $wp_customize->add_control('emailid', array(
                'label'    => __('Email Id', 'dentalcare'),
                'section'  => 'contact_section',
                'priority' => 2,
            ));

            // Contact address Setting
            $wp_customize->add_setting('address', array(
                'default'   => '121 King Street, Melbourne Victoria 3000 Australia',
                'type'      => 'theme_mod',
            ));
            
            // Contact address Control
            $wp_customize->add_control('address', array(
                'label'    => __('Address', 'dentalcare'),
                'section'  => 'contact_section',
                'priority' => 3,
            ));

            // Contact Timings Setting
            $wp_customize->add_setting('timings', array(
                'default'   => 'Monday - Sunday 08:00 AM - 12.00 PM',
                'type'      => 'theme_mod',
            ));
            
            // Contact Timings Control
            $wp_customize->add_control('timings', array(
                'label'    => __('Timings', 'dentalcare'),
                'section'  => 'contact_section',
                'priority' => 4,
            ));


            /**
             * =========================
             * 8. Social Section
             * =========================
             */

            // Social Section
            $wp_customize->add_section('social', array(
                'title'          => __('Social', 'dentalcare'),
                'priority'       =>80,
                'panel'    => 'homepage_settings',
            ));

            // Facebook URL Setting
            $wp_customize->add_setting('facebook_url', array(
            'default'              => _x('https://www.facebook.com', 'dentalcare'),
            'type'                 => 'theme_mod'
            ));

            // Facebook URL Control
            $wp_customize->add_control( 'facebook_url', array(
            'label'    => __('Facebook URL', 'dentalcare'),
            'section'  => 'social',
            'priority' => 1,
            ));

            // Twitter URL Setting
            $wp_customize->add_setting('twitter_url', array(
            'default'              => _x('https://www.twitter.com', 'dentalcare'),
            'type'                 => 'theme_mod'
            ));

            // Twitter URL Control
            $wp_customize->add_control( 'twitter_url', array(
            'label'    => __('Twitter URL', 'dentalcare'),
            'section'  => 'social',
            'priority' =>2,
            ));

            // Linkedin URL Setting
            $wp_customize->add_setting('linkedin_url', array(
            'default'              => _x('https://www.linkedin.com', 'dentalcare'),
            'type'                 => 'theme_mod'
            ));

            // Linkedin URL Control
            $wp_customize->add_control( 'linkedin_url', array(
            'label'    => __('LinkedIn URL', 'dentalcare'),
            'section'  => 'social',
            'priority' =>2,
            ));

            // Youtube URL Setting
            $wp_customize->add_setting('youtube_url', array(
            'default'              => _x('https://www.youtube.com', 'dentalcare'),
            'type'                 => 'theme_mod'
            ));

            // Youtube URL Control
            $wp_customize->add_control( 'youtube_url', array(
            'label'    => __('Youtube URL', 'dentalcare'),
            'section'  => 'social',
            'priority' =>2,
            ));

        }

	add_action('customize_register','dentalcare_customize_register');