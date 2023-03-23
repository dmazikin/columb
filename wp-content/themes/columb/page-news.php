<?php
/*
Template Name: Шаблон news
*/
get_header();
?>
<div class="swiper mySwiper">
  <div class="swiper-wrapper">
    <?php
    $news_repeat_slide = get_field('news_repeat_slide');
    ?>
    <?php if ($news_repeat_slide) : ?>
      <?php foreach ($news_repeat_slide as $slide) : ?>
        <div class="swiper-slide">
          <img src="<?php echo $slide['news_repeat_slide_img']; ?>">
          <div class="slider-text"><?php echo $slide['news_repeat_slide_text'] ?></div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
  <div class="swiper-button-next"><img src="<?php echo get_template_directory_uri() .  '/img/right_button_slide.png' ?>" alt="arrow right" /></div>
  <div class="swiper-button-prev"><img src="<?php echo get_template_directory_uri() . '/img/left_button_slide.png' ?>" alt="arrow left" /></div>
</div>
<?php woocommerce_breadcrumb(); ?>
<div class="news container">
  <h2 class="head-text title"><span><?php the_title(); ?></span></h2>
  <?php the_content(); ?>
  <div class="news-cards">
    <?php
    global $post;
    $postslist = get_posts(array('posts_per_page' => -1, 'category_name' => 'news'));

    foreach ($postslist as $post) {
      setup_postdata($post);
    ?>

      <div class="news-card">
        <div class="news-card-content">
          <div class="news-card-img">
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="news-card-title"> <?php the_title(); ?></div>
          <div class="app-divider"></div>
          <p class="text bold text-center"><?php echo get_the_date(); ?></p>
          <p class="text"><?php the_content(); ?></p>
        </div>
      </div>
    <?php
    }
    wp_reset_postdata();  ?>

  </div>
  <?php
  get_footer();
  ?>