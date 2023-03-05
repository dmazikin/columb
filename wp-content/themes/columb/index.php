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
<div class="cards container">
  <div class="more-button-row">
    <div class="left-text head-text">
      <span><?php echo the_field('section_product_title') ?></span>
      <div class="line"></div>
    </div>
    <button class="right-button more-button">Показать больше</button>
  </div>
  <div class="card-container">
    <?php
    $loop = new WP_Query(array(
      'product_cat' => 'excursion',
      'post_type' => 'product',
      'posts_per_page' => 12,
      'orderby' => 'menu_order',
      'order' => 'ASC',
    ));

    while ($loop->have_posts()) : $loop->the_post(); ?>

      <div class="card">
        <div class="card-top">
          <?php echo the_post_thumbnail(); ?>
        </div>
        <h2 class="card-title">
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h2>
        <?php the_content(); ?>
        <p class="price">
          <?php woocommerce_template_loop_price(); ?>
        </p>
        <?php woocommerce_template_loop_add_to_cart(); ?>
      </div>

    <?php endwhile;
    wp_reset_postdata(); ?>
  </div>
</div>
<div class="transfer container">
  <div class="head-text">
    <span><?php echo the_field('title_transfer') ?></span>
    <div class="line"></div>
  </div>
  <?php echo the_field('section_transfer_desc') ?>
  <div class="transfer-container">
    <div class="subhead-text"><?php echo the_field('individual-transfer_subtitle', 5) ?></div>
    <div class="transfer-wrapper">
      <?php if (have_rows('individual-transfer')) : ?>
        <?php while (have_rows('individual-transfer')) : the_row();

          // переменные
          $individualImg = get_sub_field('individual-transfer_img');
          $individualTitle = get_sub_field('individual-transfer_title');
          $individualDesc = get_sub_field('individual-transfer_desc');
        ?>
          <div class="transfer-card">
            <img src="<?php echo $individualImg; ?>" alt="image">
            <p class="car-name"><?php echo $individualTitle; ?></p>
            <p class="car-text"><?php echo $individualDesc ?></p>
            <a href="<?php echo get_site_url() . '/transfer'; ?>" class="card-button">Забронировать</a>

          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
  <div class="transfer-container">
    <div class="subhead-text"><?php echo the_field('group-transfer_subtitle', 5) ?></div>
    <div class="transfer-wrapper">
      <?php if (have_rows('group-transfer')) : ?>
        <?php while (have_rows('group-transfer')) : the_row();

          // переменные
          $individualImg = get_sub_field('group-transfer_img');
          $individualTitle = get_sub_field('group-transfer_title');
          $individualDesc = get_sub_field('group-transfer_desc');
        ?>
          <div class="transfer-card">
            <img src="<?php echo $individualImg; ?>" alt="image">
            <p class="car-name"><?php echo $individualTitle; ?></p>
            <p class="car-text"><?php echo $individualDesc ?></p>
            <a href="<?php echo get_site_url() . '/transfer'; ?>" class="card-button">Забронировать</a>

          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>
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
<div class="service container">
  <div class="head-text">
    <span><?php echo the_field('section_mice_title', 5) ?></span>
    <div class="line"></div>
  </div>
  <div class="service-wrapper">
    <div class="service-text text">
      <?php echo the_field('mice_desc', 5) ?>
    </div>
    <div class="service-gallery">
      <?php
      $miceImages = get_field('mice_gallery', 5);
      if ($miceImages) :
      ?>
        <?php foreach ($miceImages as $miceImage) : ?>
          <img src="<?php echo $miceImage['url']; ?>" alt="img" />
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>

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
<div class="advantage container">
  <div class="head-text">
    <span><?php echo the_field('section_advantage_title', 5) ?></span>
    <div class="line"></div>
  </div>

  <div class="adv-card-container">
    <?php if (have_rows('advantage')) : ?>
      <?php while (have_rows('advantage')) : the_row();
        // переменные
        $advantageImg = get_sub_field('advantage_icon', 5);
        $advantageTitle = get_sub_field('advantage_title', 5);
        $advantageDesc = get_sub_field('advantage_desc', 5);

      ?>
        <div class="adv-card">
          <div class="adv-card-content">
            <img src="<?php echo $advantageImg; ?>" alt="img" />
            <div class="adv-heading"><?php echo $advantageTitle; ?></div>
          </div>
          <p class="advantage-text">
            <?php echo $advantageDesc; ?>
          </p>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>
<div class="review container">
  <div class="more-button-row">
    <div class="left-text head-text">
      <span><?php echo the_field('section_reviews_title', 5) ?></span>
      <div class="line"></div>
    </div>
    <button class="right-button more-button">Показать больше</button>
  </div>
  <div class="card-container">
    <?php if (have_rows('review')) : ?>
      <?php while (have_rows('review')) : the_row();
        // переменные
        $reviewName = get_sub_field('review_name', 5);
        $reviewDesc = get_sub_field('review_desc', 5);
        $reviewDate = get_sub_field('review_date', 5);

      ?>
        <div class="card">
          <div class="rev-card-top">
            <div class="rev-heading"><?php echo $reviewName; ?></div>
            <div class="divider"></div>
          </div>
          <p class="rev-card-text text">
            <?php echo  $reviewDesc; ?>
          </p>
          <div class="rev-card-date">Отзыв оставлен: <?php echo  $reviewDate; ?></div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
  <div class="more-button-row">
    <button class="right-button more-button-mobile">Показать больше</button>
  </div>
</div>
<?php
get_footer();
?>