const checkbox = document.getElementById("terms_conditions");
const termsPopup = document.getElementById("terms_wrapper");

checkbox.addEventListener("click", function (e) {
  e.preventDefault();
  termsPopup.style.display = "flex";
});

function acceptTerms() {
  checkbox.checked = true;
  termsPopup.style.display = "none";
}

function declineTerms() {
  checkbox.checked = false;
  termsPopup.style.display = "none";
}
