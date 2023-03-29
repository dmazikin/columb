<?php

/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.4.0
 */

defined('ABSPATH') || exit;

 ?>
<form class="woocommerce-cart-form" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">
<div class="container cart shop_table shop_table_responsive cart woocommerce-cart-form__contents">
	<?php do_action('woocommerce_before_cart');?>
		<div class="cart-cards">
			<?php
			foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
				$_product   = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
				$product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

				if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
					$product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
			?>
					<div class="cart-card-wrapper woocommerce-cart-form__cart-item cart_item">
						<div class="cart-card-close-btn product-remove">
							<?php
							echo sprintf(
								'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&#10006;	</a>',
								esc_url(wc_get_cart_remove_url($cart_item_key)),
								esc_html__('Remove this item', 'woocommerce'),
								esc_attr($product_id),
								esc_attr($_product->get_sku())
							);
							?>
						</div>
							<?php
							$thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);

							if (!$product_permalink) {
								echo $thumbnail; // PHPCS: XSS ok.
							} else {
								printf('<a href="%s" class="link-basket cart-card-img">%s</a>', esc_url($product_permalink), $thumbnail); // PHPCS: XSS ok.
							}
							?>
						<div class="cart-card-content">
							<?php
							if (!$product_permalink) {
								echo wp_kses_post(apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key) . '&nbsp;');
							} else {
								echo wp_kses_post(apply_filters('woocommerce_cart_item_name', sprintf('<a href="%s" class="cart-card-title">%s</a>', esc_url($product_permalink), $_product->get_name()), $cart_item, $cart_item_key));
							}
							?>
							<div class="app-divider"></div>
							<div class="cart-card-info-row">
								<div class="cart-card-info-col">
									<div class="info-title">Время отправления:</div>
									<div class="info-desc"><?php the_field('travel_date',$_product->get_id());?></div>
								</div>
								<div class="cart-card-info-col">
									<div class="info-title">Количество взрослых:</div>
									<div class="info-desc">
									<?php the_field('count_adult',$_product->get_id());?>
									</div>
								</div>
								<div class="cart-card-info-col">
									<div class="info-title">Количество детей:</div>
									<div class="info-desc"><?php the_field('count_child',$_product->get_id());?></div>
								</div>
								<div class="cart-card-info-col">
									<div class="info-title">Дополнительные расходы:</div>
									<div class="info-desc"><?php the_field('dop_charges',$_product->get_id());?></div>
								</div>
								<div class="cart-card-info-col">
									<div class="info-title">Оплата за экскурсию:</div>
									<div class="info-desc"><?php echo WC()->cart->get_product_price($_product) ?></div>
								</div>
							</div>
							<button class="card-button">Оплатить</button>
						</div>
					</div>
			<?php }
			} ?>
		</div>
		<div class="cart-bill">
			<p>Общий счет на оплату этих экскурсий: <span><?php echo WC()->cart->get_product_subtotal($_product, $cart_item['quantity']) ?></span></p>
			<button class="card-button"><?php do_action( 'woocommerce_proceed_to_checkout' ); ?></button>
		</div>
	
</div>
</form>

<?php do_action('woocommerce_after_cart'); ?>