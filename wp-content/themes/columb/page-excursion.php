<?php

/*
 * Template Name: Шаблон все экскурсии
 */
get_header();
?>
<div class="breadcrumbs-container container">
  <?php woocommerce_breadcrumb(); ?>
</div>
<?php echo do_shortcode("[products category='excursion']"); ?>
<?php
get_footer();
?>