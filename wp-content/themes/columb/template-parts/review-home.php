<div class="review container">
  <div class="more-button-row">
    <div class="left-text head-text">
      <span><?php echo the_field('section_reviews_title', 5) ?></span>
      <div class="line"></div>
    </div>
    <button class="right-button more-button">Показать больше</button>
  </div>
  <div class="card-container">
    <?php if (have_rows('review')) : ?>
      <?php while (have_rows('review')) : the_row();
        // переменные
        $reviewName = get_sub_field('review_name', 5);
        $reviewDesc = get_sub_field('review_desc', 5);
        $reviewDate = get_sub_field('review_date', 5);

      ?>
        <div class="card">
          <div class="rev-card-top">
            <div class="rev-heading"><?php echo $reviewName; ?></div>
            <div class="divider"></div>
          </div>
          <p class="rev-card-text text">
            <?php echo  $reviewDesc; ?>
          </p>
          <div class="rev-card-date">Отзыв оставлен: <?php echo  $reviewDate; ?></div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
  <div class="more-button-row">
    <button class="right-button more-button-mobile">Показать больше</button>
  </div>
</div>