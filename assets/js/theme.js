const themeToggler = document.querySelector("#theme-toggler");
const themeStorage = localStorage.getItem("theme");
const htmlElement = document.documentElement;

if (
  themeStorage === "dark" ||
  (!themeStorage && window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
  htmlElement.classList.add("dark");
  localStorage.setItem("theme", "dark");
}

themeToggler.addEventListener("click", () => {
  if (htmlElement.classList.contains("dark")) {
    htmlElement.classList.remove("dark");
    localStorage.setItem("theme", "light");
  } else {
    htmlElement.classList.add("dark");
    localStorage.setItem("theme", "dark");
  }
});
