<?php
/**
 * The template for displaying all single posts.
 *
 * @package columb
 */

get_header(); ?>

	<div id="primary" class="container">

		<?php
		while ( have_posts() ) :
			the_post();
      ?>

			<h1 class='about-title'><?php the_title()?></h1>
      <div class="container">
      <?php the_content()?>
      </div>
<?php 
		endwhile; // End of the loop.
		?>
	</div><!-- #primary -->

<?php
get_footer();
