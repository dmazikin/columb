<?php

/*
 * Template Name: Шаблон все экскурсии
 */
get_header();
?>
<?php woocommerce_breadcrumb(); ?>
	<?php get_sidebar(); ?>
<?php 
  $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
  $Exc = new WP_Query(array(
    'product_cat' => 'excursion',
    'post_type' => 'product',
    'posts_per_page' => -1,
    'paged'=> $paged,
    'order' => 'ASC',
    'orderby' => 'name',
    
  ));
  
  $max_pages = $topExc->max_num_pages;

woocommerce_product_loop_start();
  while ($Exc->have_posts()) {
    $Exc->the_post();
    wc_get_template_part('content', 'product');
  }
woocommerce_product_loop_end();

wp_reset_postdata();
?>
<?php
get_footer();
?>