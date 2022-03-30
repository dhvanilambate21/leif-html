<?php
/**
 * leif-html functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package leif-html
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function leif_html_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on leif-html, use a find and replace
		* to change 'leif-html' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'leif-html', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'leif-html' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'leif_html_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'leif_html_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function leif_html_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'leif_html_content_width', 640 );
}
add_action( 'after_setup_theme', 'leif_html_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function leif_html_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'leif-html' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'leif-html' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'leif_html_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function leif_html_scripts() {
	wp_enqueue_style( 'leif-html-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'leif-html-style', 'rtl', 'replace' );

	wp_enqueue_script( 'leif-html-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_style('leif-html-style', get_stylesheet_uri().'/style.css');

	wp_enqueue_style( 'leif-html-style-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' , array('leif-html-style'), time());
	wp_enqueue_style( 'leif-html-style-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css' , array('leif-html-style'), time());
	wp_enqueue_style( 'leif-html-style-lity', get_template_directory_uri() . '/assets/css/lity.css' , array('leif-html-style'), time());
	wp_enqueue_style( 'leif-html-style-owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' , array('leif-html-style'), time());
	wp_enqueue_style( 'leif-html-style-responsive', get_template_directory_uri() . '/assets/css/responsive.css' , array('leif-html-style'), time());

	wp_register_style( 'Font_Awesome', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css' );
	wp_enqueue_style('Font_Awesome');


	wp_enqueue_script('jquery');
	wp_enqueue_script('leif-html-script-bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array(), time(), true);
	wp_enqueue_script('leif-html-script-owl.carousel', get_template_directory_uri().'/assets/js/owl.carousel.min.css', array(), time(), true);
	wp_enqueue_script('leif-html-script', get_template_directory_uri().'/assets/js/script.js', array(), time(), true);
}
add_action( 'wp_enqueue_scripts', 'leif_html_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


// create option page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	// create sub pages
	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Theme Header Settings',
	// 	'menu_title'	=> 'Header',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));
	
	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Theme Footer Settings',
	// 	'menu_title'	=> 'Footer',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));
	
}


// image functions
function acfimg_get_image_id($image_url) {
    global $wpdb;
    $attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid='%s';", $image_url )); 
        return $attachment[0]; 
}

function training_and_equipment_custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Tranings', 'Post Type General Name', 'jeepexcursions' ),
        'singular_name'       => _x( 'Traning', 'Post Type Singular Name', 'jeepexcursions' ),
        'menu_name'           => __( 'Tranings', 'jeepexcursions' ),
        'parent_item_colon'   => __( 'Parent Traning', 'jeepexcursions' ),
        'all_items'           => __( 'All Traning', 'jeepexcursions' ),
        'view_item'           => __( 'View Traning', 'jeepexcursions' ),
        'add_new_item'        => __( 'Add New Traning', 'jeepexcursions' ),
        'add_new'             => __( 'Add New', 'jeepexcursions' ),
        'edit_item'           => __( 'Edit Traning', 'jeepexcursions' ),
        'update_item'         => __( 'Update Traning', 'jeepexcursions' ),
        'search_items'        => __( 'Search Traning', 'jeepexcursions' ),
        'not_found'           => __( 'Not Found', 'jeepexcursions' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'jeepexcursions' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Traning', 'jeepexcursions' ),
        'description'         => __( 'Traning and Equipment', 'jeepexcursions' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'genres' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 25,
        'menu_icon'           => 'dashicons-building',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' 		  => true,
 
    );
    register_post_type( 'Traning', $args );
 
}
add_action( 'init', 'training_and_equipment_custom_post_type', 0 );
