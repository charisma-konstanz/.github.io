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

function sendContactMessage() {
  const form = document.getElementById("contact-form");
  const formData = new FormData(form);

  // Simulate sending the message
  console.log("Form data:", Object.fromEntries(formData));

  // Show success message
  const popup = document.getElementById("message-popup");
  popup.style.display = "block";
}

function closePopup() {
  const popup = document.getElementById("message-popup");
  popup.style.display = "none";
}
