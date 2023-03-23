<?php $product_categories = get_terms(array('taxonomy' => 'product_cat', 'hide_empty' => false,'parent'=> 20,'order'=>'DESC')); ?>
<?php if ($product_categories) : ?>
  <div class="container tours-chooser">
    <?php foreach ($product_categories as $category) : ?>
        <a class="tour-btn" href="<?php echo get_term_link($category); ?>"><?php echo $category->name ?></a>
    <?php endforeach; ?>
  </div>
<?php endif; ?>