var swiper = new Swiper(".mySwiper", {
  allowSlideNext: true,
  autoHeight: true,
  grabCursor: true,
  rewind: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
var perView = 6;
var perBookingView = 3;
if (window.matchMedia("(max-width: 1603px)").matches) {
  perView = 3;
}
if (window.matchMedia("(max-width: 748px)").matches) {
  perView = 1;
  perBookingView = 1;
}

var videoSwiper = new Swiper(".videoSwiper", {
  slidesPerView: perView,
  spaceBetween: 30,
  slidesPerGroup: perView,
  loop: true,
  loopFillGroupWithBlank: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
var videoSwiper = new Swiper(".cardSwiper", {
  slidesPerView: 1,
  spaceBetween: 30,
  slidesPerGroup: 1,
  loop: true,
  loopFillGroupWithBlank: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
var locationSwiper = new Swiper(".hotelSwiper", {
  slidesPerView: 3,
  loop: true,
  slidesPerGroup: 3,
  spaceBetween: 30,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    575: {
      slidesPerView: 2,
    },
    875: {
      slidesPerView: 3,
    },
  },
});

var bookingSwiper = new Swiper(".bookingSwiper", {
  slidesPerView: perBookingView,
  spaceBetween: 35,
  slidesPerGroup: perBookingView,
  loop: true,
  loopFillGroupWithBlank: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
var docSwiper = new Swiper(".docSwiper", {
  slidesPerView: 4,
  slidesPerGroup: 1,
  loop: true,
  loopFillGroupWithBlank: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
      spaceBetween: 40,
      slidesPerGroup: 1,
    },
    1024: {
      slidesPerView: 4,
    },
  },
});

function resizeUpdate() {
  if (window.matchMedia("(max-width: 1603px)").matches) {
    if (window.matchMedia("(max-width: 748px)").matches) {
      videoSwiper.params.slidesPerGroup = 1;
      videoSwiper.params.slidesPerView = 1;
      try {
        bookingSwiper.params.slidesPerGroup = 1;
        bookingSwiper.params.slidesPerView = 1;
      } catch (e) {
        for (let newel in bookingSwiper) {
          bookingSwiper[newel].params.slidesPerGroup = 1;
          bookingSwiper[newel].params.slidesPerView = 1;
        }
      }

      return 0;
    }
    videoSwiper.params.slidesPerGroup = 3;
    videoSwiper.params.slidesPerView = 3;
    try {
      bookingSwiper.params.slidesPerGroup = 3;
      bookingSwiper.params.slidesPerView = 3;
    } catch (e) {
      for (let newel in bookingSwiper) {
        bookingSwiper[newel].params.slidesPerGroup = 3;
        bookingSwiper[newel].params.slidesPerView = 3;
      }
    }

    return 0;
  }
  videoSwiper.params.slidesPerGroup = 6;
  videoSwiper.params.slidesPerView = 6;
}

window.onresize = resizeUpdate;
