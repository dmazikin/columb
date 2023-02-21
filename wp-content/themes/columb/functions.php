<?php

/**
 * columb functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package columb
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function columb_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on columb, use a find and replace
		* to change 'columb' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('columb', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

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
			'columb_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

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
add_action('after_setup_theme', 'columb_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function columb_content_width()
{
	$GLOBALS['content_width'] = apply_filters('columb_content_width', 640);
}
add_action('after_setup_theme', 'columb_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function columb_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'columb'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'columb'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'columb_widgets_init');

/**
 * Enqueue scripts and styles.
 */
/* Регистрируем массив подключаемых стилей в хедер */
add_action('wp_enqueue_scripts', 'register_style_header');

function register_style_header()
{
	wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css');
	wp_register_style('header', get_template_directory_uri() . '/css/header.css');
	wp_register_style('header_search_menu', get_template_directory_uri() . '/css/header_search_menu.css');
	wp_register_style('slider', get_template_directory_uri() . '/css/slider.css');
	wp_register_style('home_about', get_template_directory_uri() . '/css/home_about.css');
	wp_register_style('home_card', get_template_directory_uri() . '/css/home_card.css');
	wp_register_style('home_transfer', get_template_directory_uri() . '/css/home_transfer.css');
	wp_register_style('home_booking', get_template_directory_uri() . '/css/home_booking.css');
	wp_register_style('home_service', get_template_directory_uri() . '/css/home_service.css');
	wp_register_style('home_advantage', get_template_directory_uri() . '/css/home_advantage.css');
	wp_register_style('home_review', get_template_directory_uri() . '/css/home_review.css');
	wp_register_style('home_video_review', get_template_directory_uri() . '/css/home_video_review.css');
	wp_register_style('popup', get_template_directory_uri() . '/css/popup.css');
	wp_register_style('header_tour_menu', get_template_directory_uri() . '/css/header_tour_menu.css');
	wp_register_style('menu_mobile', get_template_directory_uri() . '/css/menu_mobile.css');
}
/* Подключаем стили и скрпиты */
add_action('wp_enqueue_scripts', 'columb_scripts');
function columb_scripts()
{
	wp_enqueue_style('columb-style', get_template_directory_uri() . '/css/main.css', array('normalize', 'header', 'header_search_menu', 'slider', 'home_about', 'home_card', 'home_transfer', 'home_booking', 'home_service', 'home_advantage', 'home_review', 'home_video_review', 'popup', 'header_tour_menu'));
	wp_enqueue_script('jquery');
	wp_enqueue_script('columb-vendor', get_template_directory_uri() . '/js/vendor/modernizr-3.11.2.min.js', array(), true);
	wp_enqueue_script('columb-about', get_template_directory_uri() . '/js/about_map_popup.js', array(), true);
	wp_enqueue_script('columb-burger', get_template_directory_uri() . '/js/burger_menu_mobile.js', array(), true);
	wp_enqueue_script('columb-header-search', get_template_directory_uri() . '/js/header_search_btn.js', array(), true);
	wp_enqueue_script('columb-plugins-js', get_template_directory_uri() . '/js/plugins.js', array(), true);
	wp_enqueue_script('columb-popup-js', get_template_directory_uri() . '/js/popup.js', array(), true);
	wp_enqueue_script('columb-slider-js', get_template_directory_uri() . '/js/slider_activate.js', array(), true);
	wp_enqueue_script('columb-video-js', get_template_directory_uri() . '/js/video_popup.js', array(), true);
}
/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}
//Подключение логотипа
add_theme_support('custom-logo', [
	'height'      => 286,
	'width'       => 127,
	'flex-width'  => false,
	'flex-height' => false,
	'header-text' => '',
	'unlink-homepage-logo' => false, // WP 5.5
]);

//Отлюченеи rss-ленты
function wpschool_disable_feed()
{
	wp_redirect('/404.php');
}
add_action('do_feed', 'wpschool_disable_feed', 1);
add_action('do_feed_rdf', 'wpschool_disable_feed', 1);
add_action('do_feed_rss', 'wpschool_disable_feed', 1);
add_action('do_feed_rss2', 'wpschool_disable_feed', 1);
add_action('do_feed_atom', 'wpschool_disable_feed', 1);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'rsd_link');
//Ругистрируем меню
add_action('after_setup_theme', 'theme_register_nav_menu');

function theme_register_nav_menu()
{
	register_nav_menu('primary', 'Главное меню');
}
