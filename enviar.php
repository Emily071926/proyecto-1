<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: contacto.php");
    exit;
}

$nombre = trim($_POST["nombre"] ?? "");
$correo = trim($_POST["correo"] ?? "");
$mensaje = trim($_POST["mensaje"] ?? "");

$errores = [];

if ($nombre === "") {
    $errores[] = "El nombre es obligatorio.";
}

if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    $errores[] = "El correo electrónico no es válido.";
}

if ($mensaje === "") {
    $errores[] = "El mensaje es obligatorio.";
}

if (!empty($errores)) {
    echo "<h2>Hay errores en el formulario</h2>";

    foreach ($errores as $error) {
        echo "<p>" . htmlspecialchars($error) . "</p>";
    }

    echo '<a href="contacto.php">Volver al formulario</a>';
    exit;
}

header("Location: gracias.php");
exit;
?>