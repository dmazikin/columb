<div class="advantage container">
  <div class="head-text">
    <span><?php echo the_field('section_advantage_title', 5) ?></span>
    <div class="line"></div>
  </div>

  <div class="adv-card-container">
    <?php if (have_rows('advantage')) : ?>
      <?php while (have_rows('advantage')) : the_row();
        // переменные
        $advantageImg = get_sub_field('advantage_icon', 5);
        $advantageTitle = get_sub_field('advantage_title', 5);
        $advantageDesc = get_sub_field('advantage_desc', 5);

      ?>
        <div class="adv-card">
          <div class="adv-card-content">
            <img src="<?php echo $advantageImg; ?>" alt="img" />
            <div class="adv-heading"><?php echo $advantageTitle; ?></div>
          </div>
          <p class="advantage-text">
            <?php echo $advantageDesc; ?>
          </p>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>