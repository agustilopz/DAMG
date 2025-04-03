// Manejo del menú desplegable
const menuToggle = document.getElementById("menu-toggle");
const sidebar = document.getElementById("sidebar");
const closeMenu = document.getElementById("close-menu");

menuToggle.addEventListener("click", () => {
    sidebar.classList.toggle("active");
});

closeMenu.addEventListener("click", () => {
    sidebar.classList.remove("active");
});
