<div class="cards container">
  <div class="more-button-row">
    <div class="left-text head-text">
      <span><?php echo the_field('section_product_title') ?></span>
      <div class="line"></div>
    </div>
  </div>
  <?php 
  $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
  $topExc = new WP_Query(array(
    'product_cat' => 'top-12-ekskursii',
    'post_type' => 'product',
    'posts_per_page' => 12,
    'paged'=> $paged,
    'orderby' =>  'menu_order',
    'order' =>  'ASC',
    
  ));
 /*  echo "<pre>";
  print_r($topExc); */
  
  $max_pages = $topExc->max_num_pages;

woocommerce_product_loop_start();
  while ($topExc->have_posts()) {
    $topExc->the_post();
    wc_get_template_part('content', 'product');
  }
  
woocommerce_product_loop_end();
if( $paged < $max_pages ) :

  ?><div id="loadmore" class="card-button" style="text-align:center;">
    <a href="#"
      data-max_pages="<?php echo $max_pages ?>"
      data-paged="<?php echo $paged ?>"
      data-taxonomy="<?php echo is_category() ? 'category' : get_query_var( 'taxonomy' ) ?>"
      data-term_id="<?php echo get_queried_object_id() ?>"
      data-pagenumlink="<?php echo get_pagenum_link( 1 ) ?>"
      class="button">Показать больше</a>
  </div><?php

endif;

wp_reset_postdata();
?>
</div>