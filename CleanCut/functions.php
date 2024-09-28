<?php

require get_template_directory().'/inc/customizer.php';

// Theme Files
function theme_files(){
    
    // wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css');
    // wp_enqueue_style( 'Fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'Fontawesome', get_template_directory_uri().'/css/font-awesome.css' );
    wp_enqueue_style( 'animate css', get_template_directory_uri().'/css/animate.css' );
    wp_enqueue_style( 'main-style', get_stylesheet_uri());

    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array('jquery'), true, true );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri().'/js/bootstrap.js', array('jquery'), null, true);
    wp_enqueue_script( 'custom-js', get_template_directory_uri().'/js/custom.js', array('jquery'), null, true);
  }
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

  ?>

