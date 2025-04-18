"use strict";

document.addEventListener("DOMContentLoaded", function () {
  const hamburgerMenu = document.getElementsByClassName("hamburgerMenu")[0];
  const mobileMenuWrapper =
    document.getElementsByClassName("flex-container")[0];

  hamburgerMenu.addEventListener("click", showMobileMenu);

  function showMobileMenu() {
    mobileMenuWrapper.classList.toggle("clicked");
  }
});
