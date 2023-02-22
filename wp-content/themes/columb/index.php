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
<div class="call-order popup-open">
  <p>Заказать обратный звонок</p>
</div>
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
  <h2 class="about-title"><?= the_field('index_about_title') ?></h2>
  <div class="content">
    <div class="left-text text">
      <?= the_field('index_about_desc') ?>
    </div>
    <img class="right-image" src="<?= the_field('index_about_img') ?>" />
  </div>
</div>

<?php
get_footer();
?>