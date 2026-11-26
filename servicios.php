
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Conoce las bebidas y postres de Café Aroma.">
  <title>Servicios | Café Aroma</title>
  <link rel="stylesheet" href="css/estilos.css">
  <script src="js/script.js" defer></script>
</head>

<body>

  <?php include 'header.php'; ?>

  <main>

    <section class="pagina-encabezado contenedor">
      <p class="etiqueta">Lo que ofrecemos</p>
      <h1>Nuestros servicios</h1>
      <p>En Café Aroma ofrecemos opciones para disfrutar de una pausa deliciosa.</p>
    </section>

    <section class="contenido-pagina contenedor">

      <div class="servicio-fila">
        <img src="img/cafe-aroma.png" alt="Taza de café">
        <div>
          <h2>Café caliente</h2>
          <p>Disfruta café recién preparado, ideal para comenzar el día o compartir una conversación.</p>
        </div>
      </div>

      <div class="servicio-fila">
        <img src="img/cafe2.png" alt="Cappuccino">
        <div>
          <h2>Bebidas frías y calientes</h2>
          <p>Opciones para diferentes gustos y momentos, con sabores que acompañan tu día.</p>
        </div>
      </div>

      <div class="servicio-fila">
        <img src="img/postres.png" alt="Postre de chocolate">
        <div>
          <h2>Postres</h2>
          <p>Deliciosos postres para complementar tu bebida favorita.</p>
        </div>
      </div>

      <div class="llamado">
        <h2>¿Quieres saber más?</h2>
        <p>Escríbenos y con gusto atenderemos tus consultas.</p>
        <a class="boton" href="contacto.php">Contáctanos</a>
      </div>

    </section>

    <section class="contenedor preguntas">
      <h2>Preguntas frecuentes</h2>

      <div class="accordion">

        <div class="accordion-item">
          <button class="accordion-titulo" aria-expanded="false">
            ¿Qué bebidas ofrece Café Aroma? <span>+</span>
          </button>
          <div class="accordion-contenido">
            <p>Ofrecemos café caliente, cappuccino y bebidas frías.</p>
          </div>
        </div>

        <div class="accordion-item">
          <button class="accordion-titulo" aria-expanded="false">
            ¿Qué postres puedo disfrutar? <span>+</span>
          </button>
          <div class="accordion-contenido">
            <p>Contamos con deliciosas opciones de postres.</p>
          </div>
        </div>

        <div class="accordion-item">
          <button class="accordion-titulo" aria-expanded="false">
            ¿Dónde puedo contactarlos? <span>+</span>
          </button>
          <div class="accordion-contenido">
            <p>Puedes comunicarte con nosotros desde la página de contacto.</p>
          </div>
        </div>

        <div class="accordion-item">
          <button class="accordion-titulo" aria-expanded="false">
            ¿Dónde está ubicado Café Aroma? <span>+</span>
          </button>
          <div class="accordion-contenido">
            <p>Próximamente compartiremos nuestra ubicación.</p>
          </div>
        </div>

      </div>
    </section>

  </main>

  <?php include 'footer.php'; ?>

</body>
</html>
