<div class="transfer container">
  <div class="head-text">
    <span><?php echo the_field('title_transfer') ?></span>
    <div class="line"></div>
  </div>
  <?php echo the_field('section_transfer_desc') ?>
  <div class="transfer-container">
    <div class="subhead-text"><?php echo the_field('individual-transfer_subtitle', 5) ?></div>
    <div class="transfer-wrapper">
      <?php if (have_rows('individual-transfer')) : ?>
        <?php while (have_rows('individual-transfer')) : the_row();

          // переменные
          $individualImg = get_sub_field('individual-transfer_img');
          $individualTitle = get_sub_field('individual-transfer_title');
          $individualDesc = get_sub_field('individual-transfer_desc');
        ?>
          <div class="transfer-card">
            <img src="<?php echo $individualImg; ?>" alt="image">
            <p class="car-name"><?php echo $individualTitle; ?></p>
            <p class="car-text"><?php echo $individualDesc ?></p>
            <a href="<?php echo get_site_url() . '/transfer'; ?>" class="card-button">Узнать подробнее</a>

          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
  <div class="transfer-container">
    <div class="subhead-text"><?php echo the_field('group-transfer_subtitle', 5) ?></div>
    <div class="transfer-wrapper">
      <?php if (have_rows('group-transfer')) : ?>
        <?php while (have_rows('group-transfer')) : the_row();

          // переменные
          $individualImg = get_sub_field('group-transfer_img');
          $individualTitle = get_sub_field('group-transfer_title');
          $individualDesc = get_sub_field('group-transfer_desc');
        ?>
          <div class="transfer-card">
            <img src="<?php echo $individualImg; ?>" alt="image">
            <p class="car-name"><?php echo $individualTitle; ?></p>
            <p class="car-text"><?php echo $individualDesc ?></p>
            <a href="<?php echo get_site_url() . '/transfer'; ?>" class="card-button">Узнать подробнее</a>

          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>