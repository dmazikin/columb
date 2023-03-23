<?php

/*
 * Template Name: Шаблон Корзины
 */
get_header();
?>
<?php woocommerce_breadcrumb() ?>
<h2 class="head-text title">Ваша Корзина</h2>
  <?php the_content(); ?>
<?php
get_footer();
?>