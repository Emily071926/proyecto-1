// Café Aroma - menú hamburguesa y accordion
document.addEventListener("DOMContentLoaded", function () {
  const btnMenu = document.getElementById("btnMenu");
  const menu = document.getElementById("menu");

  if (btnMenu && menu) {
    btnMenu.addEventListener("click", function () {
      const abierto = menu.classList.toggle("menu-abierto");
      btnMenu.classList.toggle("activo", abierto);
      btnMenu.setAttribute("aria-expanded", String(abierto));
      btnMenu.setAttribute("aria-label", abierto ? "Cerrar menú" : "Abrir menú");
    });

    menu.querySelectorAll("a").forEach(function (enlace) {
      enlace.addEventListener("click", function () {
        menu.classList.remove("menu-abierto");
        btnMenu.classList.remove("activo");
        btnMenu.setAttribute("aria-expanded", "false");
        btnMenu.setAttribute("aria-label", "Abrir menú");
      });
    });
  }

  const accordionItems = document.querySelectorAll(".accordion-item");
  accordionItems.forEach(function (item) {
    const titulo = item.querySelector(".accordion-titulo");
    if (!titulo) return;
    titulo.addEventListener("click", function () {
      const estabaAbierto = item.classList.contains("activo");
      accordionItems.forEach(function (otro) {
        otro.classList.remove("activo");
        const otroTitulo = otro.querySelector(".accordion-titulo");
        if (otroTitulo) {
          otroTitulo.setAttribute("aria-expanded", "false");
          const simbolo = otroTitulo.querySelector("span");
          if (simbolo) simbolo.textContent = "+";
        }
      });
      if (!estabaAbierto) {
        item.classList.add("activo");
        titulo.setAttribute("aria-expanded", "true");
        const simbolo = titulo.querySelector("span");
        if (simbolo) simbolo.textContent = "+";
      }
    });
  });
});
