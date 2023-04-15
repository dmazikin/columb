<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package columb
 */

?>
<div class="footer">
  <div class="footer-top container">
    <div class="footer-logo">
      <?php echo get_custom_logo() ?>
    </div>
    <nav id="footer-menu">
      <?
      wp_nav_menu([
        'theme_location'  => 'primary',
        'container'       => false,
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'items_wrap'      => '<ul class="footer-menu">%3$s</ul>',
        'depth'           => 1,
      ]);
      ?>
      <div class="menu-button-mobile menu-footer-open">
        <div class="line big"></div>
        <div class="line small"></div>
        <div class="line big"></div>
        <?
        wp_nav_menu([
          'theme_location'  => 'primary',
          'container'       => false,
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'items_wrap'      => '<ul class="mobile-menu">%3$s</ul>',
          'depth'           => 0,
        ]);
        ?>
      </div>
    </nav>

  </div>
  <div class="footer-bottom container">
    <div class="bottom-left">
      <p class="footer-phone"><?= the_field('phone', 5) ?></p>
      <div class="footer-our-partner">
        <p class="">Наш партнер</p>
        <img src="<?php echo the_field('footer_partner_img', 5) ?>" alt="partner_logo" />
      </div>
      <div class="row rosturism">
        <img src="<?php echo the_field('footer_ros_img', 5) ?>" alt="rosturism" />
        <p class="register-number"><?php echo the_field('footer_reestr', 5) ?></p>
      </div>
      <div class="row footer-icons">
        <img class="footer-ico" src="<?php echo the_field('vk_icon_header', 5) ?>" alt="" />
        <img class="footer-ico" src="<?php echo the_field('telegram_icon_header', 5) ?>" alt="" />
        <img class="footer-ico" src="<?php echo the_field('youtube_icon_header', 5) ?>" alt="" />
        <img class="footer-ico" src="<?php echo the_field('wa_icon_header', 5) ?>" alt="" />
      </div>
      <p class="rights"><?php echo the_field('footer_cop', 5) ?></p>
    </div>
    <div class="bottom-center">
      <div class="footer-email">
        <p>Почта: <span><?php echo the_field('footer_mail', 5) ?></span></p>
      </div>
      <div class="footer-manager">
        <p><span><?php echo the_field('footer_operator_tel', 5) ?></span></p>
      </div>
      <img class="anchor" src="<?php echo the_field('footer_anchor_img', 5) ?>" alt="anchor" />
    </div>
    <div class="bottom-right">
      <div class="footer-world">
        <img src="<?php echo the_field('footer_online_img', 5) ?>" alt="img" />
      </div>
      <p>Сейчас на сайте 27 человек</p>
    </div>
  </div>
</div>
<div class="popup-screen popup-close-screen">
  <div class="popup-outer">
    <div class="popup-close"><img src="img/close_ico.png" alt="" /></div>
    <div class="order-text-wrapper">
      <div class="order-text">Заказать обратный звонок</div>
    </div>
    <div class="popup-inner">
      <form action="" id="order_call">
        <input type="text" id="full_name" placeholder="Ф.И.О" />
        <input type="tel" id="phone" placeholder="Телефон" />
      </form>
      <button type="submit" form="order_call" id="submit_btn">Отправить</button>
    </div>
  </div>
</div>

<div class="popup-screen popup-close-screen cart-popup">
  <div class="popup-outer">
    <div class="popup-close"><img src="<?php echo get_template_directory_uri(); ?>/img/close_ico.png" alt="close" /></div>
    <div class="order-text-wrapper popup-cart-text-wrapper">
      <div class="order-text">Название экскурсии</div>
    </div>
    <div class="popup-inner">
      <div class="popup-cart-info-cards">
        <div class="popup-cart-info-card">
          <p>Количество взрослых:</p>
          <div class="popup-cart-info-card-window">
            <input type="number" name="count_adult" min="1" value="1">
          </div>
        </div>
        <div class="popup-cart-info-card">
          <p>Количество детей:</p>
          <div class="popup-cart-info-card-window">
            <input type="number" name="count_child" min="0" value="0">
          </div>
        </div>
        <div class="popup-cart-info-card">
          <p>Выбрать время отправления:</p>
          <div class="popup-cart-info-card-window">
            <input type="date" name="travel_date">
          </div>
        </div>
        <div class="popup-cart-info-card popup-cart-info-card-price">
          <p>Общая сумма к оплате:</p>
          <div class="popup-cart-info-card-window"><div></div><span class="product_price">7300</span> р.</div>
        </div>
        <button id="submit_cart_btn" class="button wp-element-button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="" data-count_adult="1">
          В корзину
        </button>
      </div>
    </div>
  </div>
</div>
<div class="video-popup">
  <div class="inner-video-popup">
    <iframe id="youtube-frame" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>
</div>
<?php wp_footer(); ?>

</body>

</html>