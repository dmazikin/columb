<?php
/**
 * The Template for displaying products in a product category. Simply includes the archive template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/taxonomy-product-cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     4.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

//wc_get_template( 'archive-product.php' );
get_header();
?>
<?php woocommerce_breadcrumb(); ?>

<?php 
/* if (woocommerce_product_loop()) {

	if (wc_get_loop_prop('total')) {
		while (have_posts()) {
			the_post();

			wc_get_template_part('content', 'product');
		}
	}
} else {

	echo '<div class="container">';
	wc_no_products_found();
	echo "</div>";
} */
?>
<?php if(woocommerce_product_loop()):?>
		<?php while(have_posts()) :the_post()?>
		<div class="container excursion-cards">
			<h2 class="head-text title"><?php the_title()?></h2>
			<div class="excursion-card">
        <div class="excursion-card-top">
            <div class="excursion-card-wrapper">
                <div class="swiper cardSwiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                    <div class="swiper-wrapper" id="swiper-wrapper-f4377485caa70549" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                        <div class="swiper-slide excursion-card-slide swiper-slide-active" role="group" aria-label="1 / 1" style="width: 777px;">
													<?php echo $product->get_image('thumbn');?>
                        </div>
                    </div>
                    <div class="swiper-button-next swiper-button-lock" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-f4377485caa70549"><img src="img/right_button_slide.png" alt="arrow right"></div>
                    <div class="swiper-button-prev swiper-button-lock" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-f4377485caa70549"><img src="img/left_button_slide.png" alt="arrow left"></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
            <div class="excursion-card-right">
                <div class="excursion-card-top-right-text">
								<?php echo $product->get_description(); ?>
                </div>
                <div class="card-button-wrapper">
                    <button class="card-button"><?php woocommerce_template_loop_add_to_cart(); ?></button>
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
			<?php endwhile;?>
	<?php else:?>
		<div class="container">
			<?php wc_no_products_found();?>
	</div>
	<?php endif;?>

<?php
get_footer();
?>
