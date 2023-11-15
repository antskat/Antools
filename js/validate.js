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

document.addEventListener("DOMContentLoaded", function () {
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

      // Проверка на длину номера телефона
      if (input5.value.trim().length < 12) {
        input5.classList.add("error");
        return false;
      }

      // Проверка на начало номера с +380
      if (!input5.value.trim().startsWith("+380")) {
        input5.classList.add("error");
        return false;
      }

      // Если все проверки пройдены, разрешаем отправку формы
      return true;
    }
  });
});

function validateAndSubmit(event) {
  var input11 = document.getElementById('lpassword');
  var input22 = document.getElementById('rep-password');

  if (input11.value !== input22.value) {
    input22.classList.add('error');
    alert('Values do not match. Please correct the input.');
    event.preventDefault();
  } else {
    input22.classList.remove('error');
  }
}

// Attach the validateInputs function to the input events of both fields
document.getElementById('lpassword').addEventListener('input', function() {
  document.getElementById('rep-password').classList.remove('error');
});

document.getElementById('rep-password').addEventListener('input', function() {
  document.getElementById('rep-password').classList.remove('error');
});

