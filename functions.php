
<?php
/**
 * Functions and definitions for the Aether Lab theme.
 *
 * @link https://ae-lab.io
 *
 * @package Mothership
 * @since 1.2
 */

function mytheme_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'mytheme_setup' );

// Site Tab Title 


function ae_lab_theme_setup() {
  // Enable support for post thumbnails
  add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'ae_lab_theme_setup' );

 function ae_lab_custom_post_type_support() {
   add_post_type_support( 'webapp', 'thumbnail' );
}
add_action( 'init', 'ae_lab_custom_post_type_support' );

require_once get_template_directory() .'/cs-framework/cs-framework.php';

function get_cs_option($option_name, $default = '') {
    $options = get_option('_cs_options');
    return !empty($options[$option_name]) ? $options[$option_name] : $default;
}

function custom_mime_types($mimes) {
    // Allow SVG files
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'custom_mime_types');




show_admin_bar(false);



 function ae_lab_setup() {
    load_theme_textdomain( 'ae-lab', get_template_directory() . '/languages' );
  }
  add_action( 'after_setup_theme', 'ae_lab_setup' );
  


require_once get_template_directory() . '/cat-icons.php';

  
  

function exclude_pages_from_search( $query ) {
  if ( ! is_admin() && $query->is_main_query() && $query->is_search() ) {
    $query->set( 'post_type', array( 'post', 'webapp' ) ); // search both posts and products
  }
}
add_filter( 'pre_get_posts', 'exclude_pages_from_search' );


  
  
  
  
  function animation_deps() {
    wp_register_style( 'animate-css','https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', false, '' );
    wp_enqueue_style( 'animate-css' );
      
      
      
  
     
  }
  add_action( 'wp_enqueue_scripts', 'animation_deps' );
  
  



  function main_enq() {
    wp_register_style( 'main-css',  get_stylesheet_directory_uri() .'/style.css', false, '' );
    wp_enqueue_style( 'main-css' );

   
    wp_register_script( 'main-js',  get_stylesheet_directory_uri() .'/script.js', true, '' );
    wp_enqueue_script( 'main-js' );
    
    
 	
//  wp_register_style( 'xxl',  get_stylesheet_directory_uri() .'/css/xxl.css', array( 'main-css' ), '' );
//  wp_enqueue_style( 'xxl' );
// 
//  wp_register_style( 'xl',  get_stylesheet_directory_uri() .'/css/xl.css', array( 'main-css' ), '' );
//  wp_enqueue_style( 'xl' );
// 
//    wp_register_style( 'lg',  get_stylesheet_directory_uri() .'/css/lg.css', array( 'main-css' ), '' );
//  wp_enqueue_style( 'lg' );
// 
//    wp_register_style( 'md',  get_stylesheet_directory_uri() .'/css/md.css', array( 'main-css' ), '' );
//  wp_enqueue_style( 'md' );
// 
// 
//    wp_register_style( 'sm',  get_stylesheet_directory_uri() .'/css/sm.css', array( 'main-css' ), '' );
//  wp_enqueue_style( 'sm' );
// 
//  wp_register_style( 'xs',  get_stylesheet_directory_uri() .'/css/xs.css', array( 'main-css' ), '' );
//  wp_enqueue_style( 'xs' );
//  
//  
//  wp_register_style( 'mobile',  get_stylesheet_directory_uri() .'/css/mobile.css', array( 'main-css' ), '' );
//  wp_enqueue_style( 'mobile' );
//  
//   wp_register_style( 'tablet',  get_stylesheet_directory_uri() .'/css/tablet.css', array( 'main-css' ), '' );
//   wp_enqueue_style( 'tablet' );
//  
//  
//  wp_register_style( 'laptop-desktop',  get_stylesheet_directory_uri() .'/css/laptop-desktop.css', array( 'main-css' ), '' );
//  wp_enqueue_style( 'laptop-desktop' );

 
 
   
  }
  add_action( 'wp_enqueue_scripts', 'main_enq' );



 function iconography() {

    wp_register_style( 'fontawesome',  get_stylesheet_directory_uri() .'/fonts/css/all.min.css', false, '1.1' );
    wp_enqueue_style( 'fontawesome' );

    wp_register_script( 'fa6pro-js',  get_stylesheet_directory_uri() .'/fonts/js/pro.min.js', true, '' );
    wp_enqueue_script( 'fa6pro-js' );

 }
 add_action( 'wp_enqueue_scripts', 'iconography' );





  function enqueue_bootstrap() {
	  
wp_register_style( 'bs-morph',  get_stylesheet_directory_uri() .'/bs/morph.bootstrap.min.css', false, '' );
    wp_enqueue_style( 'bs-morph' );
      
wp_register_script( 'masonry-bs',  get_stylesheet_directory_uri() .'/bs/masonry.pkgd.min.js', array('main-js'), '1.0', true);
 wp_register_style( 'carousel-bs',  get_stylesheet_directory_uri() .'/bs/carousel.css', array( 'morph' ), '' );

  
	 wp_register_style( 'sidebars',  get_stylesheet_directory_uri() .'/bs/sidebars.css', array( 'morph' ), '' );
       // wp_enqueue_style( 'sidebars' );
	 wp_register_style( 'offcanvas-css',  get_stylesheet_directory_uri() .'/bs/offcanvas-navbar.css', array( 'morph' ), '' );
	 wp_register_script( 'offcanvas-js',  get_stylesheet_directory_uri() .'/bs/offcanvas-navbar.js', true, '' );

	wp_register_script( 'bundle-bs',  get_stylesheet_directory_uri() .'/bs/bootstrap.bundle.min.js', array('main-js'), '1.0', true);
	wp_enqueue_script( 'bundle-bs' );
	//wp_register_script( 'modernizr-custom',  get_template_directory_uri() .'/bs/modernizr.custom.js', array(), false, true );
	wp_register_script( 'popper-bs',  get_stylesheet_directory_uri() .'/bs/popper.min.js', true, '' );

wp_register_style( 'glide-core',  get_stylesheet_directory_uri() .'/js/glide/glide.core.min.css', false, '' );
 wp_register_style( 'glide-theme',  get_stylesheet_directory_uri() .'/js/glide/glide.theme.min.css', false, '' );

	
}
add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap' );



  function enqueue_fdb() {
    wp_register_style( 'fdb', get_stylesheet_directory_uri() .'/fdb/froala_blocks.min.css', array('morph') );
    wp_enqueue_style( 'fdb' );
  

}
add_action( 'wp_enqueue_scripts', 'enqueue_fdb' );







