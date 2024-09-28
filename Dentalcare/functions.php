<?php

require get_template_directory().'/inc/customizer.php';

// Theme Files
function theme_files(){
    // Enqueue CSS files
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'fakeloader-css', get_template_directory_uri() . '/css/fakeLoader.css' );
    wp_enqueue_style( 'line-awesome-css', get_template_directory_uri() . '/css/line-awesome.min.css' );
    wp_enqueue_style( 'magnific-popup-css', get_template_directory_uri() . '/css/magnific-popup.css' );
    wp_enqueue_style( 'swiper-css', get_template_directory_uri() . '/css/swiper.min.css' );
    wp_enqueue_style( 'main-style', get_stylesheet_uri() ); // This is the style.css file

}
add_action( 'wp_enqueue_scripts', 'theme_files' );

add_action( 'wp_enqueue_scripts', 'theme_files' );

//Custom logo support
add_theme_support('custom-logo');

//Title Tag support
add_theme_support( 'title-tag' );

//Page Excerpt support
add_post_type_support( 'page', 'excerpt' );

//Featured Image support 
add_theme_support( 'post-thumbnails' ); 

//custom widgets
function custom_widgets() {

	register_sidebar( array(
		'name'          => 'Default Sidebar',
		'id'            => 'default_sidebar',
		'before_widget' => '<aside class="card mb-3 default-sidebar">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="fs-5 card-header">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'custom_widgets' );


//bootstrap nabvar walker
class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu
{
  private $current_item;
  private $dropdown_menu_alignment_values = [
    'dropdown-menu-start',
    'dropdown-menu-end',
    'dropdown-menu-sm-start',
    'dropdown-menu-sm-end',
    'dropdown-menu-md-start',
    'dropdown-menu-md-end',
    'dropdown-menu-lg-start',
    'dropdown-menu-lg-end',
    'dropdown-menu-xl-start',
    'dropdown-menu-xl-end',
    'dropdown-menu-xxl-start',
    'dropdown-menu-xxl-end'
  ];

  function start_lvl(&$output, $depth = 0, $args = null)
  {
    $dropdown_menu_class[] = '';
    foreach($this->current_item->classes as $class) {
      if(in_array($class, $this->dropdown_menu_alignment_values)) {
        $dropdown_menu_class[] = $class;
      }
    }
    $indent = str_repeat("\t", $depth);
    $submenu = ($depth > 0) ? ' sub-menu' : '';
    $output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ",$dropdown_menu_class)) . " depth_$depth\">\n";
  }

  function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
  {
    $this->current_item = $item;

    $indent = ($depth) ? str_repeat("\t", $depth) : '';

    $li_attributes = '';
    $class_names = $value = '';

    $classes = empty($item->classes) ? array() : (array) $item->classes;

    $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
    $classes[] = 'nav-item';
    $classes[] = 'nav-item-' . $item->ID;
    if ($depth && $args->walker->has_children) {
      $classes[] = 'dropdown-menu dropdown-menu-end';
    }

    $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
    $class_names = ' class="' . esc_attr($class_names) . '"';

    $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
    $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

    $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

    $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
    $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
    $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
    $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

    $active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? 'active' : '';
    $nav_link_class = ( $depth > 0 ) ? 'dropdown-item ' : 'nav-link ';
    $attributes .= ( $args->walker->has_children ) ? ' class="'. $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="'. $nav_link_class . $active_class . '"';

    $item_output = $args->before;
    $item_output .= '<a' . $attributes . '>';
    $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }
}
// register a new menu
//For a single menu
register_nav_menu('main-menu', 'Main menu');

//to register for multiple location navbar
// register_nav_menus(array(
//     'primary' => __('Primary Menu'),
//     'footer' => __('Footer Menu'),
// ));

/* Add HTML5 theme support. */
function wpdocs_after_setup_theme() {
	add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );


function add_new_class_list_categories($list){
  $list = str_replace('cat-item','cat-item list-group-item ', $list);
  return $list;
}

add_filter( 'wp_list_categories', 'add_new_class_list_categories' );

//Custom Alt
// Add a custom meta box for thumbnail alt text
function add_thumbnail_alt_meta_box() {
    $post_types = get_post_types();
    foreach ($post_types as $post_type) {
        add_meta_box(
            'thumbnail_alt_text',
            'Thumbnail Alt Text',
            'thumbnail_alt_text_callback',
            $post_type,
            'side',
            'low'
        );
    }
}
add_action('add_meta_boxes', 'add_thumbnail_alt_meta_box');

// The callback function to display the field
function thumbnail_alt_text_callback($post) {
    $alt_text = get_post_meta($post->ID, '_thumbnail_alt_text', true);
    echo '<label for="thumbnail_alt_text">Alt Text:</label>';
    echo '<input type="text" id="thumbnail_alt_text" name="thumbnail_alt_text" value="' . esc_attr($alt_text) . '" size="25" />';
}

// Save the custom field value
function save_thumbnail_alt_text($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (isset($_POST['thumbnail_alt_text'])) {
        update_post_meta($post_id, '_thumbnail_alt_text', sanitize_text_field($_POST['thumbnail_alt_text']));
    }
}
add_action('save_post', 'save_thumbnail_alt_text');

// Use custom field for post thumbnail alt attribute
function custom_thumbnail_alt($attr, $attachment = null) {
    if (strpos($attr['class'], 'wp-post-image') !== false) {
        $post_id = get_the_ID();
        $custom_alt = get_post_meta($post_id, '_thumbnail_alt_text', true);
        $attr['alt'] = !empty($custom_alt) ? esc_attr($custom_alt) : get_the_title($post_id);
    }
    return $attr;
}
add_filter('wp_get_attachment_image_attributes', 'custom_thumbnail_alt', 10, 2);


/**
 * Get the alt text for the featured image.
 *
 * @return string Alt text for the featured image.
 */
function get_featured_image_alt_text() {
    // Get the post thumbnail ID
    $thumbnail_id = get_post_thumbnail_id();
    
    // Get the custom alt text from the custom field
    $custom_alt = get_post_meta(get_the_ID(), '_thumbnail_alt_text', true);
    
    // Get the default alt text from the image metadata
    $default_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
    
    // Return custom alt if exists, otherwise default alt text
    return !empty($custom_alt) ? esc_attr($custom_alt) : esc_attr($default_alt);
}


/**
 * Add SEO Meta Boxes for Posts, Pages, and Custom Post Types
 */
function mytheme_add_seo_meta_boxes() {
    $screens = ['post', 'page'];

    // Add support for custom post types
    $custom_post_types = get_post_types(['public' => true, '_builtin' => false], 'names');
    $screens = array_merge($screens, $custom_post_types);

    foreach ($screens as $screen) {
        add_meta_box('mytheme-seo-meta-box', 'SEO Settings', 'mytheme_seo_meta_box_callback', $screen, 'normal', 'high');
    }
}
add_action('add_meta_boxes', 'mytheme_add_seo_meta_boxes');


/**
 * Callback function to display the SEO Meta Box
 */
function mytheme_seo_meta_box_callback($post) {
    // Use nonce for security
    wp_nonce_field('mytheme_seo_meta_box', 'mytheme_seo_meta_box_nonce');

    // Get existing SEO field values
    $meta_title = get_post_meta($post->ID, '_meta_title', true);
    $meta_description = get_post_meta($post->ID, '_meta_description', true);
    $canonical_url = get_post_meta($post->ID, '_canonical_url', true);
    $schema_markup = get_post_meta($post->ID, '_schema_markup', true);
    $og_title = get_post_meta($post->ID, '_og_title', true);
    $og_description = get_post_meta($post->ID, '_og_description', true);
    $og_image = get_post_meta($post->ID, '_og_image', true);
    $robots_meta = get_post_meta($post->ID, '_robots_meta', true);

    // Display the fields with proper alignment and visual appeal
    ?>
        <div style="display: flex; flex-wrap: wrap; gap: 20px;">
        <!-- Meta Title (Max 60 characters) -->
        <div style="flex: 1 1 300px;">
            <label for="meta_title"><strong>Meta Title</strong></label>
            <input type="text" id="meta_title" name="meta_title" 
                  value="<?php echo esc_attr($meta_title); ?>"
                  style="width: 100%;" 
                  placeholder="Enter Meta Title (Max 60 characters)" required />
        </div>

        <!-- Meta Description (Max 160 characters) -->
        <div style="flex: 1 1 100%;">
            <label for="meta_description"><strong>Meta Description</strong></label>
            <textarea id="meta_description" name="meta_description" rows="4" 
                      style="width: 100%;" 
                      placeholder="Enter Meta Description (Max 160 characters)" 
                      ><?php echo esc_textarea($meta_description); ?></textarea>
        </div>

        <!-- Canonical URL (URL validation) -->
        <div style="flex: 1 1 100%;">
            <label for="canonical_url"><strong>Canonical URL</strong></label>
            <input type="url" id="canonical_url" name="canonical_url" 
                  value="<?php echo esc_attr($canonical_url); ?>" 
                  style="width: 100%;" 
                  placeholder="Enter Canonical URL" />
        </div>

        <!-- Schema Markup (JSON-LD) -->
        <div style="flex: 1 1 100%;">
            <label for="schema_markup"><strong>Schema Markup (JSON-LD)</strong></label>
            <textarea id="schema_markup" name="schema_markup" rows="4" 
                      style="width: 100%;" 
                      placeholder="Enter JSON-LD for Schema Markup" 
                ><?php echo esc_textarea($schema_markup); ?></textarea>
        </div>

        <!-- Open Graph Title (Max 60 characters) -->
        <div style="flex: 1 1 100%;">
            <label for="og_title"><strong>Open Graph Title</strong></label>
            <input type="text" id="og_title" name="og_title" 
                  value="<?php echo esc_attr($og_title); ?>" 
                  style="width: 100%;" 
                  placeholder="Enter Open Graph Title (Max 60 characters)" />
        </div>

        <!-- Open Graph Description (Max 160 characters) -->
        <div style="flex: 1 1 100%;">
            <label for="og_description"><strong>Open Graph Description</strong></label>
            <textarea id="og_description" name="og_description" rows="4" 
                      style="width: 100%;" 
                      placeholder="Enter Open Graph Description (Max 160 characters)" 
                      ><?php echo esc_textarea($og_description); ?></textarea>
        </div>

        <!-- Open Graph Image URL -->
        <div style="flex: 1 1 100%;">
            <label for="og_image"><strong>Open Graph Image URL</strong></label>
            <input type="url" id="og_image" name="og_image" 
                  value="<?php echo esc_attr($og_image); ?>" 
                  style="width: 100%;" 
                  placeholder="Enter Open Graph Image URL" />
        </div>

        <!-- Robots Meta Tags -->
        <div style="flex: 1 1 100%;">
            <label for="robots_meta"><strong>Robots Meta Tags</strong></label>
            <input type="text" id="robots_meta" name="robots_meta" 
                  value="<?php echo esc_attr($robots_meta); ?>" 
                  style="width: 100%;" 
                  placeholder="Enter Robots Meta Tags (e.g., index, follow)" />
        </div>
    </div>

    <?php
}

/**
 * Save the SEO Meta Box Data
 */
function mytheme_save_seo_meta($post_id) {
    // Check if nonce is set
    if (!isset($_POST['mytheme_seo_meta_box_nonce']) || !wp_verify_nonce($_POST['mytheme_seo_meta_box_nonce'], 'mytheme_seo_meta_box')) {
        return;
    }

    // Check for autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check user permissions
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save the meta fields
    $fields = [
        'meta_title',
        'meta_description',
        'canonical_url',
        'schema_markup',
        'og_title',
        'og_description',
        'og_image',
        'robots_meta'
    ];

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, sanitize_text_field($_POST[$field]));
        }
    }
}
add_action('save_post', 'mytheme_save_seo_meta');

?>

