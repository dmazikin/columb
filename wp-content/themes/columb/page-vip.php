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
<?php

$vip = new WP_Query([
  'category_name' => 'vip-obsluzhivanie',
  'post_type' => 'post',
  'posts_per_page' => -1,
]);

?>
<?php if ($vip->have_posts()) : ?>
  <?php while ($vip->have_posts()) : $vip->the_post(); ?>
    <div class="special-service container">
      <h1 class="head-text title"><?php the_title(); ?></h1>
      <div class="service-wrapper">
        <div class="service-text text">
          <?php
          $fieldDesc = get_field('individual_page_desc', $vip->the_id());
          echo $fieldDesc;
          ?>
        </div>
        <div class="service-gallery">
          <?php
          $fieldGallery = get_field('individual_page_gallaery', $vip->the_id());
          ?>
          <?php if ($fieldGallery) : ?>
            <?php foreach ($fieldGallery as $image) : ?>
              <?php
              /*   echo "<pre>";
            print_r($image); */
              ?>
              <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
        <?php if ($fieldDesc) : ?>
          <div class="special-service-btn">
            <button class="open-popup-mice card-button">Оставить заявку</button>
            <div class="popup-screen popup-close-screen popup-mice">
              <div class="popup-outer">
                <div class="popup-close"><img src="<?php echo get_template_directory_uri(); ?>/img/close_ico.png" alt="close" /></div>
                <div class="order-text-wrapper">
                  <div class="order-text">Заявка на обслуживание мероприятия</div>
                </div>
                <div class="popup-inner">
                  <?php echo do_shortcode('[contact-form-7 id="1836" title="Contact form 1"]'); ?>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>
<?php
get_footer();
?>