//  function () {
//       
//       wp_register_style( '',  get_stylesheet_directory_uri() .'/', array( 'main-css' ), '' );
//      wp_register_script( '',  get_template_directory_uri() .'/', false, '' );
//      	wp_register_script( '',  get_stylesheet_directory_uri() .'', array(''), '1.0', true);
//
//       
//  }
//add_action( 'wp_enqueue_scripts', '' );





function home_styles() {
    // only enqueue on site's index page
  if ( is_page( 'Home' ) ) {
      
wp_enqueue_style( 'glide-core' );
wp_enqueue_style( 'glide-theme' );

    }
}
add_action( 'wp_enqueue_scripts', 'home_styles' );

function websites_styles() {
    // only enqueue on site's index page
    if ( is_page( 'Websites' ) ) {
wp_enqueue_style( 'glide-core' );
wp_enqueue_style( 'glide-theme' );
    }
}
add_action( 'wp_enqueue_scripts', 'websites_styles' );



function single_site_styles() {
    // Check if it's a single post of the 'webapp' custom post type
    if ( is_singular( 'webapp' ) ) {
        // Enqueue your styles or scripts here
    }
}
add_action( 'wp_enqueue_scripts', 'single_site_styles' );






function blog_styles() {
    // only enqueue on site's index page
    if ( is_page( 'Blog' ) ) {

       
   }
}
add_action( 'wp_enqueue_scripts', 'blog_styles' );


function single_blog_post_styles() {
    // Check if it's a single post of the 'webapp' custom post type
    if ( is_singular( 'post' ) ) {
        // Enqueue your styles or scripts here
    }
}
add_action( 'wp_enqueue_scripts', 'single_blog_post_styles' );






function about_styles() {
// only enqueue on site's index page
if ( is_page( 'About' ) ) {

}
}
add_action( 'wp_enqueue_scripts', 'about_styles' );




