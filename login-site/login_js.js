// popup sign up
function openPopupRegister() {
  document.querySelector(".container_login").style.display = "none";
  document.querySelector(".container-signUp").style.display = "flex";
  document.querySelector(".open-popup").style.display = "none";
}

function openPopupLogin() {
  document.querySelector(".container-signUp").style.display = "none";
  document.querySelector(".container_login").style.display = "flex";
  document.querySelector(".open-popup").style.display = "block";
}


// remember password
