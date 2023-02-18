// popup video на главной странице
document.querySelectorAll('.video-open').forEach(function(button) {
  button.addEventListener('click', function() {
    document.querySelector('.video-popup').classList.add('active');
  });
});

document.querySelector('.video-popup').addEventListener('click', function(e) {
  if (!e.target.closest('.inner')) {
    this.classList.remove('active');
  }
});
//   Ниже код для того, что бы видео останавливалось при закрытии окна.

const videoPopup = document.querySelector('.video-popup');
const videoIframe = document.querySelector('iframe');
const videoSrc = videoIframe.src; // сохроняем пред src

videoPopup.addEventListener('click', (e) => {
  if (!videoPopup.classList.contains('active')) {
    videoIframe.src = videoSrc;
  } else {
    videoIframe.src = '';
  }
});

