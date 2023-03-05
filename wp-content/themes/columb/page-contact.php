<?php
/*
Template Name: Шаблон contacts
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
<div class="about container">
  <h2 class="head-text title"><?php the_title(); ?></h2>
  <?php the_content(); ?>
</div>
<div class="container">
  <div class="map">
    <img src="<?php echo get_template_directory_uri() . '/img/map.png' ?>">
  </div>
</div>
<div class="popup-map-screen">
  <div class="popup-map">
    <iframe src="https://yandex.ru/map-widget/v1/?ll=39.722351%2C43.583883&amp;z=14.48" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
  </div>
</div>
<?php
get_footer();
?>