
// Café Aroma - Menú, accordion, cards y validación

document.addEventListener("DOMContentLoaded", function () {

  // 1. MENÚ HAMBURGUESA
  const btnMenu = document.getElementById("btnMenu");
  const menu = document.getElementById("menu");

  if (btnMenu && menu) {
    btnMenu.addEventListener("click", function () {
      const abierto = menu.classList.toggle("menu-abierto");

      btnMenu.classList.toggle("activo", abierto);
      btnMenu.setAttribute("aria-expanded", String(abierto));
      btnMenu.setAttribute(
        "aria-label",
        abierto ? "Cerrar menú" : "Abrir menú"
      );
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

  // 2. ACCORDION
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
      }
    });
  });

  // 3. ARREGLO DE PRODUCTOS
  const productos = [
    {
      titulo: "Café recién preparado",
      descripcion: "Disfruta una taza de café con aroma y sabor especial.",
      imagen: "img/cafe-aroma.png",
      alt: "Taza de café recién preparado",
      enlace: "servicios.php"
    },
    {
      titulo: "Cappuccino",
      descripcion: "Una bebida cremosa ideal para cualquier momento del día.",
      imagen: "img/cafe2.png",
      alt: "Cappuccino con arte latte",
      enlace: "servicios.php"
    },
    {
      titulo: "Postres",
      descripcion: "Opciones dulces para acompañar tu bebida favorita.",
      imagen: "img/postres.png",
      alt: "Pastel de chocolate",
      enlace: "servicios.php"
    },
    {
      titulo: "Bebidas frías",
      descripcion: "Alternativas refrescantes para disfrutar cuando quieras.",
      imagen: "img/cafe2.png",
      alt: "Bebida de café servida en una taza",
      enlace: "servicios.php"
    },
    {
      titulo: "Algo dulce",
      descripcion: "Un acompañamiento delicioso para compartir.",
      imagen: "img/postres.png",
      alt: "Postre dulce para compartir",
      enlace: "servicios.php"
    },
    {
      titulo: "Un espacio acogedor",
      descripcion: "Un lugar para conversar, descansar y disfrutar.",
      imagen: "img/cafe-aroma.png",
      alt: "Ambiente de cafetería con café",
      enlace: "contacto.php"
    }
  ];

  // 4. FUNCIÓN PARA GENERAR LAS CARDS
  function pintarCards() {
    const contenedor = document.getElementById("contenedorCards");

    if (!contenedor) return;

    contenedor.innerHTML = "";

    productos.forEach(function (producto) {
      const tarjeta = document.createElement("article");
      tarjeta.classList.add("card");

      const imagen = document.createElement("img");
      imagen.src = producto.imagen;
      imagen.alt = producto.alt;

      const contenido = document.createElement("div");
      contenido.classList.add("card-contenido");

      const titulo = document.createElement("h3");
      titulo.textContent = producto.titulo;

      const descripcion = document.createElement("p");
      descripcion.textContent = producto.descripcion;

      const enlace = document.createElement("a");
      enlace.classList.add("boton", "boton-secundario");
      enlace.href = producto.enlace;
      enlace.textContent =
        producto.enlace === "contacto.php"
          ? "Contáctanos"
          : "Ver servicio";

      contenido.appendChild(titulo);
      contenido.appendChild(descripcion);
      contenido.appendChild(enlace);

      tarjeta.appendChild(imagen);
      tarjeta.appendChild(contenido);

      contenedor.appendChild(tarjeta);
    });
  }

  pintarCards();

  // 5. VALIDACIÓN DEL FORMULARIO
  const formulario = document.getElementById("formulario-contacto");

  if (formulario) {
    formulario.addEventListener("submit", function (event) {

      event.preventDefault();

      const nombre = document.getElementById("nombre");
      const correo = document.getElementById("correo");
      const mensaje = document.getElementById("mensaje");
      const errores = document.getElementById("errores-formulario");

      const listaErrores = [];

      const nombreValor = nombre.value.trim();
      const correoValor = correo.value.trim();
      const mensajeValor = mensaje.value.trim();

      errores.innerHTML = "";
      errores.hidden = true;

      if (nombreValor === "") {
        listaErrores.push("El nombre es obligatorio.");
      }

      const expresionCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

      if (!expresionCorreo.test(correoValor)) {
        listaErrores.push("Escribe un correo electrónico válido.");
      }

      if (mensajeValor === "") {
        listaErrores.push("El mensaje no puede estar vacío.");
      }

      if (listaErrores.length > 0) {
        errores.innerHTML =
          "<strong>Por favor, corrige lo siguiente:</strong>";

        const lista = document.createElement("ul");

        listaErrores.forEach(function (error) {
          const elemento = document.createElement("li");
          elemento.textContent = error;
          lista.appendChild(elemento);
        });

        errores.appendChild(lista);
        errores.hidden = false;

        return;
      }

      // Enviar los datos al servidor PHP
      nombre.value = nombreValor;
      correo.value = correoValor;
      mensaje.value = mensajeValor;

      formulario.submit();

    });
  }
  // 6. BOTÓN VOLVER ARRIBA
  const botonArriba = document.createElement("button");

  botonArriba.textContent = "↑";
  botonArriba.setAttribute("aria-label", "Volver arriba");

  botonArriba.style.cssText =
    "position:fixed; bottom:25px; right:25px; display:none; " +
    "padding:12px 18px; background:#593725; color:white; " +
    "border:none; border-radius:8px; cursor:pointer; font-size:22px;";

  document.body.appendChild(botonArriba);

  window.addEventListener("scroll", function () {
    botonArriba.style.display = window.scrollY > 300 ? "block" : "none";
  });

  botonArriba.addEventListener("click", function () {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
});
