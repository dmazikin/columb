// popup video на главной странице
document.querySelectorAll(".video-open").forEach(function (button) {
  button.addEventListener("click", function () {
    console.log(button.dataset.src);
    document.querySelector(".video-popup").classList.add("active");
    document.getElementById("youtube-frame").src = button.dataset.src;
  });
});

document.querySelector(".video-popup").addEventListener("click", function (e) {
  if (!e.target.closest(".inner")) {
    this.classList.remove("active");
    document.getElementById("youtube-frame").src = "";
  }
});
