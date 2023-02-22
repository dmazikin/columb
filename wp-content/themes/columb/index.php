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
    <div class="swiper-slide">
      <img src="<?php echo get_template_directory_uri() .  '/img/1.png' ?>" />
      <div class="slider-text">Открываем Сочи вместе с вами!</div>
    </div>
    <div class="swiper-slide">
      <img src="<?php echo get_template_directory_uri() .  '/img/2.png' ?>" />
      <div class="slider-text">Открываем Сочи вместе с вами!</div>
    </div>
    <div class="swiper-slide">
      <img src="<?php echo get_template_directory_uri() .  '/img/3.png' ?>" />
      <div class="slider-text">Открываем Сочи вместе с вами!</div>
    </div>
  </div>
  <div class="swiper-button-next"><img src="<?php echo get_template_directory_uri() .  '/img/right_button_slide.png' ?>" alt="arrow right" /></div>
  <div class="swiper-button-prev"><img src="<?php echo get_template_directory_uri() . '/img/left_button_slide.png' ?>" alt="arrow left" /></div>
</div>
<?php
get_footer();
