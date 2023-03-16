<?php
/*
Template Name: Шаблон transfer
*/
get_header();
?>
<div class="swiper mySwiper">
  <div class="swiper-wrapper">
    <?php
    $transfer_repeat_slide = get_field('transfer_repeat_slider');
    ?>
    <?php if ($transfer_repeat_slide) : ?>
      <?php foreach ($transfer_repeat_slide as $slide) : ?>
        <div class="swiper-slide">
          <img src="<?php echo $slide['transfer_repeat_slider_img']; ?>" />
          <div class="slider-text"><?php echo $slide['transfer_repeat_slider_text'] ?></div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
  <div class="swiper-button-next"><img src="<?php echo get_template_directory_uri() .  '/img/right_button_slide.png' ?>" alt="arrow right" /></div>
  <div class="swiper-button-prev"><img src="<?php echo get_template_directory_uri() . '/img/left_button_slide.png' ?>" alt="arrow left" /></div>
</div>
<?php woocommerce_breadcrumb(); ?>
<div class="transfer-text container">
  <h2 class="head-text title"><?php the_title(); ?></h2>
  <?php the_content(); ?>
</div>

<?php
$args = array(
  'taxonomy' => 'product_cat',
  'post_type' => 'product',
  'hide_empty' => false,
  'parent' => 38
);
$product_categories = get_terms($args);

$count = count($product_categories);
?>

<?php if ($count > 0) : ?>
  <?php foreach ($product_categories as $product_category) :
    $thumbnail_id = get_woocommerce_term_meta($product_category->term_id, 'thumbnail_id', true);
  ?>
    <div class="class-auto container">
      <?php
      /* echo '<pre>';
      print_r($product_categories);
      echo '</pre>'; */
      ?>
      <h2 class="head-text title"><?php echo $product_category->name; ?></h2>
      <div class="swiper bookingSwiper">
        <?php
        $args = array(
          'posts_per_page' => -1,
          'tax_query' => array(
            'relation' => 'AND',
            array(
              'taxonomy' => 'product_cat',
              'field' => 'slug',
              // 'terms' => 'white-wines'
              'terms' => $product_category->slug
            )
          ),
          'post_type' => 'product',
          'orderby' => 'title,'
        );
        $products = new WP_Query($args);
        ?>
        <div class="swiper-wrapper">
          <?php while ($products->have_posts()) : $products->the_post(); ?>
            <div class="swiper-slide">
              <div class="booking-card-wrapper">
                <div class="booking-card">
                  <img src="<?php echo the_post_thumbnail_url(); ?>" />
                  <p><?php echo the_title(); ?></p>
                </div>
                <button class="card-button">
                  <a href="<?php echo $product->add_to_cart_url(); ?>"><?php echo $product->add_to_cart_text(); ?></a>
                </button>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
        <div class="swiper-button-next"><img src="<?php echo get_template_directory_uri() .  '/img/right_button_slide.png' ?>" alt="arrow right" /></div>
        <div class="swiper-button-prev"><img src="<?php echo get_template_directory_uri() . '/img/left_button_slide.png' ?>" alt="arrow left" /></div>
      </div>

    </div>
  <?php endforeach; ?>
<?php endif; ?>
<div class="transfer-info-service container">
  <h2 class="head-text title">Об услуге</h2>
  <div class="transfer-info-service-text-wrapper">
    <div class="transfer-info-service-left">
      <p class="text">Для индивидуального и семейного трансфера мы предлагаем:</p>
      <ul class="text-accented">
        <li>Легковые авто: класса комфорт, комфорт+, бизнес-класса;</li>
        <li>Минивены: Hyundai Starex, Mercedes Vito, Mercedes V-класса</li>
      </ul>
      <p class="text">Для группового трансфера участников мероприятий предлагаем:</p>
      <ul class="text-accented">
        <li>Микроавтобусы (16-19 мест): Mercedes-Tourist, Mercedes-VIP</li>
        <li>Автобусы различной вместимости (от 32 до 60 мест): марок Higer,</li>
        <li>King Long, Scania, Mercedes, Man.</li>
      </ul>
    </div>
    <div class="transfer-info-service-right">
      <p class="text">Наши правила оказания услуги «трансфер»:</p>
      <ul class="text-accented">
        <li>
          Вы отправляете заявку с точными полётными данными, указывая количество гостей, наличие детей и их возраст
          для безопасного передвижения по городу, особенности багажа / габаритность, конечный пункт поездки,
          контактный телефон;
        </li>
        <li>Cогласовываете вид и класс авто, оплачиваете стоимость трансфера;</li>
        <li>
          Диспетчер подтверждает забронированную заявку, накануне информирует гостей о номере авто и водителя,
          уточняется место посадки в авто;
        </li>
        <li>
          По прилету / приезде после получения багажа гости сообщают о своём выходе на посадку в авто водителю;
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="transfer-info-sign container">
  <p class="text-accented">
    Внимание: встреча с табличкой оплачивается дополнительно; стоимость парковки в случае ожидания в аэропорту не
    входит в стоимость трансфера.
  </p>
</div>
<?php
get_footer();
?>