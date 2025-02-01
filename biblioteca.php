<?php

$libros = [
    ["titulo" => "PHP para Principiantes", "autor" => "Carlos Ruiz", "precio" => 19.99, "categoria" => "Desarrollo Web"],
    ["titulo" => "JavaScript Avanzado", "autor" => "Laura García", "precio" => 25.99, "categoria" => "Desarrollo Web"],
    ["titulo" => "Algoritmos en Python", "autor" => "Miguel Fernández", "precio" => 29.99, "categoria" => "Algoritmos"],
    ["titulo" => "Bases de Datos SQL", "autor" => "Ana López", "precio" => 22.50, "categoria" => "Bases de Datos"]
];

echo '<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 60%; margin: 20px auto; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>';

echo '<h2 style="text-align: center;">Información de todos los libros</h2>';
echo '<table>';
echo '<tr><th>Título</th><th>Autor</th><th>Precio (€)</th><th>Categoría</th></tr>';
foreach ($libros as $libro) {
    echo "<tr>
        <td>{$libro['titulo']}</td>
        <td>{$libro['autor']}</td>
        <td>{$libro['precio']}</td>
        <td>{$libro['categoria']}</td>
    </tr>";
}
echo '</table>';

// libros con categoria "Desarrollo Web"
$librosDesarrolloWeb = array_filter($libros, fn($libro) => $libro["categoria"] === "Desarrollo Web");

echo '<h2 style="text-align: center;">Libros de Desarrollo Web</h2>';
echo '<ul>';
foreach ($librosDesarrolloWeb as $libro) {
    echo "<li>{$libro['titulo']} - {$libro['autor']}</li>";
}
echo '</ul>';

echo '</body></html>';