//
//function _styles() {
//    // only enqueue on site's index page
//    if ( is_page( '' ) ) {
//
//       
//        
//    }
//}
//add_action( 'wp_enqueue_scripts', '_styles' );
//
//
//
//
//
//
//
//
//
//
//
//
//
//function enqueue_account_page_styles() {
//  if ( is_account_page() ) {
//
//  }
//}
//add_action( 'wp_enqueue_scripts', 'enqueue_account_page_styles' );
//
//









  function site_menus() {
      
   wp_register_style( 'main-menu',  get_stylesheet_directory_uri() .'/menu.css', false, '' );
   wp_enqueue_style( 'main-menu' );
   
    wp_register_script( 'menu-js',  get_stylesheet_directory_uri() .'/menu.js', true, '' );
    wp_enqueue_script( 'menu-js' );
      
  
  }
  add_action( 'wp_enqueue_scripts', 'site_menus' );










// Require the Likes/Dislikes related functions
require_once get_template_directory() . '/mothership-likes-dislikes-functions.php';







function add_page_slug_to_body_class( $classes ) {
  if ( is_page() ) {
      global $post;
      // Add the page slug as a class
      $classes[] = 'page-' . $post->post_name;
  }
  return $classes;
}
add_filter( 'body_class', 'add_page_slug_to_body_class' );





//function remove_error_404_class( $classes ) {
//  if ( is_404() ) {
//    $classes = array_diff( $classes, array( 'error404' ) );
//  }
//  return $classes;
//}
//add_filter( 'body_class', 'remove_error_404_class', 20 );



// add tag support to pages
function tags_support_all() {
	register_taxonomy_for_object_type('post_tag', 'page');
}

// ensure all tags are included in queries
function tags_support_query($wp_query) {
	if ($wp_query->get('tag')) $wp_query->set('post_type', 'any');
}

// tag hooks
add_action('init', 'tags_support_all');
add_action('pre_get_posts', 'tags_support_query');



add_filter( 'get_template_part_preloader/preloader', 'my_custom_template_part_preloader' );

function my_custom_template_part_preloader( $file ) {
    $file = 'preloader/preloader.php';
    return $file;
}





// require_once get_template_directory() .'/widgets.php';




function my_custom_wp_title($title, $sep) {
    global $paged, $page;

    if (is_feed()) {
        return $title;
    }

    // Add the site name.
    $title .= get_bloginfo('name', 'display');

    // Add the site description for the home/front page.
    $site_description = get_bloginfo('description', 'display');
    if ($site_description && (is_home() || is_front_page())) {
        $title = "$title $sep $site_description";
    }

    // Add a page number if necessary.
    if (($paged >= 2 || $page >= 2) && !is_404()) {
        $title = "$title $sep " . sprintf(__('Page %s', 'aetherlab'), max($paged, $page));
    }

    return $title;
}
add_filter('wp_title', 'my_custom_wp_title', 10, 2);



require_once get_template_directory() .'/gravityforms-bootstrap.php';




// Register Custom Post Type
function webapp_post_type() {

	$labels = array(
		'name'                  => _x( 'Web Apps', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Web App', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Web Apps', 'text_domain' ),
		'name_admin_bar'        => __( 'Web App', 'text_domain' ),
		'archives'              => __( 'Web App Archives', 'text_domain' ),
		'attributes'            => __( 'Web App Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Web App:', 'text_domain' ),
		'all_items'             => __( 'All Web Apps', 'text_domain' ),
		'add_new_item'          => __( 'Add New Web App', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Web App', 'text_domain' ),
		'edit_item'             => __( 'Edit Web App', 'text_domain' ),
		'update_item'           => __( 'Update Web App', 'text_domain' ),
		'view_item'             => __( 'View Web App', 'text_domain' ),
		'view_items'            => __( 'View Web Apps', 'text_domain' ),
		'search_items'          => __( 'Search Web App', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Web App', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured web app', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured web app', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured web app', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into web app', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this web app', 'text_domain' ),
		'items_list'            => __( 'Web Apps list', 'text_domain' ),
		'items_list_navigation' => __( 'Web Apps list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter web apps list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Web App', 'text_domain' ),
		'description'           => __( 'Web App videos, gif loops, and keyframes', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'page-attributes' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-welcome-widgets-menus',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'webapp', $args );

}
add_action( 'init', 'webapp_post_type', 0 );


function custom_modify_search_query($query) {
    if ($query->is_search && !is_admin()) {
        // Specify the post types you want to search
        $query->set('post_type', ['post', 'webapp' ]);
        
        // Ensure that attachments are not included
        $query->set('post_status', 'publish'); // Search only published posts
    }
}
add_action('pre_get_posts', 'custom_modify_search_query');


