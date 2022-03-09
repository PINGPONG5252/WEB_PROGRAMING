const loginForm = document.getElementById("login-form");
const optionJkb = loginForm.querySelector("#saigo");
const sellctJkb = loginForm.querySelector("#press");

function submitSelct(event) {
  const sellct = optionJkb.value;
  if (sellct === "") {
    event.preventDefault();
  }
}

sellctJkb.addEventListener("click", submitSelct);
