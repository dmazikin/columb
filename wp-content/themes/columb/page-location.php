<?php
/*
Template Name: Шаблон location
*/
get_header();
?>
<div class="swiper mySwiper">
  <div class="swiper-wrapper">
    <?php
    $location_repeat_slide = get_field('location_repeat_slide');
    ?>
    <?php if ($location_repeat_slide) : ?>
      <?php foreach ($location_repeat_slide as $slide) : ?>
        <div class="swiper-slide">
          <img src="<?php echo $slide['location_repeat_slide_img']; ?>" />
          <div class="slider-text"><?php echo $slide['location_repeat_slide_text'] ?></div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
  <div class="swiper-button-next"><img src="<?php echo get_template_directory_uri() .  '/img/right_button_slide.png' ?>" alt="arrow right" /></div>
  <div class="swiper-button-prev"><img src="<?php echo get_template_directory_uri() . '/img/left_button_slide.png' ?>" alt="arrow left" /></div>
</div>
<?php woocommerce_breadcrumb(); ?>
<div class="hotels-info container">
  <h2 class="head-text title"><?php the_title(); ?></h2>
  <?php the_content(); ?>
  <?php
  $args = array(
    'taxonomy' => 'product_cat',
    'post_type' => 'product',
    'hide_empty' => false,
    'parent' => 40
  );
  $product_categories = get_terms($args);

  $count = count($product_categories);
  ?>
  <?php if ($count > 0) : ?>
    <?php foreach ($product_categories as $product_category) :
      $thumbnail_id = get_woocommerce_term_meta($product_category->term_id, 'thumbnail_id', true);
    ?>
      <?php
      /* echo '<pre>';
      print_r($product_categories);
      echo '</pre>'; */
      ?>
      <h2 class="head-text title"><?php echo $product_category->name; ?></h2>
      <div class="swiper hotelSwiper">
        <?php
        $args = array(
          'posts_per_page' => -1,
          'tax_query' => array(
            'relation' => 'AND',
            array(
              'taxonomy' => 'product_cat',
              'field' => 'slug',
              // 'terms' => 'white-wines'
              'terms' => $product_category->slug
            )
          ),
          'post_type' => 'product',
          'orderby' => 'title,'
        );
        $products = new WP_Query($args);
        ?>
        <div class="swiper-wrapper">
          <?php while ($products->have_posts()) : $products->the_post(); ?>
            <div class="swiper-slide">
              <div class="hotel-card-wrapper">
                <div class="hotel-card-img">
                  <img src="<?php echo the_post_thumbnail_url(); ?>" />
                </div>
                <div class="hotel-card-title"><?php echo the_title(); ?></div>
                <div class="hotel-card-text text">
                  <?php echo $product->get_description(); ?>
                </div>
                <button class="card-button">
                  <?php woocommerce_template_loop_add_to_cart(); ?>
                </button>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
        <?php while ($products->have_posts()) : $products->the_post(); ?>
          <div class="hotel-desc container">
            <?php
            $value = the_field("location-hotel-desc");
            echo $value;
            ?>
          </div>
        <?php endwhile; ?>
        <div class="swiper-button-next"><img src="<?php echo get_template_directory_uri() .  '/img/right_button_slide.png' ?>" alt="arrow right" /></div>
        <div class="swiper-button-prev"><img src="<?php echo get_template_directory_uri() . '/img/left_button_slide.png' ?>" alt="arrow left" /></div>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>

</div>
<?php
get_footer();
?>