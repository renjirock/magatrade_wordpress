<?php
/**
 * megatrade global functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package megatrade_global
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'megatrade_global_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function megatrade_global_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on megatrade global, use a find and replace
		 * to change 'megatrade_global' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'megatrade_global', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'megatrade_global' ),
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
				'megatrade_global_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'megatrade_global_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function megatrade_global_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'megatrade_global_content_width', 640 );
}
add_action( 'after_setup_theme', 'megatrade_global_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function megatrade_global_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'megatrade_global' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'megatrade_global' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'megatrade_global_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function megatrade_global_scripts() {
	wp_enqueue_style( 'megatrade_global-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'megatrade_global-style', 'rtl', 'replace' );

	wp_enqueue_script( 'megatrade_global-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'megatrade_global_scripts' );

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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

// Incluir Bootstrap CSS
function bootstrap_css() {
	wp_enqueue_style( 'bootstrap_css', 
  					get_stylesheet_directory_uri() . '/css/bootstrap.min.css', 
  					array(), 
  					'4.1.3'
  					); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_css');

// Incluir Bootstrap JS
function bootstrap_js() {
	wp_enqueue_script( 'bootstrap_js', 
  					get_stylesheet_directory_uri() . '/js/bootstrap.min.js', 
  					array('jquery'), 
  					'4.1.3', 
  					true); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_js');

// Incluir nav JS
function nav_js() {
	wp_enqueue_script( 'nav_js', 
  					get_stylesheet_directory_uri() . '/js/nav.js', 
  					array('jquery'), 
  					'4.1.3', 
  					true); 
}
add_action( 'wp_enqueue_scripts', 'nav_js');

//incluir walker

function register_custom_nav_walker(){
	require_once 'custom_walker_menu.php';
}
add_action( 'after_setup_theme', 'register_custom_nav_walker' );

// Incluir nosotros CSS
function nosotros_css() {
	wp_enqueue_style( 'nosotros_css', 
  					get_stylesheet_directory_uri() . '/css/nosotros.css', 
  					array(), 
  					'4.1.3'
  					); 
}
add_action( 'wp_enqueue_scripts', 'nosotros_css');

// Incluir nosotros JS
function nosotros_js() {
	wp_enqueue_script( 'bootstrap_js', 
  					get_stylesheet_directory_uri() . '/js/nosotros.js', 
  					array('jquery'), 
  					'4.1.3', 
  					true); 
}
add_action( 'wp_enqueue_scripts', 'nosotros_js');

