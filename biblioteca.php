<?php
require_once "menu.php"; // ✅ Agregamos el menú

$libros = [
    ["titulo" => "PHP para Principiantes", "autor" => "Carlos Ruiz", "precio" => 19.99, "categoria" => "Desarrollo Web"],
    ["titulo" => "JavaScript Avanzado", "autor" => "Laura García", "precio" => 25.99, "categoria" => "Desarrollo Web"],
    ["titulo" => "Algoritmos en Python", "autor" => "Miguel Fernández", "precio" => 29.99, "categoria" => "Algoritmos"],
    ["titulo" => "Bases de Datos SQL", "autor" => "Ana López", "precio" => 22.50, "categoria" => "Bases de Datos"]
];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="css/styles.css"> <!-- ✅ Conectar CSS externo -->
</head>
<body>

<h1>Biblioteca</h1>

<h2>Información de todos los libros</h2>
<table>
    <thead>
    <tr>
        <th>Título</th>
        <th>Autor</th>
        <th>Precio (€)</th>
        <th>Categoría</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($libros as $libro): ?>
        <tr>
            <td><?= $libro['titulo']; ?></td>
            <td><?= $libro['autor']; ?></td>
            <td><?= number_format($libro['precio'], 2); ?> €</td>
            <td><?= $libro['categoria']; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<!-- 🔹 LIBROS DE DESARROLLO WEB -->
<h2>Libros de Desarrollo Web</h2>
<ul>
    <?php foreach (array_filter($libros, fn($libro) => $libro["categoria"] === "Desarrollo Web") as $libro): ?>
        <li><?= $libro['titulo']; ?> - <?= $libro['autor']; ?></li>
    <?php endforeach; ?>
</ul>

</body>
</html>
