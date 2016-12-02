<?php
/**
 * CasaValdesiCorporate functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CasaValdesiCorporate
 */

if ( ! function_exists( 'casavaldesicorporate_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function casavaldesicorporate_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on CasaValdesiCorporate, use a find and replace
	 * to change 'casavaldesicorporate' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'casavaldesicorporate', get_template_directory() . '/languages' );
	add_action( 'init', 'create_post_type' );
	function create_post_type() {
	  register_post_type( 'sostenibilita',
	    array(
	      'labels' => array(
	        'name' => __( 'Sostenibilita' ),
	        'singular_name' => __( 'Sostenibilita' )
	      ),
	      'public' => true,
	      'has_archive' => true,
				'supports' => array(
				'title',
				'editor',
				'excerpt',
				'thumbnail'
				),
				'taxonomies' => array( 'category' )
	    )
	  );
	}

	add_action( 'init', 'create_post_foresterie' );
	function create_post_foresterie() {
		register_post_type( 'foresterie',
			array(
				'labels' => array(
					'name' => __( 'Foresterie' ),
					'singular_name' => __( 'Foresterie' )
				),
				'public' => true,
				'has_archive' => true,
				'supports' => array(
				'title',
				'editor',
				'excerpt',
				'thumbnail'
				),
				'taxonomies' => array( 'category' )
			)
		);
	}
	if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();

	function my_acf_google_map_api($api){
		$api['key'] = 'AIzaSyAh8xPNfX4k-DFvb7LA3fypf9tO6x3_cDM';
		return $api;
	}
	add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
}

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
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'casavaldesicorporate' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'casavaldesicorporate_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );


}
endif;
add_action( 'after_setup_theme', 'casavaldesicorporate_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function casavaldesicorporate_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'casavaldesicorporate_content_width', 640 );
}
add_action( 'after_setup_theme', 'casavaldesicorporate_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function casavaldesicorporate_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'casavaldesicorporate' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'casavaldesicorporate' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'casavaldesicorporate_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function casavaldesicorporate_scripts() {
	wp_enqueue_style( 'casavaldesicorporate-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/layouts/bootstrap.css' );
	wp_enqueue_style( 'datepicker-css', get_template_directory_uri() . '/layouts/datepicker.css' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/layouts/main.css' );
	wp_enqueue_style( 'slider', get_template_directory_uri() . '/layouts/masterslider.css' );
	wp_enqueue_style( 'slider-skin', get_template_directory_uri() . '/layouts/skins/default/style.css' );
	wp_enqueue_style( 'slider-demo', get_template_directory_uri() . '/layouts/ms-partialview.css' );
	wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/layouts/jquery-3.1.1.min.js', array(), '20151215', true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/layouts/bootstrap.min.js', array(), '20151215', true );
	wp_enqueue_script( 'casavaldesicorporate-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'datepicker-js', get_template_directory_uri() . '/layouts/bootstrap-datepicker.js', array(), '20151215', true );
	wp_enqueue_script( 'moment-js', 'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js', array(), '20151215', true );
	wp_enqueue_script( 'slider-js', get_template_directory_uri() . '/layouts/jquery.easing.min.js', array(), '20151215', true );
	wp_enqueue_script( 'slider-demo-js', get_template_directory_uri() . '/layouts/masterslider.min.js', array(), '20151215', true );
	wp_enqueue_script( 'casavaldesicorporate-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'casavaldesicorporate_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
