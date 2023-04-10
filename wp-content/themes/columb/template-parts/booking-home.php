<div class="booking container">
  <div class="head-text">
    <span><?php echo the_field('section_reserv_title'); ?></span>
    <div class="line"></div>
  </div>
  <?php if (have_rows('reserv_slider')) : ?>

    <div class="swiper bookingSwiper">
      <div class="swiper-wrapper">
        <?php while (have_rows('reserv_slider')) : the_row();

          // переменные
          $reservImg = get_sub_field('reserv_slider_img', 5);
          $reservTitle = get_sub_field('reserv_slider_title', 5);

        ?>
          <div class="swiper-slide">
            <div class="booking-card">
              <img src="<?php echo  $reservImg['url']; ?>" alt="<?php echo $reservImg['alt']; ?>" />
              <p><?php echo $reservTitle; ?></p>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
      <div class="swiper-button-next"><img src="<?php echo get_template_directory_uri() .  '/img/right_button_slide.png' ?>" alt="arrow right" /></div>
      <div class="swiper-button-prev"><img src="<?php echo get_template_directory_uri() . '/img/left_button_slide.png' ?>" alt="arrow left" /></div>
    </div>
  <?php endif; ?>
</div>