// like and save buttons
const listLikes = document.querySelector(".popular-tools-ul");

listLikes.addEventListener("click", toggleLike);

function toggleLike(event) {
  const clickedElement = event.target;
  const isButton = clickedElement.nodeName === "BUTTON" || clickedElement.closest("button");

  if (!isButton) {
    return;
  }

  const button = clickedElement.closest("button");

  if (button.classList.contains("save-btn")) {
    button.classList.toggle("is-active");
  } else {
    console.log("error");
  }

  button.classList.toggle("is-check");
  
}


const listLikes2 = document.querySelector(".newcomer-tools-ul");

listLikes2.addEventListener("click", toggleLike2);

function toggleLike2(event) {
  const clickedElement = event.target;
  const isButton = clickedElement.nodeName === "BUTTON" || clickedElement.closest("button");

  if (!isButton) {
    return;
  }

  const button = clickedElement.closest("button");

  if (button.classList.contains("save-btn")) {
    button.classList.toggle("is-active");
  } else {
    console.log("error");
  }

  button.classList.toggle("is-check");
}
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// swiper
const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// scroll to 
var design = document.getElementById("design");
var development = document.getElementById("development");
 
function designScroll() {
    if (design) {
        design.scrollIntoView({ behavior: 'smooth' }, 1500);
    } else {
        design.scrollIntoView({ behavior: 'smooth' }, 1500);
        console.log("no design");
    }
    console.log("design");
}
function developmentScroll() {
    if (development) {
        development.scrollIntoView({ behavior: 'smooth' }, 1500);
    } else {
        development.scrollIntoView({ behavior: 'smooth' }, 1500);
        console.log("no development");
    }
    console.log("development");
}
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// dropdown
document.getElementById("dropdown-link").addEventListener("click", function() {
  document.querySelector(".dropdown").classList.toggle("active-dropdown");
  document.querySelector("#dropdown-icon").classList.toggle("rotate");
});
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// password visibility
document.addEventListener("DOMContentLoaded", function() {
  const visibilityBtn = document.getElementById("svg5");
  const passwordInput = document.getElementById("password");
  const paddwordShow = document.querySelector(".visibility-on");
  const passwordHide = document.querySelector(".visibility-off");

  console.log(passwordInput);

  visibilityBtn.addEventListener("click", function() {
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      passwordHide.style.display = 'none';
      paddwordShow.style.display = 'block';
    } else {
      passwordInput.type = "password";
      passwordHide.style.display = 'block';
      paddwordShow.style.display = 'none';
    }
  });
});

document.addEventListener("DOMContentLoaded", function() {
  const visibilityBtn = document.getElementById("svg52");
  const passwordInput = document.getElementById("lpassword");
  const paddwordShow = document.querySelector(".lvisibility-on");
  const passwordHide = document.querySelector(".lvisibility-off");

  console.log(passwordInput);

  visibilityBtn.addEventListener("click", function() {
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      passwordHide.style.display = 'none';
      paddwordShow.style.display = 'block';
    } else {
      passwordInput.type = "password";
      passwordHide.style.display = 'block';
      paddwordShow.style.display = 'none';
    }
  });
});

document.addEventListener("DOMContentLoaded", function() {
  const visibilityBtn = document.getElementById("svg51");
  const passwordInput = document.getElementById("rep-password");
  const paddwordShow = document.querySelector(".rvisibility-on");
  const passwordHide = document.querySelector(".rvisibility-off");

  console.log(passwordInput);

  visibilityBtn.addEventListener("click", function() {
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      passwordHide.style.display = 'none';
      paddwordShow.style.display = 'block';
    } else {
      passwordInput.type = "password";
      passwordHide.style.display = 'block';
      paddwordShow.style.display = 'none';
    }
  });
});