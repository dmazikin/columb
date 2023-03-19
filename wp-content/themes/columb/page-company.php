<?php
/*
Template Name: Шаблон company
*/
get_header();
?>
<div class="swiper mySwiper">
  <div class="swiper-wrapper">
    <?php
    $company_repeat_slide = get_field('company_repeat_slide');
    ?>
    <?php if ($company_repeat_slide) : ?>
      <?php foreach ($company_repeat_slide as $slide) : ?>
        <div class="swiper-slide">
          <img src="<?php echo $slide['company_repeat_slide_img']; ?>" />
          <div class="slider-text"><?php echo $slide['company_repeat_slide_text'] ?></div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
  <div class="swiper-button-next"><img src="<?php echo get_template_directory_uri() .  '/img/right_button_slide.png' ?>" alt="arrow right" /></div>
  <div class="swiper-button-prev"><img src="<?php echo get_template_directory_uri() . '/img/left_button_slide.png' ?>" alt="arrow left" /></div>
</div>
<?php woocommerce_breadcrumb(); ?>
<h2 class="head-text title"><?php the_title(); ?></h2>
<div class="container">
  <?php the_content(); ?>
  <h2 class="head-text title"><?php the_field('page_title_docs') ?></h2>
  <div class="swiper docSwiper">
    <div class="swiper-wrapper">
      <?php
      $docs_repeat_slide = get_field('docs_repeat_slide');
      if ($docs_repeat_slide) : ?>
        <?php foreach ($docs_repeat_slide as $slide) : ?>
          <div class="swiper-slide">
            <div class="doc-card-wrapper">
              <div class="doc-card"><img src="<?php echo $slide['docs_repeat_slide_img']; ?>" alt="img"></div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
    <div class="swiper-button-next"><img src="<?php echo get_template_directory_uri() . '/img/right_button_slide.png' ?>" alt="arrow right"></div>
    <div class="swiper-button-prev"><img src="<?php echo get_template_directory_uri() . '/img/left_button_slide.png' ?>" alt="arrow left"></div>
  </div>
  <h2 class="head-text title"><?php the_field('page_title_uslugi') ?></h2>
  <?php the_field('uslugi_desc') ?>
  <h2 class="head-text title"><?php the_field('page_title_tour') ?></h2>
  <?php the_field('tour_desc') ?>
</div>
<?php
get_footer();
?>