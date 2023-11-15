function showPopup() {
  const popup = document.querySelector(".popup");
  const overlay = document.querySelector(".popup-overlay");
  const body = document.body;

  if (popup && overlay && body) {
    popup.classList.add("popup_active");
    overlay.style.display = "block";
    body.style.overflowY = "hidden";
  }
}
function hidePopup() {
  document.querySelector(".popup").classList.remove("popup_active");
  document.querySelector(".popup-overlay").style.display = "none";
  document.body.style.overflowY = "scroll";
}
document.getElementById("sign-btn").addEventListener("click", showPopup);
document.querySelector(".close-btn").addEventListener("click", hidePopup);
document.querySelector(".popup-overlay").addEventListener("click", hidePopup);
document.addEventListener("keydown", function (e) {
  if (e.key === "Escape") {
    hidePopup();
  }
});

function showLPopup() {
    const popup = document.querySelector(".lpopup");
    const overlay = document.querySelector(".popup-overlay");
    const body = document.body;
  
    if (popup && overlay && body) {
      popup.classList.add("popup_active");
      overlay.style.display = "block";
      body.style.overflowY = "hidden";
    }
  }
  function hideLPopup() {
    document.querySelector(".lpopup").classList.remove("popup_active");
    document.querySelector(".popup-overlay").style.display = "none";
    document.body.style.overflowY = "scroll";
  }
  document.getElementById("login-btn").addEventListener("click", showLPopup);
  document.querySelector(".lclose-btn").addEventListener("click", hideLPopup);
  document.querySelector(".popup-overlay").addEventListener("click", hideLPopup);
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") {
      hideLPopup();
    }
  });

const inputs = [
  document.getElementById("name"),
  document.getElementById("tel"),
  document.getElementById("email"),
  document.getElementById("password"),
  document.getElementById("lpassword"),
  document.getElementById("rep-password"),
  document.getElementById("lname"),
];
const svgs = [
  document.getElementById("svg1"),
  document.getElementById("svg2"),
  document.getElementById("svg3"),
  document.getElementById("svg4"),
  document.getElementById("svg41"),
  document.getElementById("svg42"),
  document.getElementById("svg11"),
];

inputs.forEach((input, index) => {
  input.addEventListener("focus", () => {
    changeSvgColor(svgs[index]);
  });

  input.addEventListener("blur", () => {
    resetSvgColor(svgs[index]);
  });
});

function changeSvgColor(svgElement) {
  svgElement.style.fill = "var(--accent-color)";    
}

function resetSvgColor(svgElement) {
  svgElement.style.fill = "#fff";
}

