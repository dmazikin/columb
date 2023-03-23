<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package columb
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="header">
		<div class="header-top">
			<div class="top-left">
				<p><?php echo the_field('phone', 5) ?></p>
				<div class="header-icons">
					<a href="<?php echo the_field('vk_icon_link', 5) ?>">
						<div class="vk">
							<img src="<?php echo the_field('vk_icon_header', 5) ?>" alt="img">
						</div>
					</a>
					<a href="<?php echo the_field('telegram_icon_link', 5) ?>">
						<div class="telegram">
							<img src="<?php echo the_field('telegram_icon_header', 5) ?>" alt="img">
						</div>
					</a>
					<a href="<?php echo the_field('youtube_icon_link', 5) ?>">
						<div class="youtube">
							<img src="<?php echo the_field('youtube_icon_header', 5) ?>" alt="img">
						</div>
					</a>
					<a href="<?php echo the_field('wa_icon_link', 5) ?>">
						<div class="whatsapp">
							<img src="<?php echo the_field('wa_icon_header', 5) ?>" alt="img">
						</div>
					</a>
					<div class="emblem">
						<img src="<?php echo the_field('emblema_icon_header', 5) ?>" alt="img">
					</div>
				</div>

			</div>
			<div class="top-right">
				<div class="header-nav-icons">
					<div class="search-ico search-open">
						<svg class="svg svg-search" width="37" height="31" viewBox="0 0 37 31" fill="none" xmlns="http://www.w3.org/2000/svg">
							<circle cx="8.5" cy="8.5" r="7.5" stroke="#2D9CDB" stroke-width="2" />
							<line x1="14.3325" y1="13.8715" x2="33.7537" y2="33.2927" stroke="#2D9CDB" stroke-width="2" />
						</svg>

						<div class="search-menu">
							<form action="" id="search">
								<input type="text" id="query" placeholder="Какую экскурсию ищите?">
							</form>
							<button type="submit" form="order_call" id="search_submit_btn">
								<svg class="svg svg-search" width="37" height="31" viewBox="0 0 37 31" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="8.5" cy="8.5" r="7.5" stroke="#2D9CDB" stroke-width="2" />
									<line x1="14.3325" y1="13.8715" x2="33.7537" y2="33.2927" stroke="#2D9CDB" stroke-width="2" />
								</svg>
							</button>
							<div class="search-close">
								<img src="<?php echo get_template_directory_uri() . '/img/close_ico_silver.png'; ?>" alt="Close">
							</div>
						</div>
					</div>
					<a href="<?php echo WC()->cart->get_cart_url(); ?>" class="cart-ico active">
						<svg class="svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" style="transform: scale(2.2);">
							<g id="Shopping_Cart">
								<g>
									<path d="M63.51,59.27l0.007,0.001l4-17.999l-0.019-0.005c0.02-0.078,0.048-0.153,0.048-0.238
			c0-0.553-0.447-1-1-1H34.485l-1.418-5.287l-0.015,0.004c-0.125-0.411-0.491-0.717-0.943-0.717h-7.562c-0.553,0-1,0.447-1,1
			c0,0.553,0.447,1,1,1h6.796l6.246,23.287h0.001c0.086,0.282,0.291,0.512,0.559,0.628c-0.375,0.608-0.602,1.318-0.602,2.085
			c0,2.209,1.791,4,4,4s4-1.791,4-4c0-0.732-0.211-1.409-0.555-2h11.109c-0.344,0.591-0.555,1.268-0.555,2c0,2.209,1.791,4,4,4
			s4-1.791,4-4c0-0.767-0.227-1.477-0.602-2.085C63.226,59.822,63.434,59.572,63.51,59.27z M59.441,42.029H65.3l-0.889,4h-5.414
			L59.441,42.029z M35.021,42.029h6.631l0.443,4h-6.001L35.021,42.029z M37.703,52.029l-1.073-4h5.688l0.445,4H37.703z
			 M38.24,54.029h4.745l0.444,4h-4.116L38.24,54.029z M41.546,64.029c-1.104,0-2-0.896-2-2c0-1.104,0.896-2,2-2s2,0.896,2,2
			C43.546,63.133,42.651,64.029,41.546,64.029z M49.546,58.029h-4.106l-0.443-4h4.549V58.029z M49.546,52.029h-4.771l-0.445-4h5.217
			V52.029z M49.546,46.029h-5.439l-0.444-4h5.883V46.029z M55.652,58.029h-4.105v-4h4.549L55.652,58.029z M56.318,52.029h-4.771v-4
			h5.217L56.318,52.029z M56.985,46.029h-5.438v-4h5.883L56.985,46.029z M59.546,64.029c-1.104,0-2-0.896-2-2c0-1.104,0.896-2,2-2
			s2,0.896,2,2C61.546,63.133,60.651,64.029,59.546,64.029z M61.744,58.029h-4.081l0.444-4h4.525L61.744,58.029z M58.329,52.029
			l0.445-4h5.191l-0.889,4H58.329z" />
								</g>
							</g>
							<?php if(WC()->cart->get_cart_contents_count() > 0):?>
							<circle cx="70" cy="34" r="11" />
							<p><?php echo WC()->cart->get_cart_contents_count() ?></p>
							<?php endif;?>
						</svg>
					</a>
					<a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>" class="exit-ico">
						<svg class="svg svg-exit" width="22" height="28" viewBox="0 0 22 28" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect x="6" y="1" width="15" height="26" stroke="#2D9CDB" stroke-width="2" />
							<path d="M17.7071 14.7071C18.0976 14.3166 18.0976 13.6834 17.7071 13.2929L11.3431 6.92893C10.9526 6.53841 10.3195 6.53841 9.92893 6.92893C9.53841 7.31946 9.53841 7.95262 9.92893 8.34314L15.5858 14L9.92893 19.6569C9.53841 20.0474 9.53841 20.6805 9.92893 21.0711C10.3195 21.4616 10.9526 21.4616 11.3431 21.0711L17.7071 14.7071ZM8.74228e-08 15L17 15L17 13L-8.74228e-08 13L8.74228e-08 15Z" fill="#2D9CDB" />
						</svg>
					</a>

				</div>
				<div class="header-language">
					<a href="#" class="lang-text active">РУС</a>
					<p class="lang-text">/</p>
					<a href="#" class="lang-text">ENG</a>
				</div>
			</div>
		</div>

		<div class="header-bottom">
			<div class="header-logo">
				<?php echo get_custom_logo() ?>
				<p>c 2000 года</p>
			</div>
			<nav class="menu">
				<?
				wp_nav_menu([
					'theme_location'  => 'primary',
					'container'       => false,
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'items_wrap'      => '<ul class="header-menu">%3$s</ul>',
					'depth'           => 0,
				]);
				?>
				<div class="menu-button-mobile">
					<div class="line big"></div>
					<div class="line small"></div>
					<div class="line big"></div>
					<?
					wp_nav_menu([
						'theme_location'  => 'primary',
						'container'       => false,
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'items_wrap'      => '<ul class="mobile-menu">%3$s</ul>',
						'depth'           => 0,
					]);
					?>
				</div>
			</nav>
		</div>

	</div>
	<div class="call-order popup-open">
		<p>Заказать обратный звонок</p>
	</div>