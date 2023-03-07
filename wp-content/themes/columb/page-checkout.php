<?php

/*
 * Template Name: Шаблон оформление заказа
 */
get_header();
?>
<?php if (have_posts()) : ?>
  <?php the_post(); ?>
  <h2><?php the_title(); ?></h2>
  <?php the_content(); ?>
<?php endif; ?>
<?php
get_footer();
?>