<?php
/**
 * resilience functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package resilience
 */


function wplearning_theme_script()
{
	wp_enqueue_style('style', get_stylesheet_directory_uri());
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/src/output.css');
	wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/style.css'); // Unique handle
	wp_enqueue_script('tailwindcss', 'https://cdn.tailwindcss.com', array(), null, false);
	wp_enqueue_style('tajawal-font', 'https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap');

	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/css/bootstrap.min.js');

}
add_action('wp_enqueue_scripts', 'wplearning_theme_script');



/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function resilience_setup()
{
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on resilience, use a find and replace
	 * to change 'resilience' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('resilience', get_template_directory() . '/languages');



	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Header Menu', 'resilience'),
			'footer-1' => esc_html__('Footer Menu1', 'resilience'),
			'footer-2' => esc_html__('Footer Menu2', 'resilience'),
			'footer-3' => esc_html__('Footer Menu3', 'resilience'),
		)
	);


	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'resilience_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);


	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'resilience_setup');


require get_template_directory() . '/inc/Courses.php';
require get_template_directory() . '/inc/Events.php';
/**
 * Load Jetpack compatibility file.
 */

function home_sidebar()
{
	register_sidebar(array(
		'name' => 'Home Sidebar',
		'id' => 'home_sidebar',
		'description' => 'This is the main sidebar for the site.',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
}
add_action('widgets_init', 'home_sidebar');

function login_sidebar()
{
	register_sidebar(array(
		'name' => 'Login Sidebar',
		'id' => 'logins_sidebar',
		'description' => 'This is the main sidebar for the site.',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
}
add_action('widgets_init', 'login_sidebar');

function sigun_up()
{
	register_sidebar(array(
		'name' => 'Signup Sidebar',
		'id' => 'signup_sidebar',
		'description' => 'This is the sign sidebar for the site.',
		'before_widget' => '<div class="widget1">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title1">',
		'after_title' => '</h3>',
	));
}
add_action('widgets_init', 'sigun_up');