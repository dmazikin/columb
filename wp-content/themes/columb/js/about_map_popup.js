// map on about page
const mapElement = document.querySelector('.map');
const popupMapScreen = document.querySelector('.popup-map-screen');

mapElement.addEventListener('click', function () {
  popupMapScreen.classList.add('active');
});

document.addEventListener('click', function (event) {
  if (!event.target.closest('.map')) {
    if (!event.target.closest('.popup-map')) {
      popupMapScreen.classList.remove('active');
    }
  }
});
