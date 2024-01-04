// Get the button:
let scrollToTopBtn = document.getElementById("scroll-top");


window.addEventListener("scroll",displayScrollBtn);

scrollToTopBtn.addEventListener("click",scrollToTop);

function displayScrollBtn() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    scrollToTopBtn.style.display = "block";
  } else {
    scrollToTopBtn.style.display = "none";
  }
}

function scrollToTop() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}