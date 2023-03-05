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