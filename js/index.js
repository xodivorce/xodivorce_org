document.addEventListener("DOMContentLoaded", function () {
  setTimeout(function () {
    document.querySelector(".preloader").style.display = "none";
  }, 2000);
});

document.addEventListener("DOMContentLoaded", function () {
  const toggle = document.querySelector(".toggle");
  const showcase = document.querySelector(".showcase");
  const menu = document.querySelector(".menu");

  toggle.addEventListener("click", function () {
    toggle.classList.toggle("active");
    showcase.classList.toggle("active");
    menu.classList.toggle("active");
  });
});
