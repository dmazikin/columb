<?php

/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

defined('ABSPATH') || exit;

global $product;

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
	return;
}
$product_published = $product->get_date_created(); //$product_published->date

/* echo '<pre>';
print_r($product_categories);
echo '</pre>'; */
?>

<div <?php wc_product_class('card', $product); ?>>
	<div class="card-top">
		<?php echo $product->get_image('thumbn'); ?>
		<?php if (strtotime($product->get_date_created()) > time() - (86400 * 5)) : ?>
			<div class="marker red">
				<img src="<?php echo get_template_directory_uri() . '/img/marker_red.png' ?>" />
				<p>Новинка</p>
			</div>
		<?php elseif ($product->is_featured()) : ?>
			<div class="marker yellow">
				<img src="<?php echo get_template_directory_uri() . '/img/marker_yellow.png'; ?>" alt="" />
				<p>Хит продаж</p>
			</div>
		<?php endif; ?>
	</div>
	<h2 class="card-title"><?php echo $product->get_title(); ?></h2>
	<p class="card-text">
		<?php echo $product->get_description(); ?>
	</p>
	<button class="card-button">
		<a href="<?php echo $product->add_to_cart_url(); ?>"><?php echo $product->add_to_cart_text(); ?></a>
	</button>
</div>