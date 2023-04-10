<?php

/**
 * Главная
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package columb
 */

get_header();
?>
<?php get_template_part('template-parts/slider-home');?>
<?php get_template_part('template-parts/about');?>
<?php get_template_part('template-parts/loader-more');?>
<?php get_template_part('template-parts/transfer-home');?>
<?php get_template_part('template-parts/booking-home');?>
<?php get_template_part('template-parts/service-home');?>
<?php get_template_part('template-parts/advantage-home');?>
<?php get_template_part('template-parts/review-home');?>
<?php get_template_part('template-parts/video-review-home');?>
<?php
get_footer();
?>