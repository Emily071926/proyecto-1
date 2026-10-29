
const btnMenu = document.getElementById("btnMenu");
const menu = document.getElementById("menu");

if (btnMenu && menu) {
    btnMenu.addEventListener("click", function () {
        menu.classList.toggle("menu-abierto");
    });
}
