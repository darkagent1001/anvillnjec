const navbarButtons = document.querySelectorAll(".navbar-button");

navbarButtons.forEach((button) => {
  button.addEventListener("click", () => {
    const target = document.querySelector(button.getAttribute("data-target"));

    target.classList.toggle("show");
  });
});
