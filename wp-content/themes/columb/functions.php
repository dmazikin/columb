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

/* Подключаем стили и скрпиты */
add_action('wp_enqueue_scripts', 'columb_scripts');
function columb_scripts()
{
	wp_enqueue_style('swiper-style', get_template_directory_uri() . '/css/swiper-bundle.min.css', array(), null);
	wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), null);
	wp_enqueue_style('header', get_template_directory_uri() . '/css/header.css', array(), null);
	wp_enqueue_style('header_search_menu', get_template_directory_uri() . '/css/header_search_menu.css', array(), null);
	wp_enqueue_style('slider', get_template_directory_uri() . '/css/slider.css', array(), null);
	wp_enqueue_style('home_about', get_template_directory_uri() . '/css/home_about.css', array(), null);
	wp_enqueue_style('home_card', get_template_directory_uri() . '/css/home_card.css', array(), null);
	wp_enqueue_style('home_transfer', get_template_directory_uri() . '/css/home_transfer.css', array(), null);
	wp_enqueue_style('home_booking', get_template_directory_uri() . '/css/home_booking.css', array(), null);
	wp_enqueue_style('home_service', get_template_directory_uri() . '/css/home_service.css', array(), null);
	wp_enqueue_style('home_advantage', get_template_directory_uri() . '/css/home_advantage.css', array(), null);
	wp_enqueue_style('home_review', get_template_directory_uri() . '/css/home_review.css', array(), null);
	wp_enqueue_style('home_video_review', get_template_directory_uri() . '/css/home_video_review.css', array(), null);
	wp_enqueue_style('header_tour_menu', get_template_directory_uri() . '/css/header_tour_menu.css', array(), null);
	wp_enqueue_style('all_tours', get_template_directory_uri() . '/css/all_tours/main.css', array(), null);
	wp_enqueue_style('breadcrumbs', get_template_directory_uri() . '/css/breadcrumbs.css', array(), null);
	wp_enqueue_style('popup', get_template_directory_uri() . '/css/popup.css', array(), null);
	wp_enqueue_style('footer', get_template_directory_uri() . '/css/footer.css', array(), null);
	wp_enqueue_style('about-main', get_template_directory_uri() . '/css/about/main.css', array(), null);
	wp_enqueue_style('columb-style', get_template_directory_uri() . '/css/main.css', array(), null);
	wp_enqueue_style('menu_mobile', get_template_directory_uri() . '/css/menu_mobile.css', array(), null);
	wp_enqueue_script('columb-swiper', get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), null, true);
	wp_enqueue_script('columb-popup', get_template_directory_uri() . '/js/popup.js', array(), null, true);
	wp_enqueue_script('columb-burger-menu', get_template_directory_uri() . '/js/burger_menu_mobile.js', array(), null, true);
	wp_enqueue_script('columb-header-search', get_template_directory_uri() . '/js/header_search_btn.js', array(), null, true);
	wp_enqueue_script('columb-map', get_template_directory_uri() . '/js/about_map_popup.js', array(), null, true);
	wp_enqueue_script('columb-slider', get_template_directory_uri() . '/js/slider_activate.js', array(), null, true);
	wp_enqueue_script('columb-video-popup', get_template_directory_uri() . '/js/video_popup.js', array(), null, true);
	wp_enqueue_script('jquery');
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
//Включаем поддержку вукомерц
add_action('after_setup_theme', 'columbtheme_add_woocommerce_support');
function columbtheme_add_woocommerce_support()
{
	add_theme_support('woocommerce');
}

remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

//Поддержка галлереии вукомерц в теме 
add_theme_support('wc-product-gallery-zoom');
add_theme_support('wc-product-gallery-lightbox');
add_theme_support('wc-product-gallery-slider');
//Отключение стилей вукомерц
add_filter('woocommerce_enqueue_styles', '__return_false');

add_action('init', 'remove_custom_action');
function remove_custom_action()
{
	remove_action('wp_head', 'wc_gallery_noscript');
}

add_filter('woocommerce_product_single_add_to_cart_text', 'tb_woo_custom_cart_button_text');
add_filter('woocommerce_product_add_to_cart_text', 'tb_woo_custom_cart_button_text');
function tb_woo_custom_cart_button_text()
{
	return __('Забронировать', 'woocommerce');
}
register_sidebar(array(
	'id' => 'filter',
	'name' => "Сайдбар фильтров товара",
	'before_widget' => '<div class="container tours-chooser">',
	'after_widget' => '</div>',
	'before_title' => '<div class="tour-btn">',
	'after_title' => '</div>'
));
//Хлебные крошки 
add_filter('woocommerce_breadcrumb_defaults', function () {
	return array(
		'delimiter' => '',
		'wrap_before' => '<div class="breadcrumbs-container container"><div class="breadcrumbs ">',
		'wrap_after' => '</div></div>',
		'before' => '<a class="active">',
		'after' => '</a>',
		'home' => 'Главная'
	);
});
