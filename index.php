
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Café Aroma: café, bebidas y postres en un ambiente acogedor.">
  <title>Inicio | Café Aroma</title>
  <link rel="stylesheet" href="css/estilos.css">
  <script src="js/script.js" defer></script>
</head>

<body>

  <?php include 'header.php'; ?>

  <main>

    <!-- PORTADA -->
    <section class="portada contenedor">
      <div class="portada-texto">
        <p class="etiqueta">Un momento para disfrutar</p>
        <h1>Bienvenidos a Café Aroma</h1>
        <p>
          Disfruta del aroma del café recién preparado,
          bebidas deliciosas y postres en un ambiente acogedor.
        </p>
        <a class="boton" href="servicios.php">
          Conoce nuestros servicios
        </a>
      </div>

      <img src="img/cafe-aroma.png"
        alt="Café recién preparado y postres de Café Aroma">
    </section>

    <!-- CARDS DINÁMICAS -->
    <section class="seccion contenedor">

      <div class="encabezado-seccion">
        <p class="etiqueta">Para cada gusto</p>
        <h2>Nuestros favoritos</h2>
        <p>
          Una selección de bebidas y postres para acompañar
          tus mejores momentos.
        </p>
      </div>

      <div class="cards" id="contenedorCards">
      </div>

    </section>

    <!-- PREGUNTAS FRECUENTES -->
    <section class="seccion contenedor preguntas">

      <div class="encabezado-seccion">
        <p class="etiqueta">Te ayudamos</p>
        <h2>Preguntas frecuentes</h2>
      </div>

      <div class="accordion" id="accordion">

        <article class="accordion-item">
          <button class="accordion-titulo" type="button"
            aria-expanded="false">
            ¿Qué puedo encontrar en Café Aroma?
            <span aria-hidden="true">+</span>
          </button>
          <div class="accordion-contenido">
            <p>
              Ofrecemos café, bebidas frías, postres y un ambiente
              agradable para disfrutar.
            </p>
          </div>
        </article>

        <article class="accordion-item">
          <button class="accordion-titulo" type="button"
            aria-expanded="false">
            ¿Tienen opciones de postres?
            <span aria-hidden="true">+</span>
          </button>
          <div class="accordion-contenido">
            <p>
              Sí, contamos con deliciosos postres para acompañar
              nuestras bebidas.
            </p>
          </div>
        </article>

        <article class="accordion-item">
          <button class="accordion-titulo" type="button"
            aria-expanded="false">
            ¿Dónde puedo consultar los servicios?
            <span aria-hidden="true">+</span>
          </button>
          <div class="accordion-contenido">
            <p>
              Puedes visitar la sección Servicios desde el menú principal.
            </p>
          </div>
        </article>

        <article class="accordion-item">
          <button class="accordion-titulo" type="button"
            aria-expanded="false">
            ¿Cómo puedo comunicarme?
            <span aria-hidden="true">+</span>
          </button>
          <div class="accordion-contenido">
            <p>
              Entra a la sección Contacto y completa el formulario de consulta.
            </p>
          </div>
        </article>

      </div>
    </section>

  </main>

  <!-- FOOTER -->
  <?php include 'footer.php'; ?>

</body>
</html>
