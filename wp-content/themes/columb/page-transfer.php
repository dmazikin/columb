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
$transfer = new WP_Query(array(
  'product_cat' => 'transfer',
  'post_type' => 'product',
  'posts_per_page' => -1,
  'orderby' => 'menu_order',
  'order' => 'ASC',
));
?>
<?php while ($transfer->have_posts()) : $transfer->the_post(); ?>
  <div class="class-auto container">
    <h2 class="head-text title"><?php the_title(); ?></h2>
    <button class="card-button open-cart-popup" 
            data-product_name="<?php echo esc_attr( $product->get_title() );?>" 
            data-product_id="<?php echo esc_attr( $product->get_id() );?>" 
            data-product_price="<?php echo esc_attr( $product->get_price() );?>" 
            data-travel_date="<?php echo esc_attr( get_field('travel_date') );?>" 
            data-count_adult="<?php echo esc_attr( get_field('count_adult') );?>" 
            data-count_child="<?php echo esc_attr( get_field('count_child') );?>" 
            data-dop_charges="<?php echo esc_attr( get_field('dop_charges') );?>" 
            >
            <span>Забронировать</span>
    </button>
    <div class="swiper bookingSwiper">
      <div class="swiper-wrapper">
        <?php $rows = get_field('repeats_gallery_transfer'); ?>
        <?php foreach ($rows as $row) : ?>
          <div class="swiper-slide">
            <div class="booking-card-wrapper">
              <div class="booking-card">
                <img src="<?php echo $row['repeats_gallery_transfer_img'] ?>" />
                <p><?php echo $row['repeats_gallery_transfer_name'] ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="swiper-button-next"><img src="<?php echo get_template_directory_uri() .  '/img/right_button_slide.png' ?>" alt="arrow right" /></div>
      <div class="swiper-button-prev"><img src="<?php echo get_template_directory_uri() . '/img/left_button_slide.png' ?>" alt="arrow left" /></div>
    </div>
  <?php endwhile;
wp_reset_postdata(); ?>
  </div>
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