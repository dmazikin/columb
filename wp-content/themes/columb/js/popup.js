const openPopup = document.getElementsByClassName("popup-open")[0];
const closePopupByButton = document.getElementsByClassName("popup-close")[0];
const closePopupByScreen = document.getElementsByClassName("popup-close-screen")[0];
const popup = document.getElementsByClassName("popup-screen")[0];

closePopupByButton.addEventListener("click", function () {
  popup.classList.remove("active");
});

// чтобы не реагировал на popup-inner
document.querySelector(".popup-close-screen").addEventListener("click", function (event) {
  if (event.target.classList.contains("popup-close-screen")) {
    popup.classList.remove("active");
  }
});
