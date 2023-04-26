jQuery(function ($) {
  // определяем в переменные кнопку, текущую страницу и максимальное кол-во страниц

  var button = $("#loadmore a"),
    paged = button.data("paged"),
    container = $(".card-container"),
    maxPages = button.data("max_pages");

  button.click(function (event) {
    event.preventDefault(); // предотвращаем клик по ссылке

    $.ajax({
      type: "POST",
      cache: false,
      url: misha.ajaxurl, // получаем из wp_localize_script()
      data: {
        paged: paged, // номер текущей страниц
        action: "loadmore", // экшен для wp_ajax_ и wp_ajax_nopriv_
      },
      beforeSend: function (xhr) {
        button.text("Загружаем...");
      },
      success: function (data) {
        var elements = $(data).find(".product_cat-top-12-ekskursii");
        paged++; // инкремент номера страницы
        button.parent().before(data);
        button.text("Загрузить ещё");
        // если последняя страница, то удаляем кнопку
        if (paged == maxPages) {
          $("#loadmore").remove();
        }
      },
    });
  });
  //Добавляет класс абзацам для редактора WordPress
  $("p").addClass("text-accented");
  $(".card-text,.car-text,.rev-card-text ").removeClass("text-accented");
});
