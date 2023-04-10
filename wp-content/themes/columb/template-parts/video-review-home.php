<div class="video-review container">
  <div class="head-text">
    <span><?php echo the_field('section_video_title', 5) ?></span>
    <div class="line"></div>
  </div>
  <div class="swiper videoSwiper">
    <div class="swiper-wrapper">
      <?php if ($reviewRows = get_field('review-video')) : ?>
        <?php foreach ($reviewRows as $row) : ?>
          <div class="swiper-slide video-open" data-src="https://www.youtube.com/embed/<?php echo $row['review-video_id']; ?>">
            <img class="video-img" src="http://img.youtube.com/vi/<?php echo $row['review-video_id']; ?>/mqdefault.jpg" alt="" />
            <div class="play-button">
              <img src="<?php echo get_template_directory_uri() . '/img/play_button_ico.png' ?>" alt="" />
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>

    </div>
    <div class="swiper-button-next"><img src="<?php echo get_template_directory_uri() . '/img/right_button_slide.png' ?>" alt="arrow right" /></div>
    <div class="swiper-button-prev"><img src="<?php echo get_template_directory_uri() . '/img/left_button_slide.png' ?>" alt="arrow left" /></div>
  </div>
</div>