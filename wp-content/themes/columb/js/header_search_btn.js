//search button in header

const searchMenuOpen = document.querySelector('.search-open');
const searchMenu = document.querySelector('.search-menu');
const searchClose = document.querySelector('.search-close');


let isOpenSearch = false;

searchMenuOpen.addEventListener('click', function () {
  if (!isOpenSearch) {
    searchMenu.classList.add('active');
    isOpenSearch = true;
  } else {
    searchMenu.classList.remove('active');
    isOpenSearch = false;
  }
});

searchMenu.addEventListener('click', function (e) {
  e.stopPropagation()
});

document.addEventListener('click', function (e) {
  if (!e.target.closest('.search-menu') && !e.target.closest('.search-open') && isOpenSearch) {
    searchMenu.classList.remove('active');
    isOpenSearch = false;
  }
});

searchClose.addEventListener('click', function (e) {
  e.stopPropagation()
  searchMenu.classList.remove('active');
  isOpenSearch = false;
});
