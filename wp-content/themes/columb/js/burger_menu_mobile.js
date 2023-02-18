//menu in mobile adaptive for header

const mobileMenuOpen = document.querySelector('.menu-button-mobile');
const mobileMenu = document.querySelector('.mobile-menu');

let isOpenMobile = false;

mobileMenuOpen.addEventListener('click', function () {
  if (!isOpenMobile) {
    mobileMenu.classList.add('active');
    isOpenMobile = true;
  } else {
    mobileMenu.classList.remove('active');
    isOpenMobile = false;
  }
});

mobileMenu.addEventListener('click', function (e) {
  e.stopPropagation()
});

document.addEventListener('click', function (e) {
  if (!e.target.closest('.mobile-menu') && !e.target.closest('.menu-button-mobile') && isOpenMobile) {
    mobileMenu.classList.remove('active');
    isOpenMobile = false;
  }
});


//menu in mobile adaptive for footer

const mobileMenuOpenFooter = document.querySelector('.menu-footer-open');
const mobileMenuFooter = document.querySelector('.menu-footer-open>.mobile-menu');

let isOpenMobileFooter = false;

mobileMenuOpenFooter.addEventListener('click', function () {
  if (!isOpenMobileFooter) {
    mobileMenuFooter.classList.add('active');
    isOpenMobileFooter = true;
  } else {
    mobileMenuFooter.classList.remove('active');
    isOpenMobileFooter = false;
  }
});

mobileMenuFooter.addEventListener('click', function (e) {
  e.stopPropagation()
});

document.addEventListener('click', function (e) {
  if (!e.target.closest('.menu-footer-open>.mobile-menu') && !e.target.closest('.menu-footer-open') && isOpenMobileFooter) {
    mobileMenuFooter.classList.remove('active');
    isOpenMobileFooter = false;
  }
});
