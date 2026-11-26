
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Ponte en contacto con Café Aroma.">
  <title>Contacto | Café Aroma</title>
  <link rel="stylesheet" href="css/estilos.css">
  <script src="js/script.js" defer></script>
</head>

<body>

 <?php include 'header.php'; ?>
    

  <main>

    <section class="pagina-encabezado contenedor">
      <p class="etiqueta">Estamos para ayudarte</p>
      <h1>Contáctanos</h1>
      <p>Gracias por visitar Café Aroma. Nos encantará conocer tus consultas y comentarios.</p>
    </section>

    <section class="contenido-pagina contenedor contacto-grid">

      <div>
        <h2>Información de contacto</h2>

        <p>
          Puedes utilizar el formulario para escribirnos.
          Los datos de teléfono y correo quedan pendientes
          de completar con la información real del negocio.
        </p>

        <div class="dato-contacto">
          <strong>Teléfono:</strong> Por agregar
        </div>

        <div class="dato-contacto">
          <strong>Correo:</strong> Por agregar
        </div>

        <div class="dato-contacto">
          <strong>Horario:</strong> Por confirmar
        </div>
      </div>

      <!-- FORMULARIO DE CONTACTO -->
      <form class="formulario"
        id="formulario-contacto"
        action="enviar.php"
        method="POST"
        novalidate>

        <div id="errores-formulario"
          role="alert"
          aria-live="polite"
          hidden>
        </div>

        <label for="nombre">Nombre</label>
        <input
          type="text"
          id="nombre"
          name="nombre"
          placeholder="Tu nombre"
          required>

        <label for="correo">Correo electrónico</label>
        <input
          type="email"
          id="correo"
          name="correo"
          placeholder="tunombre@correo.com"
          required>

        <label for="mensaje">Mensaje</label>
        <textarea
          id="mensaje"
          name="mensaje"
          rows="5"
          placeholder="Escribe tu consulta"
          required></textarea>

        <button class="boton" type="submit">
          Enviar consulta
        </button>

        <p class="nota-formulario">
          Completa los datos para enviar tu consulta.
        </p>

      </form>

    </section>

  </main>

  <?php include 'footer.php'; ?>
   

</body>
</html>
