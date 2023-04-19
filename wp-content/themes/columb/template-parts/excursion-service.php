<?php global $product?>
<div class="container excursion-cards">
  <h2 class="head-text title"><?php the_title()?></h2>
  <div class="excursion-card">
    <div class="excursion-card-top">
        <div class="excursion-card-wrapper">
        <?php $rows = get_field('excursion_repeats',$product->get_id()); ?>
        <?php if($rows):?>
            <div class="swiper cardSwiper">
                <div class="swiper-wrapper">
                    <?php foreach ($rows as $row) : ?>
                    <div class="swiper-slide excursion-card-slide">
                      <img src="<?php echo $row['excursion_row_img'] ?>" />
                    </div>
                    <?php endforeach; ?>
                      <div class="swiper-button-next"><img src="<?php echo get_template_directory_uri() .'/img/right_button_slide.png'?>" alt="arrow right"></div>
                      <div class="swiper-button-prev"><img src="<?php echo get_template_directory_uri() .'/img/left_button_slide.png'?>" alt="arrow left"></div>
                </div>
            </div>
            <?php else:?>
                <?php echo $product->get_image('thumbn'); ?>
            <?php endif;?>
        </div>
        <div class="excursion-card-right excursion-card__service">
            <div class="excursion-card-top-right-text">
            <p class="text"><?php echo $product->get_description(); ?></p>
            </div>
            <div class="card-button-wrapper">
                <button class="card-button open-form-service">
                        Оставить заявку
                </button>
            </div>
        </div>
    </div>
  </div>
</div>
<?php woocommerce_output_related_products();?>