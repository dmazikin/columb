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
    <a href="#" class="link-logo">
      <div class="footer-logo">
        <?php echo get_custom_logo() ?>
      </div>
    </a>
    <div class="footer-menu">
      <?
      wp_nav_menu([
        'theme_location'  => 'primary',
        'container'       => false,
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'items_wrap'      => '<ul class="header-menu">%3$s</ul>',
        'depth'           => 1,
      ]);
      ?>
    </div>
    <div class="menu-button-mobile menu-footer-open">
      <div class="line big"></div>
      <div class="line small"></div>
      <div class="line big"></div>

      <div class="mobile-menu">
        <?
        wp_nav_menu([
          'theme_location'  => 'primary',
          'container'       => false,
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'items_wrap'      => '<ul class="header-menu">%3$s</ul>',
          'depth'           => 1,
        ]);
        ?>
      </div>
    </div>
  </div>
  <div class="footer-bottom container">
    <div class="bottom-left">
      <p class="footer-phone"><?= the_field('phone', 5) ?></p>
      <div class="footer-our-partner">
        <p class="">Наш партнер</p>
        <img src="<?php echo the_field('footer_partner_img') ?>" alt="partner_logo" />
      </div>
      <div class="row rosturism">
        <img src="<?php echo the_field('footer_ros_img') ?>" alt="rosturism" />
        <p class="register-number"><?php echo the_field('footer_reestr') ?></p>
      </div>
      <div class="row footer-icons">
        <img class="footer-ico" src="<?php echo the_field('vk_icon_header', 5) ?>" alt="" />
        <img class="footer-ico" src="<?php echo the_field('telegram_icon_header', 5) ?>" alt="" />
        <img class="footer-ico" src="<?php echo the_field('youtube_icon_header', 5) ?>" alt="" />
        <img class="footer-ico" src="<?php echo the_field('wa_icon_header', 5) ?>" alt="" />
      </div>
      <p class="rights"><?php echo the_field('footer_cop') ?></p>
    </div>
    <div class="bottom-center">
      <div class="footer-email">
        <p>Почта: <span><?php echo the_field('footer_mail') ?></span></p>
      </div>
      <div class="footer-manager">
        <p>Диспетчер: <span><?php echo the_field('footer_operator_tel') ?></span></p>
      </div>
      <img class="anchor" src="<?php echo the_field('footer_anchor_img') ?>" alt="anchor" />
    </div>
    <div class="bottom-right">
      <div class="footer-world">
        <img src="<?php echo the_field('footer_online_img') ?>" alt="img" />
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
    <div class="popup-close"><img src="img/close_ico.png" alt="" /></div>
    <div class="order-text-wrapper popup-cart-text-wrapper">
      <div class="order-text">Название экскурсии</div>
    </div>
    <div class="popup-inner">
      <form action="" id="cart_add">
        <input type="text" id="full_name_cart" placeholder="Ф.И.О" />
        <input type="tel" id="phone_cart" placeholder="Телефон" />
      </form>
      <div class="popup-cart-info-cards">
        <div class="popup-cart-info-card">
          <p>Количество взрослых:</p>
          <div class="popup-cart-info-card-window">5 взрослых</div>
        </div>
        <div class="popup-cart-info-card">
          <p>Количество детей:</p>
          <div class="popup-cart-info-card-window">2 ребенка</div>
        </div>
        <div class="popup-cart-info-card">
          <p>Выбрать время отправления:</p>
          <div class="popup-cart-info-card-window">06.12.22 Вт.13.00</div>
        </div>
        <div class="popup-cart-info-card">
          <p>Дополнительные расходы:</p>
          <div class="popup-cart-info-card-window">500 р. / 300 р.</div>
        </div>
        <div class="popup-cart-info-card">
          <p>Общая сумма к оплате:</p>
          <div class="popup-cart-info-card-window">7300 р.</div>
        </div>
        <button type="submit" form="cart_add" id="submit_cart_btn">В корзину</button>
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