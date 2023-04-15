<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div class="container excursion-cards">
			<h2 class="head-text title"><?php the_title()?></h2>
			<div class="excursion-card">
        <div class="excursion-card-top">
            <div class="excursion-card-wrapper">
                <div class="swiper cardSwiper">
                    <div class="swiper-wrapper">
										<?php $rows = get_field('excursion_repeats',$product->get_id()); ?>
										<?php foreach ($rows as $row) : ?>
                        <div class="swiper-slide excursion-card-slide">
													<img src="<?php echo $row['excursion_row_img'] ?>" />
                        </div>
												<?php endforeach; ?>
                    </div>
                    <div class="swiper-button-next"><img src="<?php echo get_template_directory_uri() .'/img/right_button_slide.png'?>" alt="arrow right"></div>
                    <div class="swiper-button-prev"><img src="<?php echo get_template_directory_uri() .'/img/left_button_slide.png'?>" alt="arrow left"></div>
								</div>
            </div>
            <div class="excursion-card-right">
                <div class="excursion-card-top-right-text">
								<p class="text"><?php echo $product->get_description(); ?></p>
                </div>
                <div class="card-button-wrapper">
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
                </div>
                <div class="app-divider"></div>
            </div>
            <div class="excursion-card-table">
                <div class="excursion-card-table-col">
                    <p class="text title">Продолжительность :</p>
                    <p class="text info"><?php the_field('category_duration',$product->get_id());?></p>
                </div>
                <div class="excursion-card-table-col">
                    <p class="text title">Время отправления :</p>
                    <p class="text info"><?php the_field('category_time',$product->get_id());?></p>
                </div>
                <div class="excursion-card-table-col">
                    <p class="text title">Цена взрослый / детский :</p>
                    <p class="text info"><?php the_field('category_price',$product->get_id());?></p>
                </div>
                <div class="excursion-card-table-col">
                    <p class="text title">Дополнительные расходы :</p>
                    <p class="text info"><?php the_field('dopolnitelnye_rashody',$product->get_id());?></p>
                </div>
                <div class="excursion-card-table-col">
                    <p class="text title">Рекомендации :</p>
                    <p class="text info"><?php the_field('category_recomends',$product->get_id());?></p>
                </div>
                <div class="excursion-card-table-col">
                    <p class="text title">Дни недели :</p>
                    <p class="text info"><?php the_field('category_week_day',$product->get_id());?></p>
                </div>
            </div>
						<?php if(get_field('category_primechanie',$product->get_id())):?>
            <div class="excursion-card-table flex-start">
                <div class="excursion-card-table-col">
                    <p class="text title">Примечание :</p>
                    <p class="text info"><?php echo get_field('category_primechanie',$product->get_id());?></p>
                </div>
            </div>
						<?php endif;?>
        </div>
    </div>

		</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	woocommerce_output_related_products();
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
