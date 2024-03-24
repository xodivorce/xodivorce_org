function showTerms() {
  document.getElementById("terms-of-service").style.display = "block";
}
function acceptTerms() {
  document.getElementById("terms_conditions").checked = true;
  document.getElementById("terms_conditions").style.display = "none";
}
function declineTerms() {
  document.getElementById("terms_conditions").checked = false;
  document.getElementById("terms-of-service").style.display = "none";
  window.location.href = "register.php";
}
