<?php $product_categories = get_terms(array('taxonomy' => 'product_cat', 'hide_empty' => true)); ?>
<?php if ($product_categories) : ?>
  <div class="container tours-chooser">
    <?php foreach ($product_categories as $category) : ?>
      <div class="tour-btn">
        <p><a href="<?php echo get_term_link($category); ?>"><?php echo $category->name ?></a></p>
      </div>
    <?php endforeach; ?>
  </div>
<?php endif; ?>