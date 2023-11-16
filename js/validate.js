// validate email
const EMAIL_REGEXP =
  /^(([^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*)|(".+"))@(([^<>()[\].,;:\s@"]+\.)+[^<>()[\].,;:\s@"]{2,})$/iu;
const email = document.querySelector(".email");

function isEmailValid(value) {
  return EMAIL_REGEXP.test(value);
}

function onInput() {
  if (isEmailValid(email.value)) {
    email.classList.remove("error");
  } else {
    email.classList.add("error");
  }
}

email.addEventListener("input", onInput);
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// validate forms
document.addEventListener("DOMContentLoaded", function () {
  //validate register form
  const form = document.getElementById("form");

  form.addEventListener("submit", function (event) {
    const input1 = document.getElementById("name");
    const input2 = document.getElementById("email");
    const input3 = document.getElementById("password");
    const input4 = document.getElementById("policy");
    const input5 = document.getElementById("tel");

    if (
      !input1.value.trim() ||
      !input2.value.trim() ||
      !input3.value.trim() ||
      input3.value.trim().length < 8 ||
      !input4.checked ||
      input5.value.trim().length === 0 ||
      input5.value.trim().length < 12 ||
      !input5.value.trim().startsWith("+380")
    ) {
      event.preventDefault();

      if (!input1.value.trim()) {
        input1.classList.add("error");
      } else {
        input1.classList.remove("error");
      }

      if (!input2.value.trim()) {
        input2.classList.add("error");
      } else {
        input2.classList.remove("error");
      }

      if (!input3.value.trim() || input3.value.trim().length < 8) {
        input3.classList.add("error");
        alert("Пароль должен содержать не менее 8 символов.");
      } else {
        input3.classList.remove("error");
      }

      if (!input4.checked) {
        alert("Вы должны согласиться с условиями и положениями.");
      }

      if (input5.value.trim() === "") {
        input5.classList.add("error");
        return false;
      }

      if (input5.value.trim().length < 12) {
        input5.classList.add("error");
        return false;
      }

      if (!input5.value.trim().startsWith("+380")) {
        input5.classList.add("error");
        return false;
      }

      return true;
    }
  });
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  // validate login form
  const lform = document.getElementById("lform");

  lform.addEventListener("submit", function (event) {
    const input11 = document.getElementById("lpassword");
    const input22 = document.getElementById("rep-password");
    if (input11.value !== input22.value) {
      event.preventDefault();
      alert("Пароли не совпадают");
      input11.classList.add("error");
      input22.classList.add("error");
      return false;
    } else {
      input11.classList.remove("error");
      input22.classList.remove("error");
    }
    return true;
  });
});
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~