<div class="service container">
  <div class="head-text">
    <span><?php echo the_field('section_mice_title', 5) ?></span>
    <div class="line"></div>
  </div>
  <div class="service-wrapper">
    <div class="service-text text">
      <?php echo the_field('mice_desc', 5) ?>
    </div>
    <div class="service-gallery">
      <?php
      $miceImages = get_field('mice_gallery', 5);
      if ($miceImages) :
      ?>
        <?php foreach ($miceImages as $miceImage) : ?>
          <img src="<?php echo $miceImage['url']; ?>" alt="img" />
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>

  <div class="head-text">
    <span><?php echo the_field('section_vip_title', 5) ?></span>
    <div class="line"></div>
  </div>
  <div class="service-wrapper">
    <div class="service-text text">
      <?php echo the_field('vip_desc', 5) ?>
    </div>
    <div class="service-gallery">
      <?php
      $vipImages = get_field('vip_gallery', 5);
      if ($vipImages) :
      ?>
        <?php foreach ($vipImages as $vipImage) : ?>
          <img src="<?php echo $vipImage['url']; ?>" alt="img" />
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</div>