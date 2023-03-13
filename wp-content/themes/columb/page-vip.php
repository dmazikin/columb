<?php
/*
Template Name: Шаблон vip
*/
get_header();
?>
<div class="swiper mySwiper">
  <div class="swiper-wrapper">
    <?php
    // параметры по умолчанию
    $my_posts = get_posts(array(
      'numberposts' => -1,
      'category_name'    => 'slider_head',
      'orderby'     => 'date',
      'order'       => 'ASC',
      'post_type'   => 'post',
      'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
    ));

    global $post;

    foreach ($my_posts as $post) {
      setup_postdata($post);
    ?>
      <div class="swiper-slide">
        <img src="<?php the_field('swiper_head_img') ?>" />
        <div class="slider-text">Открываем Сочи вместе с вами!</div>
      </div>
    <?php
      // формат вывода the_title() ...
    }

    wp_reset_postdata(); // сброс
    ?>
  </div>
  <div class="swiper-button-next"><img src="<?php echo get_template_directory_uri() .  '/img/right_button_slide.png' ?>" alt="arrow right" /></div>
  <div class="swiper-button-prev"><img src="<?php echo get_template_directory_uri() . '/img/left_button_slide.png' ?>" alt="arrow left" /></div>
</div>
<?php woocommerce_breadcrumb(); ?>
<div class="service container">
  <div class="head-text">
    <span><?php echo the_field('section_vip_title', 5) ?></span>
    <div class="line"></div>
  </div>
  <div class="service-wrapper">
    <div class="service-text text">
      <?php echo the_field('vip_desc', 5) ?>
    </div>
    <div class="service-gallery">
      <?php
      $vipImages = get_field('vip_gallery', 5);
      if ($vipImages) :
      ?>
        <?php foreach ($vipImages as $vipImage) : ?>
          <img src="<?php echo $vipImage['url']; ?>" alt="img" />
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</div>
<div class="special-service container">
  <?php the_content(); ?>
</div>
<?php
get_footer();
?>