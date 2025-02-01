<?php
require_once "menu.php"; // ✅ Agregamos el menú
require_once "clases/TriangleGenerator.php";

use Clases\TriangleGenerator;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Triángulos</title>
    <link rel="stylesheet" href="css/styles.css"> <!-- ✅ Conectar CSS externo -->
</head>
<body>

<h1>Generador de Triángulos</h1>

<div class="triangle-container">
    <pre><?= TriangleGenerator::generateTriangle(6); ?></pre>
</div>

</body>
</html>
